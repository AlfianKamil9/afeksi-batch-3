<?php

namespace App\Http\Controllers\Karir;

use App\Http\Controllers\Controller;

class RelationshipKonselor extends Controller
{
    public function index()
    {
        return view('pages.Karir.detail-pendaftaran-relationship');
    }
}
