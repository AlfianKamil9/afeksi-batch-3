<?php

namespace App\Http\Controllers\Event;

use Carbon\Carbon;
use App\Models\User;
use App\Models\Event;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Services\EventService;
use App\Models\EventTransaction;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class CampaignController extends Controller
{

    protected $campaign;
    public function __construct(EventService $queryCampaign)
    {
        $this->campaign = $queryCampaign;
    }
    public function index(Request $request)
    {
        $query = $this->campaign->getAllCampaign();

        // Filter using input type text
        if ($request->has('input_search')) {
            $query->where('title_event', 'like', '%' . $request->input('input_search') . '%');
        }

        // Filter by date using dropdown
        $dateFilter = $request->input('sort_date');
        if ($dateFilter === 'oldest') {
            $query->orderBy('id', 'asc');
        }
        else {
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

        // Filter by category using checkbox
        if ($request->has('category_event_id')) {
            $query->where('category_event_id', $request->input('category_event_id'));
        }

        // filter by time_category_event using checkbox
        if ($request->has('time_category_event')) {
            $query->where('time_category_event', $request->input('time_category_event'));
        }

        // filter by pay_category_event using checkbox
        if ($request->has('pay_category_event')) {;
            $query->where('pay_category_event', $request->input('pay_category_event'));
        }
    
        $data = $query->get();

        
        return view('pages.Kegiatan.kegiatan-campaign', [
            'data' => $data
        ]);
    }


    // DETAIL CAMPAIGN
    public function show($slug)
    {
        $data = $this->campaign->getDetailCampaign($slug);
        $data->time_start = Carbon::parse($data->time_start)->format('H:i');
        $data->time_finish = Carbon::parse($data->time_finish)->format('H:i');
        $data->date_event = Carbon::parse($data->date_event)->format('d F Y');
        return view('pages.Kegiatan.detail-campaign',[
            'data' => $data
        ]);
    }

    // DAFTAR CAMPAIGN
    public function store(Request $request, $slug) {
        $validatedData = $request->validate([
            "nama" => "required",
            "email" => "required",
            "institusi" => "required",
            "domisili" => "required",
            "info" => "required",
            "bukti_follow" => "required|mimes:jpeg,jfif,jpg,png|max:2048",
            "bukti_linkedin" => "required|mimes:jpeg,jfif,jpg,png|max:2048",
            "bukti_share" => "required|mimes:jpeg,jfif,jpg,png|max:2048",
        ]);
        
        $user = auth()->user();
        User::where('id', auth()->user()->id)->update([
            'institusi' => $request->institusi,
            'domisili' => $request->domisili,
            'no_whatsapp' => $request->no_whatsapp
        ]);
        $buktiFollow = $validatedData['bukti_follow']->store('Campaign/bukti_follow', 'public');
        $buktiLinkedin = $validatedData['bukti_linkedin']->store('Campaign/bukti_linkedin', 'public');
        $buktiShare = $validatedData['bukti_share']->store('Campaign/bukti_share', 'public');

        $event = Event::where('slug_event', $slug)->first();
        $event_id = $event->id;
        $konselorData = [
            'user_id' => $user->id,
            'status' => 'FREE',
            'ref_transaction_event' => 'CAM-'.Carbon::now()->format('dmYHis'),
            'event_id' => $event_id,
            'info' => $validatedData['info'],
            'bukti_follow' => $buktiFollow,
            'bukti_linkedin' => $buktiLinkedin,
            'bukti_share' => $buktiShare,
        ];
        EventTransaction::create($konselorData);
        return redirect()->back()->with('success', 'Pendaftaran Campaign berhasil dikirimkan');
    }
   
}
