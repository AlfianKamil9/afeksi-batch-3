<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;

class MyBookController extends Controller
{
    public function showMyBook()
    {
        return view('pages.E-books.e-book');
    }
}
