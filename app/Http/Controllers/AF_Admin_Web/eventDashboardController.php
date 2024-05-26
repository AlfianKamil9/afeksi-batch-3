<?php

namespace App\Http\Controllers\AF_Admin_Web;


use App\Models\Event;
use App\Models\EventCategory;
use App\Models\EventMaterialSession;
use App\Models\GuestStar;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class eventDashboardController extends Controller
{

    public function index (Request $request) {
        $event = new Event();

        if ($request->has('search')) {
            $search = $request->input('search');
            $event = $event->where('title_event', 'LIKE', '%' .$search .'%');
        }


        //filter data terlama terbaru
        $dataFilter = $request->input('sort_data');
        if ($dataFilter == 'latest') {
            $event->orderBy('id', 'desc');
        }
        $event = $event->paginate(10);
        return view('A_Page_Admin.K_Event.admin-event', compact('event'));

    }

    public function delete($id){
        $dataWebinar = Event::find($id);
        $dataWebinar->delete();
        return redirect()->route('admin.events.index')->with('success','Data Berhasil Dihapus');
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

    public function createEvent(Request $request){
        //validasi
        $messages = [
            'category_event_id.required' => 'Category Event wajib diisi.',
            'activity_category_event.required' => 'Category Activity event wajib diisi.',
            'title_event.required' => 'Title Event wajib diisi.',
            'cover_event.required' => 'Cover event wajib diupload.',
            'cover_event.image' => 'Cover event harus berupa gambar.',
            'cover_event.mimes' => 'Cover event harus berupa file dengan format jpeg, png, jpg, atau gif.',
            'time_category_event.required' => 'Time Category event wajib diisi.',
            'pay_category_event.required' => 'Pay Category Event wajib diisi.',
            'registration_start.required' => 'Registration Start wajib diisi.',
            'registration_end.required' => 'Registration End wajib diisi.',
            'registration_end.after_or_equal' => 'Registration End Date harus setelah atau sama dengan Registration Start Date pendaftaran.',
            'date_event.required' => 'Date event wajib diisi.',
            'time_start.required' => 'Time Start event wajib diisi.',
            'time_finish.required' => 'Time Finish event wajib diisi.',
            'time_finish.after' => 'Waktu selesai event harus setelah waktu mulai event.',
            'description_event.required' => 'Description event wajib diisi.',
            'description_event.string' => 'Description event harus berupa teks.',
            'status_event.required' => 'Status event wajib diisi.',
        ];
    
        $request->validate([
            'category_event_id' => 'required',
            'activity_category_event' => 'required',
            'title_event' => 'required',
            'cover_event' => 'required|image|mimes:jpeg,png,jpg',
            'time_category_event' => 'required|string|max:255',
            'pay_category_event' => 'required|string|max:255',
            'registration_start' => 'required',
            'registration_end' => 'required|after_or_equal:registration_start',
            'date_event' => 'required|date',
            'time_start' => 'required',
            'time_finish' => 'required|after:time_start',
            'description_event' => 'required|string',
            'status_event' => 'required',
        ], $messages);

        // membuat slug
        $Eventslug = str_replace(' ', '-', $request->title_event);

        // mengupload file gambar
        $extension = $request->file('cover_event')->getClientOriginalExtension();
        $photoName = $request->title_event . now()->timestamp . '.' . $extension;
        $request->file('cover_event')->storeAs('assets/img/event/',$photoName);

        //pembuatan event
        $event = Event::create([
        'category_event_id' => $request->category_event_id,
        'activity_category_event' => $request->activity_category_event,
        'title_event' => $request->title_event,
        'slug_event'=> $Eventslug,
        'time_category_event' => $request->time_category_event,
        'pay_category_event' => $request->pay_category_event,
        'registration_start' => $request->registration_start,
        'registration_end' => $request->registration_end,
        'date_event'=> $request->date_event,
        'time_start'=> $request->time_start,
        'time_finish'=> $request->time_finish,
        'cover_event'=> $photoName,
        'price_event' => $request->price_event,
        'description_event'=> $request->description_event,
        'status_event'=> $request->status_event,
        'is_place'=> $request->is_place,
        'isLink'=> $request->isLink,
        ]);

        // pembuatan sesi event
        foreach ($request->all() as $key => $value) {
            if (strpos($key, 'title_sesi') === 0 && $value !== null) {
                $sesiNumber = substr($key, 10); 
                $pembicaraId = "pembicara_id$sesiNumber";
                if ($request->has($pembicaraId) && !empty($request->$pembicaraId)) {
                    EventMaterialSession::create([
                        'title_sesi' => $value,
                        'event_id' => $event->id,
                        'pembicara_id' => $request->$pembicaraId,
                    ]);
                }
            }
        }
        
        return redirect()->route('admin.events.index');
    }
}

