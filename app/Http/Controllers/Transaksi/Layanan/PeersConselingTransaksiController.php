<?php

namespace App\Http\Controllers\Transaksi\Layanan;

use App\Http\Controllers\Controller;
use App\Models\DetailPembayaran;
use App\Models\Konselor;
use App\Models\PembayaranLayanan;
use App\Models\User;
use App\Models\Voucher;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use RealRashid\SweetAlert\Facades\Alert;

class PeersConselingTransaksiController extends Controller
{
    // show form data diri professional konseling
    public function showFormDataDiri($ref_transaction_layanan)
    {
        $data = PembayaranLayanan::where('ref_transaction_layanan', $ref_transaction_layanan)->where('status', 'UNPAID')->firstOrFail();
        $slug = $ref_transaction_layanan;

        return view('pages.LayananKonseling.data-diri', compact('data', 'slug'));
    }

    // submit form data diri professional konseling
    public function submitDataDiri(Request $request, $ref_transaction_layanan)
    {
        $request->validate([
            'namaLengkap' => 'required',
            'jenisKelamin' => 'required',
            'email' => 'required',
            'no_whatsapp' => 'required',
            'umur' => 'required',
            'tgl_konsultasi' => 'required',
            'jam_konsultasi' => 'required',
            'detail_masalah' => 'required',
        ]);
        $id = PembayaranLayanan::where('ref_transaction_layanan', $ref_transaction_layanan)->first();
        date_default_timezone_set('Asia/Jakarta');
        $tglSekarang = date_create()->format('d');
        $blnSekarang = date_create()->format('m');
        $thnSekarang = date_create()->format('Y');
        $tglKonsultasi = date_create($request->tgl_konsultasi)->format('d');
        $blnKonsultasi = date_create($request->tgl_konsultasi)->format('m');
        $thnKonsultasi = date_create($request->tgl_konsultasi)->format('Y');
        if ($tglSekarang > $tglKonsultasi && $blnSekarang == $blnKonsultasi && ($thnSekarang == $thnKonsultasi || $thnSekarang > $thnKonsultasi)) {
            Alert::alert()->html('<h4 class="text-danger fw-bold">Error</h4>', '<p>Invalid data, Please Filled Correctly!</p>');

            return back();
        } elseif ($tglSekarang < $tglKonsultasi && $blnSekarang > $blnKonsultasi && ($thnSekarang == $thnKonsultasi || $thnSekarang > $thnKonsultasi)) {
            Alert::alert()->html('<h4 class="text-danger fw-bold">Error</h4>', '<p>Invalid data, Please Filled Correctly!</p>');

            return back();
        } elseif ($tglSekarang == $tglKonsultasi && $blnSekarang > $blnKonsultasi && ($thnSekarang == $thnKonsultasi || $thnSekarang > $thnKonsultasi)) {
            Alert::alert()->html('<h4 class="text-danger fw-bold">Error</h4>', '<p>Invalid data, Please Filled Correctly!</p>');

            return back();
        } elseif ($request->jenisKelamin == 0) {
            Alert::alert()->html('<h4 class="text-danger fw-bold">Error</h4>', '<p>Invalid data, Mohon isi Jenis Kelamin Anda!</p>');

            return back();
        }
        $randomKonselor = Konselor::inRandomOrder()->value('id');
        User::where('id', auth()->user()->id)->update([
            'umur' => $request->umur,
            'jenisKelamin' => $request->jenisKelamin,
            'no_whatsapp' => $request->no_whatsapp,

        ]);
        DetailPembayaran::create([
            'pembayaran_layanan_id' => $id->id,
            'tgl_konsultasi' => $request->tgl_konsultasi,
            'jam_konsultasi' => $request->jam_konsultasi,
            'detail_masalah' => $request->detail_masalah,
        ]);
        PembayaranLayanan::where('ref_transaction_layanan', $ref_transaction_layanan)->update([
            'status' => 'UNPAID(BUTUH BAYAR)',
            'konselor_id' => $randomKonselor,
        ]);

        return redirect()->route('peers.konseling.checkout', $ref_transaction_layanan);
    }

