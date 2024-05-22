<?php

namespace App\Http\Controllers\AF_Admin_Web;

use App\Http\Controllers\Controller;
use App\Models\GuestStar;
use App\Models\EventCategory;
use Illuminate\Http\Request;
use App\Models\Event;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class AdminWebinarController extends Controller
{
    public function showWebinar()
    {
        $dataWebinar = Event::with('event_categories')->where('activity_category_event', 'WEBINAR')->get();

        return view("A_Page_Admin.K_Event.admin-event", compact('dataWebinar'));
        

    }
       
   
}
