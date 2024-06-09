<?php

namespace App\Http\Controllers\AF_Admin_Web;

use App\Models\Artikel;
use App\Http\Controllers\Controller;

class articleDashboardController extends Controller
{
    public function index()
    {
        $artikels = Artikel::all();
        return view('A_Page_Admin.Article.admin-article', compact('artikels'));
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
