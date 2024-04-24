<?php

namespace App\Http\Controllers\Karir;

use App\Models\User;
use App\Models\Konselor;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class RelationshipKonselor extends Controller
{
    public function index()
    {
        return view('pages.Karir.detail-pendaftaran-relationship');
    }

}