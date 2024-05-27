<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\PembayaranLayanan;

class IndexController extends Controller
{
    public function showDashboardIndex()
    {
        $dataProfesionalKonseling = PembayaranLayanan::with('detail_pembayarans', 'psikolog', 'paket_layanan_konseling', 'paket_layanan_mentoring')
            ->where('user_id', auth()->user()->id)
            ->where('status', 'PAID')
            ->get();

        //return response()->json($dataProfesionalKonseling);
        return view('pages.dashboard', compact('dataProfesionalKonseling'));
    }
}
