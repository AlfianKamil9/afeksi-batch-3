<?php

namespace App\Http\Controllers\AF_Admin_Web;

use App\Http\Controllers\Controller;
use App\Models\Event;
use App\Models\EventCategory;
use App\Models\GuestStar;
use Illuminate\Http\Request;

class eventDashboardController extends Controller
{
    public function index(Request $request)
    {
        $query = Event::with('event_categories')->where('activity_category_event', 'CAMPAIGN');

        if ($request->has('search')) {
            $search = $request->input('search');
            $query->where('title_event', 'like', '%' . $search . '%');
        }

        $dataCampaign = $query->paginate(10);

        $jumlahCampaign = Event::where('activity_category_event', 'CAMPAIGN')->count();

        return view('A_Page_Admin.K_Event.admin-event', compact('dataCampaign', 'jumlahCampaign'));
    }

    public function destroy($id)
    {
        $event = Event::find($id);
        $event->delete();
        return redirect()->route('admin.events')->with('success', 'Campaign deleted successfully');
    }


    public function showAdd()
    {
        $g = GuestStar::all();
        $l = GuestStar::all();
        $e = EventCategory::all();
        //return $g;
        return view('A_Page_Admin.K_Event.tambah-data-event', compact('e', 'g', 'l'));
    }
}
