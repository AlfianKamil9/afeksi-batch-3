<?php

namespace App\Http\Controllers\AF_Admin_Web;

use App\Models\Event;
use App\Models\GuestStar;
use Illuminate\Http\Request;
use App\Models\EventCategory;
use App\Http\Controllers\Controller;

class eventDashboardController extends Controller
{
    public function index() {
        $dataWebinar = Event::with('event_categories')->where('activity_category_event', 'WEBINAR')->get();
        $dataCampaign = Event::with('event_categories')->where('activity_category_event', 'CAMPAIGN')->get();
        return view('A_Page_Admin.K_Event.admin-event', compact('dataWebinar','dataCampaign'));
    }

    public function showAdd() {
        $g = GuestStar::all();
        $l = GuestStar::all();
        $e = EventCategory::all();
        //return $g;
        return view('A_Page_Admin.K_Event.tambah-data-event', compact('e', 'g', 'l'));
    }

    public function showDetail($activity_category_event, $id) {
        $e = EventCategory::all();
        if ($activity_category_event == 'CAMPAIGN') {
            $data = Event::with('event_categories')->where('activity_category_event', 'CAMPAIGN');
        } else if ($activity_category_event == 'WEBINAR') {
            $data = Event::with('event_categories')->where('activity_category_event', 'WEBINAR');
        }
        
        $data = $data->findOrFail($id);
        return view('A_Page_Admin.K_Event.detail-data-event', compact('data', 'e'));
    }

    public function showEdit($id) {
        $e = EventCategory::all();
        $dataWebinar = Event::with('event_categories')->where('activity_category_event', 'WEBINAR')->findOrFail($id);
        return view('A_Page_Admin.K_Event.edit-data-event', compact('dataWebinar', 'e'));
    }
}