    // show halaman pembayaran professional konseling
    public function showPembayaran($ref_transaction_layanan, Request $request)
    {
        $now = Carbon::now();
        $data = PembayaranLayanan::with('voucher', 'konselor.user', 'detail_pembayarans', 'paket_layanan_konseling.layanan_konseling')
            ->where('ref_transaction_layanan', $ref_transaction_layanan)->firstOrFail();

        // VOUCHER APPLY
        if (isset($request->cancel)) {
            session()->forget('apply');

            return back();
        } elseif (isset($request->apply)) {
            if (isset($request->voucher)) {
                $now = Carbon::now();
                $kode = Voucher::where('kode', $request->voucher)->where('expired_date', '>=', $now)->where('stok_voucher', '>', 0)->first();
                if (! $kode) {
                    return back()->with('error', 'Kode Voucher tidak Valid ');
                }
                session()->put('apply', [
                    'kode' => $kode->kode,
                    'diskon' => $kode->jumlah_diskon,
                    'pesan' => 'Berhasil Menerapkan Voucher',
                ]);

                return back();
            }

            return back()->with('error', 'Code Voucher is Null');
        }

        return view('pages.LayananKonseling.pembayaran', compact('data'));
    }

    // checkout
    public function checkoutPeersKonseling(Request $request, $ref_transaction_layanan)
    {
        $ref = $ref_transaction_layanan;
        /**
         * JIKA ADA VOUCHER YANG DIAPPLY
         */
        if (isset($request->voucher)) {
            $request->validate([
                'voucher' => 'required',
                'total' => 'required',
            ]);

            // UPDATE STOK VOUCHER HABIS DIGUNAKAN
            $voucher = Voucher::where('kode', $request->voucher)->first();
            $voucher->stok_voucher = $voucher->stok_voucher - 1;
            $voucher->save();

            // UPDATE PEMBAYARAN
            $pembayaran = PembayaranLayanan::with('paket_layanan_konseling.layanan_konseling')->where('ref_transaction_layanan', $ref)->first();
            $pembayaran->voucher_id = $voucher->id;
            // $pembayaran->status = 'PENDING';
            $pembayaran->total_payment = $request->total;
            $pembayaran->save();

            $url = 'https://app.sandbox.midtrans.com/snap/v1/transactions';
            $serverkey = config('midtrans.midtrans.server_key');
            $serverBase64 = base64_encode($serverkey.':');
            $response = Http::withHeaders([
                'Accept' => 'application/json',
                'Authorization' => 'Basic '.$serverBase64,
                'Content-Type' => 'application/json',
            ])->post($url, [
                'transaction_details' => [
                    'order_id' => $ref,
                    'gross_amount' => $request->total,
                ],
                'credit_card' => [
                    'secure' => true,
                ],
                'customer_details' => [
                    'first_name' => auth()->user()->nama,
                    'email' => auth()->user()->email,
                    'phone' => auth()->user()->no_whatsapp,
                ],
            ]);

            if ($response->successful()) {
                return redirect()->to($response['redirect_url']);
            } else {
                return response()->json(['error' => 'Failed to create transaction'], 500);
            }
        }

        /**
         * JIKA TIDAK ADA VOUCHER YANG DIAPPLY
         */
        // UPDATE PEMBAYARAN
        $pembayaran = PembayaranLayanan::with('paket_layanan_konseling.layanan_konseling')->where('ref_transaction_layanan', $ref)->first();
        // $pembayaran->status = 'PENDING';
        $pembayaran->total_payment = $request->total;
        $pembayaran->save();

        $url = 'https://app.sandbox.midtrans.com/snap/v1/transactions';
        $serverkey = config('midtrans.midtrans.server_key');
        $serverBase64 = base64_encode($serverkey.':');
        $response = Http::withHeaders([
            'Accept' => 'application/json',
            'Authorization' => 'Basic '.$serverBase64,
            'Content-Type' => 'application/json',
        ])->post($url, [
            'transaction_details' => [
                'order_id' => $ref,
                'gross_amount' => $request->total,
            ],
            'credit_card' => [
                'secure' => true,
            ],
            'customer_details' => [
                'first_name' => auth()->user()->nama,
                'email' => auth()->user()->email,
                'phone' => auth()->user()->no_whatsapp,
            ],
        ]);

        if ($response->successful()) {
            return redirect()->to($response['redirect_url']);
        } else {
            return response()->json(['error' => 'Failed to create transaction'], 500);
        }
    }
}
