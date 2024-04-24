<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\PembayaranLayanan;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function showDashboardIndex () {
        $dataProfesionalKonseling = PembayaranLayanan::with('detail_pembayarans', 'psikolog', 'paket_profesional_conselings', 'paket_non_professionals' )
        ->where('user_id', auth()->user()->id)
        ->where('status', 'PAID')
        ->get();
        //return response()->json($dataProfesionalKonseling);
        return view('pages.dashboard', compact('dataProfesionalKonseling'));
    }
}
