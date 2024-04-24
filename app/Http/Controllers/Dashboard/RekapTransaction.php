<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Models\PembayaranLayanan;
use App\Http\Controllers\Controller;

class RekapTransaction extends Controller
{
    public function showRecapTransaction () {
        $dataProfesionalKonseling = PembayaranLayanan::with('detail_pembayarans','konselor','psikolog', 'paket_profesional_conselings.professional_conseling', 'paket_non_professionals.layanan_non_professionals' )
        ->where('user_id', auth()->user()->id)->where('status', '!=', 'UNPAID')->orderBy('id', 'DESC')
        ->get();
        //return response()->json($dataProfesionalKonseling);
        return view('pages.rekap-transaksi', compact('dataProfesionalKonseling'));
    }
}
