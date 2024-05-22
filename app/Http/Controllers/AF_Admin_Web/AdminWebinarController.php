<?php

namespace App\Http\Controllers\AF_Admin_Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Event;

class AdminWebinarController extends Controller
{
    public function showWebinar()
    {
        $dataWebinar = Event::where('activity_category_event', 'WEBINAR')->get();

        dd($dataWebinar);

        // return view("A_Page_Admin.K_Event.admin-event", compact('dataWebinar'));
    }
       
   
}
