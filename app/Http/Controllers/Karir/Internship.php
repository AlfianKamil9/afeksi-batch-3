<?php

namespace App\Http\Controllers\Karir;

use App\Models\internshipPosition;
use App\Http\Controllers\Controller;


class Internship extends Controller
{
    public function show($slug) {
        $data = internshipPosition::where('slug' , $slug)->firstOrFail();
        return view('pages.Karir.internship-detail', compact('data'));
    }
}
