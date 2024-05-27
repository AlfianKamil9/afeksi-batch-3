<?php

namespace App\Http\Controllers\Karir;

use App\Http\Controllers\Controller;
use App\Models\internshipPosition;

class Internship extends Controller
{
    public function show($slug)
    {
        $data = internshipPosition::where('slug', $slug)->firstOrFail();

        return view('pages.Karir.internship-detail', compact('data'));
    }
}
