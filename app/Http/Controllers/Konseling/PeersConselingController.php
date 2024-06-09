<?php

namespace App\Http\Controllers\Konseling;

use App\Http\Controllers\Controller;
use App\Models\DetailPembayaran;
use App\Models\Konselor;
use App\Models\PaketLayananKonseling;
use App\Models\PembayaranLayanan;
use App\Models\Voucher;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Str;
use RealRashid\SweetAlert\Facades\Alert;

class PeersConselingController extends Controller
{
    /**
     * MEMPROSES PILIHAN PAKET PEERS KONSELING
     */
    public function processFirstPeers(Request $request)
    {
        $ref = 'PEERS-' . strtoupper(Str::random(5)) . Carbon::now()->format('dmYHis');
        PembayaranLayanan::create([
            'ref_transaction_layanan' => $ref,
            'status' => 'UNPAID',
            'user_id' => auth()->user()->id,
        ]);

        return redirect()->route('peers.konseling.pilihan.paket', $ref);
    }

    /**
     *  SHOW PAKET PEERS KONSELING
     */
    public function showPaketKonseling($ref_transaction_layanan)
    {
        $data = PaketLayananKonseling::with('layanan_konseling')->where('layanan_konseling_id', 3)->get();
        $slug = $ref_transaction_layanan;

        return view('pages.PeersKonseling.paket-peers-konseling', compact('data', 'slug'));
    }

    /**
     * MEMPROSES PILIHAN PAKET KONSELING
     */
    public function processPaketKonseling(Request $request, $ref_transaction_layanan)
    {
        //dd($request->id_paket);
        PembayaranLayanan::where('ref_transaction_layanan', $ref_transaction_layanan)->update([
            'paket_layanan_konseling_id' => $request->id_paket,
        ]);

        return redirect()->route('peers.konseling.show.form', $ref_transaction_layanan);
    }

    /**
     * SHOW FORM DATA DIRI DAN FORMULIR PEERS KONSELING
     */
    public function showFormDataDiri($ref_transaction_layanan)
    {
        $data = PembayaranLayanan::where('ref_transaction_layanan', $ref_transaction_layanan)->where('status', 'UNPAID')->firstOrFail();
        $slug = $ref_transaction_layanan;

        return view('pages.PeersKonseling.data-diri', compact('data', 'slug'));
    }

    /**
     * MEMPROSES FORM DATA DIRI DAN FORMULIR PEERS KONSELING
     */
    public function submitDataDiri(Request $request, $ref_transaction_layanan)
    {
        $request->validate([
            'tgl_konsultasi' => 'required',
            'jam_konsultasi' => 'required',
            'detail_masalah' => 'required',
        ]);
        $pembayaran = PembayaranLayanan::where('ref_transaction_layanan', $ref_transaction_layanan)->first();
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
        }
        $randomKonselor = Konselor::inRandomOrder()->value('id');
        DetailPembayaran::create([
            'pembayaran_layanan_id' => $pembayaran->id,
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

    /**
     *  SHOW HALAMAN PEMBAYARAN
     */
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
                if (!$kode) {
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

        return view('pages.PeersKonseling.pembayaran', compact('data'));
    }

    /**
     *  MEMPROSES PEMBAYARAN
     */


    public function processCheckout(Request $request, $ref_transaction_layanan)
    {

        $ref = $ref_transaction_layanan;
        // JIKA ADA VOUCHER YANG DIAPPLY // 
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
            $pembayaran->total_payment = $request->total - $voucher->jumlah_diskon;
            $pembayaran->save();

            return redirect()->route('peers.konseling.show.confirmation', $ref);
        }

        /**
         * JIKA TIDAK ADA VOUCHER YANG DIAPPLY
         */
        // UPDATE PEMBAYARAN
        $pembayaran = PembayaranLayanan::with('paket_layanan_konseling.layanan_konseling')->where('ref_transaction_layanan', $ref)->first();
        // $pembayaran->status = 'PENDING';
        $pembayaran->total_payment = $request->total;
        $pembayaran->save();

        return redirect()->route('peers.konseling.show.confirmation', $ref);
    }

    // SHOW CHECKOUT

    public function showCheckout($ref_transaction_layanan)
    {

        $pembayaran = PembayaranLayanan::with('paket_layanan_konseling.layanan_konseling')->where('ref_transaction_layanan', $ref_transaction_layanan)->first();

        // Set your Merchant Server Key
        \Midtrans\Config::$serverKey = config('midtrans.midtrans.server_key');
        // Set to Development/Sandbox Environment (default). Set to true for Production Environment (accept real transaction).
        \Midtrans\Config::$isProduction = false;
        // Set sanitization on (default)
        \Midtrans\Config::$isSanitized = true;
        // Set 3DS transaction for credit card to true
        \Midtrans\Config::$is3ds = true;

        $params = array(
            'transaction_details' => array(
                'order_id' => $pembayaran->ref_transaction_layanan,
                'gross_amount' => $pembayaran->total_payment,
            ),
            'item_details' => [
                [
                    'id' => 1,
                    'price' => $pembayaran->total_payment,
                    'quantity' => 1,
                    'name' => $pembayaran->paket_layanan_konseling->layanan_konseling->nama_layanan,
                ],
            ],
            'customer_details' => array(
                'first_name' => auth()->user()->nama,
                'email' => auth()->user()->email,
                'phone' => auth()->user()->no_whatsapp,
            ),
        );

        $snapToken = \Midtrans\Snap::getSnapToken($params);

        return view('pages.PeersKonseling.checkout-peers', compact('snapToken', 'pembayaran'));
    }
}
