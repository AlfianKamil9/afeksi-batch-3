<?php

namespace App\Http\Controllers\AF_Admin_Web;

use App\Http\Controllers\Controller;

class guestStarDashboardController extends Controller
{
    public function index()
    {
        return view('A_Page_Admin.GuestStar.admin-gueststar');
    }
}
