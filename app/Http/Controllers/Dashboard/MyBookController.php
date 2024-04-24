<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MyBookController extends Controller
{
    public function showMyBook() {
        return view('pages.e-book');
    }
}
