<?php
namespace App\Http\Controllers\Event;
use Carbon\Carbon;
use App\Models\User;
use App\Models\Event;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\EventTransaction;
use App\Http\Controllers\Controller;
use App\Services\EventService;

class WebinarController extends Controller
{
    protected $webinar;
    public function __construct(EventService $queryWebinar)
    {
        $this->webinar = $queryWebinar;
    }

     // MENAMPILKAN DAFTAR WEBINAR
    public function index(Request $request)
    {
        //MENAMPILKAN DAFTAR WEBINAR DISUSUN BERDASARKAN TANGGAL
        $query = $this->webinar->getAllWebinar();

        // Filter using input type text
        if ($request->has('input_search')) {
            $query->where('title_event', 'like', '%' . $request->input('input_search') . '%');
        }

        // Filter by date using dropdown
        $dateFilter = $request->input('sort_date');
        if ($dateFilter == 'oldest') {
            $query->orderBy('id', 'asc');
        }
        else  {
            $query->orderBy('id', 'desc');
        } 

        // Filter by minimum and maximum price using input fields
        $minPrice = $request->input('min_price');
        $maxPrice = $request->input('max_price');
        if ($minPrice !== null) {
            $query->where('price_event', '>=', $minPrice);
        }
        if ($maxPrice !== null) {
            $query->where('price_event', '<=', $maxPrice);
        }

        // filter by category_event_id using checkbox
        if ($request->has('category_event_id')) {
            $query->where('category_event_id', $request->input('category_event_id'));
        }

        // filter by time_category_event using checkbox
        if ($request->has('time_category_event')) {
            $query->where('time_category_event', $request->input('time_category_event'));
        }

        // filter by pay_category_event using checkbox
        if ($request->has('pay_category_event')) {
            $query->where('pay_category_event', $request->input('pay_category_event'));
        }

        $data = $query->get();

        return view('pages.Kegiatan.kegiatan-webinar', [
            'data' => $data,
        ]);
    }

    //MENAMPILKAN DETAIL WEBINAR
    public function show($slug)
    {
        $data = $this->webinar->getDetailWebinar($slug);
        $data->time_start = Carbon::parse($data->time_start)->format('H:i');
        $data->time_finish = Carbon::parse($data->time_finish)->format('H:i');
        $data->date_event = Carbon::parse($data->date_event)->format('d F Y');

        return view('pages.Kegiatan.detail-webinar',[
            'data' => $data
        ]);
    }

    //MENYIMPAN DATA PENDAFTAR WEBINAR
    public function store(Request $request, $slug)
    {
        //VALIDASI DATA PENDAFTAR WEBINAR
        $validatedData = $request->validate([
            'institusi' => 'required',
            'domisili' => 'required',
            'no_whatsapp' => 'required',
            'info' => 'required',
            'bukti_follow' => 'required|file|max:10240',
            'bukti_linkedin' => 'required|file|max:10240',
            'bukti_share' => 'nullable|file|max:10240',
        ]);

        //GET AUTH USER
        $user = auth()->user();

        //UPDATE DATA TABLE USER
        User::where('id', auth()->user()->id)->update([
            'institusi' => $request->institusi,
            'domisili' => $request->domisili,
            'no_whatsapp' => $request->no_whatsapp
        ]);

        // MEYIMPAN DATA KE FOLDER PUBLIC
        $buktiFollow = $validatedData['bukti_follow']->store('Webinar/bukti_follow', 'public');
        $buktiLinkedin = $validatedData['bukti_linkedin']->store('Webinar/bukti_linkedin', 'public');
        $buktiShare = $validatedData['bukti_share']->store('Webinar/bukti_share', 'public');

        //GET DATA WEBINAR
        $event = Event::where('slug_event', $slug)->first();
        $event_id = $event->id;

        //INSERT DATA KE TABEL EventTransaction
        $ref_transaction_event = 'WEB-'.strtoupper(Str::random(5)).Carbon::now()->format('dmYHis');
        $konselorData = [
            'user_id' => $user->id,
            'event_id' => $event_id,
            'info' => $validatedData['info'],
            'bukti_follow' => $buktiFollow,
            'bukti_linkedin' => $buktiLinkedin,
            'bukti_share' => $buktiShare,
            'ref_transaction_event' => $ref_transaction_event,
            'date_order' => Carbon::now(),
        ];

        if ($event->pay_category_event === 'FREE') {
            $konselorData['status'] = 'FREE';
        } elseif ($event->pay_category_event === 'PAID') {
            $konselorData['status'] = 'UNPAID';
        }

        $transaction = EventTransaction::create($konselorData);

        //JIKA WEBINAR BERBAYAR ARAHKAN KE HALAMAN PEMBAYARAN
        if ($event->pay_category_event === 'PAID') {
            return redirect()->route('checkout-webinar', ['ref_transaction_event' => $transaction->ref_transaction_event]);
        } else {
            return redirect()->back()->with('success', 'Register Webinar has been submitted.');
        }
    }
}