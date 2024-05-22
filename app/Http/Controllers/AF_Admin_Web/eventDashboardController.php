<?php

namespace App\Http\Controllers\AF_Admin_Web;

use App\Http\Controllers\Controller;
use App\Models\EventCategory;
use App\Models\GuestStar;
use App\Models\Event;
use Illuminate\Http\Request;

class eventDashboardController extends Controller
{
    public function index() {
        return view('A_Page_Admin.K_Event.admin-event');
        $dataWebinar = Event::with('event_categories')->where('activity_category_event', 'WEBINAR')->get();

        return view("A_Page_Admin.K_Event.admin-event", compact('dataWebinar'));
    }

    public function showAdd() {
        $g = GuestStar::all();
        $l = GuestStar::all();
        $e = EventCategory::all();
        //return $g;
        return view('A_Page_Admin.K_Event.tambah-data-event', compact('e', 'g', 'l'));
    }
}
