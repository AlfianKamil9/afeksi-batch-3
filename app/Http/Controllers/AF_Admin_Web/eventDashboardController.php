<?php

namespace App\Http\Controllers\AF_Admin_Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class eventDashboardController extends Controller
{
    public function index() {
        return view('A_Page_Admin.admin-event');
    }
}
