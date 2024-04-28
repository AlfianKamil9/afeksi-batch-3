<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Konselor;
use Illuminate\Http\Request;
use App\Models\PsikologMentoring;

class berandaController extends Controller
{
    public function showBeranda() {
        $psikolog = PsikologMentoring::with('user.roles', 'mentoring')->get();
        $konselor = Konselor::with('user.roles')->get();
        $sa = $psikolog->concat($konselor)->toArray();
        shuffle($sa);
        //return response()->json($sa);
        return view('pages.landing-page-new', ['sa' => $sa]);
    }
}
