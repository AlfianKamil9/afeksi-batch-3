<?php

namespace App\Http\Controllers\AF_Admin_Web;

use App\Http\Controllers\Controller;
use App\Models\Event;
use Illuminate\Http\Request;

class campaignDashboard extends Controller
{
    public function showCampaign()
    {
        $dataCampaign = Event::where('activity_category_event', 'CAMPAIGN')->get()->paginate(10);
        
        return view('A_Page_Admin.K_Event.admin-event', [
            'dataCampaign' => $dataCampaign
        ]);
    }
}
