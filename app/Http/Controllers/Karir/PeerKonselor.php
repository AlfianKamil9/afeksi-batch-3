<?php

namespace App\Http\Controllers\Karir;

use App\Models\User;
use App\Models\Konselor;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;

class PeerKonselor extends Controller
{
    public function index()
    {
        return view('pages.Karir.detail-pendaftaran-peer');
    }

}
