<?php

namespace App\Http\Controllers\Karir;

use App\Models\testimonial_internship;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Volunteer extends Controller
{
    public function index()
    {
        $testimonialInternship = testimonial_internship::all()->toArray();
        return view('pages.Karir.volunteer', ['testimonials' => $testimonialInternship]);
    }
}
