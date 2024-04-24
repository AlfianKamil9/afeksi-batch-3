<?php

namespace App\Http\Controllers;

use App\Models\Konselor;
use Illuminate\Http\Request;
use App\Models\PsikologMentoring;

class berandaController extends Controller
{
    public function showBeranda() {
        $data = PsikologMentoring::all();
        $konselor = Konselor::with('topic')->get();
        $sa = $data->concat($konselor)->toArray();
        shuffle($sa);
        //return response()->json($sa);
        return view('pages.landing-page-new', ['sa' => $sa]);
    }
}
