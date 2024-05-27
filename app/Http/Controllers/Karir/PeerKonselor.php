<?php

namespace App\Http\Controllers\Karir;

use App\Http\Controllers\Controller;

class PeerKonselor extends Controller
{
    public function index()
    {
        return view('pages.Karir.detail-pendaftaran-peer');
    }
}
