<?php

namespace App\Http\Controllers\AF_Admin_Web;

use App\Http\Controllers\Controller;
use App\Models\PembayaranLayanan;
use Illuminate\Http\Request;

class transactionDashboardController extends Controller
{
    
    public function index() {
        $order = PembayaranLayanan::with('paket_layanan_mentoring', 'paket_layanan_konseling', 'detail_pembayarans')->get();
        //return response()->json($order);
        return view('A_Page_Admin.Transactions.admin-orders', compact('order'));
    }

    public function showDetail($ref_transaction_layanan) {
        $order = PembayaranLayanan::with('user', 'paket_layanan_mentoring', 'paket_layanan_konseling', 'detail_pembayarans')->where('ref_transaction_layanan', $ref_transaction_layanan)->first();
        //return response()->json($order);
        return view('A_Page_Admin.Transactions.admin-order-detail', compact('order'));
    }

    public function showEdit() {

    }

    public function delete($ref_transaction_layanan) {
        $order = PembayaranLayanan::where('ref_transaction_layanan', $ref_transaction_layanan)->first();
        $order->delete();
        return redirect()->route('admin.transactions.index');
    }
}
