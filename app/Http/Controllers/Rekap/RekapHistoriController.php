<?php

namespace App\Http\Controllers\Rekap;

use App\Http\Controllers\Controller;
use App\Models\Event;
use App\Services\EventService;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Date;

class RekapHistoriController extends Controller
{
    protected $recapEvent;

    public function __construct(EventService $eventService)
    {
        $this->recapEvent = $eventService;
    }

    public function showRekapHistory(Request $request)
    {
        //MENAMPILKAN DAFTAR WEBINAR DISUSUN BERDASARKAN TANGGAL
        $query = $this->recapEvent->getAllRecap();

        // Filter using input type text
        if ($request->has('input_search')) {
            $query->where('title_event', 'like', '%'.$request->input('input_search').'%');
        }

        // Filter by date using dropdown
        $dateFilter = $request->input('sort_date');
        if ($dateFilter === 'latest') {
            $query->orderBy('date_event', 'desc');
        } elseif ($dateFilter === 'oldest') {
            $query->orderBy('date_event', 'asc');
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

        //MENGUBAH FORMAT TANGGAL DAN WAKTU
        foreach ($data as $event) {
            $event->time_start = Carbon::parse($event->time_start)->format('H:i');
            $event->time_finish = Carbon::parse($event->time_finish)->format('H:i');
            $event->date_event = Carbon::parse($event->date_event)->format('d F Y');
        }

        //return response()->json($data);
        return view('pages.rekaphistory', ['data' => $data]);
    }

    public function showRekapHistoryDetail($slug)
    {
        $data = $this->recapEvent->getDetailRecap($slug);

        $data->time_start = Carbon::parse($data->time_start)->format('H:i');
        $data->time_finish = Carbon::parse($data->time_finish)->format('H:i');
        $data->date_event = Carbon::parse($data->date_event)->format('d F Y');

        return view('pages.rekaphistory-detail', ['data' => $data]);
    }
}
