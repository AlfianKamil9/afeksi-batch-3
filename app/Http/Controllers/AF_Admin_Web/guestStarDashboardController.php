<?php

namespace App\Http\Controllers\AF_Admin_Web;

use App\Http\Controllers\Controller;

class guestStarDashboardController extends Controller
{
    public function index()
    {
        return view('A_Page_Admin.GuestStar.admin-gueststar');
    }

    // public function show()
    // {
    //     return view('A_Page_Admin.GuestStar.admin-add-guestar');
    // }

    public function create()
    {
        return view('A_Page_Admin.GuestStar.admin-add-guestar');
    }

    public function edit()
    {
        return view('A_Page_Admin.GuestStar.admin-edit-guestar');
    }
}
