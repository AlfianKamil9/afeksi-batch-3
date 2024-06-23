<?php

namespace App\Http\Controllers\Mentoring;

use App\Http\Controllers\Controller;
use App\Models\LayananMentoring;
use App\Models\PaketLayananMentoring;
use App\Models\PembayaranLayanan;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class MentoringController extends Controller
{
    public function showPreMarriage()
    {
        $slug = LayananMentoring::where('id', 2)->pluck('slug')->first();

        return view('pages.LayananMentoring.pre-marriage', compact('slug'));
    }

    public function showRelationship()
    {
        $slug = LayananMentoring::where('id', 3)->pluck('slug')->first();

        return view('pages.LayananMentoring.relationship-konseling', compact('slug'));
    }

    public function showParenting()
    {
        $slug = LayananMentoring::where('id', 1)->pluck('slug')->first();

        return view('pages.LayananMentoring.parenting-mentoring', compact('slug'));
    }
}
