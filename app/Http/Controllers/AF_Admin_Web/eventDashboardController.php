<?php

namespace App\Http\Controllers\AF_Admin_Web;

use App\Models\Event;
use App\Models\GuestStar;
use Illuminate\Http\Request;
use App\Models\EventCategory;
use App\Http\Controllers\Controller;

class eventDashboardController extends Controller
{
    public function index(Request $request) {

        
        $query = Event::with('event_categories')->where('activity_category_event', 'WEBINAR');

        if ($request->has('search')) {
            $search = $request->input('search');
            $query->where('title_event', 'LIKE', '%' .$search .'%');
        }

        $dataWebinar = $query->paginate(10);

        $jumlahWebinar = Event::where('activity_category_event', 'WEBINAR')->count();

        //filter data terlama terbaru
        $dataFilter = $request->input('sort_data');
        if ($dataFilter == 'oldest') {
            $query->orderBy('id', 'desc');
        }
        




        return view('A_Page_Admin.K_Event.admin-event', compact('dataWebinar', 'jumlahWebinar'));

    }


    public function delete($id){
        $dataWebinar = Event::find($id);
        $dataWebinar->delete();
        return redirect()->route('admin.events')->with('success','Data Berhasil Dihapus');
    }

    public function showAdd() {
        $g = GuestStar::all();
        $l = GuestStar::all();
        $e = EventCategory::all();
        //return $g;
        return view('A_Page_Admin.K_Event.tambah-data-event', compact('e', 'g', 'l'));
    }
}
