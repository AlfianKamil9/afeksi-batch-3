<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\PembayaranLayanan;
use Illuminate\Http\Request;

class RekapTransaction extends Controller
{
    public function showRecapTransaction()
    {
        $dataProfesionalKonseling = PembayaranLayanan::with('detail_pembayarans', 'konselor.user', 'psikolog.user', 'paket_layanan_konseling.layanan_konseling', 'paket_layanan_mentoring.layanan_mentoring')
            ->where('user_id', auth()->user()->id)->where('status', '!=', 'UNPAID')->orderBy('id', 'DESC')
            ->get();

        //return response()->json($dataProfesionalKonseling);
        return view('pages.DashboardUser.rekap-transaksi', compact('dataProfesionalKonseling'));
    }

    public function cancelingOrder(Request $request)
    {
        $reference = $request->references;
        PembayaranLayanan::where('ref_transaction_layanan', $reference)->delete();

        return redirect()->back();
    }
}
