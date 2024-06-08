<?php

namespace App\Http\Controllers\AF_Admin_Web;

use App\Http\Controllers\Controller;

class articleDashboardController extends Controller
{
    public function index()
    {
        return view('A_Page_Admin.Article.admin-article');
    }

    public function show()
    {
        return view('A_Page_Admin.Article.detail-data-artikel');
    }

    public function create()
    {
        return view('A_Page_Admin.Article.tambah-data-artikel');
    }

    public function edit()
    {
        return view('A_Page_Admin.Article.edit-data-artikel');
    }
}
