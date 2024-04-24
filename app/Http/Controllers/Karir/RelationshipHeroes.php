<?php

namespace App\Http\Controllers\Karir;

use App\Models\User;
use App\Models\Volunteer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;

class RelationshipHeroes extends Controller
{
    public function index() {
        return view('pages.Karir.detail-pendaftaran-relationship-heroes');
    }
}
