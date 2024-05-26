<?php

namespace App\Http\Controllers\Transaksi\Layanan;

use Carbon\Carbon;
use App\Models\bank;
use App\Models\User;
use App\Models\Voucher;
use App\Models\Konselor;
use Illuminate\Http\Request;
use App\Models\DetailPembayaran;
use App\Models\PembayaranLayanan;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Validator;
use App\Services\Midtrans\PembayaranEvent\CstoreService;
use App\Services\Midtrans\PembayaranEvent\EwalletService;
use App\Services\Midtrans\PembayaranEvent\TransferBankService;

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
            'detail_masalah' => 'required'
        ]);
        $id = PembayaranLayanan::where("ref_transaction_layanan", $ref_transaction_layanan)->first();
        date_default_timezone_set('Asia/Jakarta');
        $tglSekarang = date_create()->format("d");
        $blnSekarang = date_create()->format("m");
        $thnSekarang = date_create()->format("Y");
        $tglKonsultasi = date_create($request->tgl_konsultasi)->format("d");
        $blnKonsultasi = date_create($request->tgl_konsultasi)->format("m");
        $thnKonsultasi = date_create($request->tgl_konsultasi)->format("Y");
        if ($tglSekarang > $tglKonsultasi && $blnSekarang == $blnKonsultasi && ($thnSekarang == $thnKonsultasi || $thnSekarang > $thnKonsultasi)) {
            Alert::alert()->html('<h4 class="text-danger fw-bold">Error</h4>', '<p>Invalid data, Please Filled Correctly!</p>');
            return back();
        } elseif ($tglSekarang < $tglKonsultasi && $blnSekarang > $blnKonsultasi && ($thnSekarang == $thnKonsultasi || $thnSekarang > $thnKonsultasi)) {
            Alert::alert()->html('<h4 class="text-danger fw-bold">Error</h4>', '<p>Invalid data, Please Filled Correctly!</p>');
            return back();
        } elseif ($tglSekarang == $tglKonsultasi && $blnSekarang > $blnKonsultasi && ($thnSekarang == $thnKonsultasi || $thnSekarang > $thnKonsultasi)) {
            Alert::alert()->html('<h4 class="text-danger fw-bold">Error</h4>', '<p>Invalid data, Please Filled Correctly!</p>');
            return back();
        } elseif($request->jenisKelamin == 0){
            Alert::alert()->html('<h4 class="text-danger fw-bold">Error</h4>', '<p>Invalid data, Mohon isi Jenis Kelamin Anda!</p>');
            return back();
        }
        $randomKonselor = Konselor::inRandomOrder()->value('id');
        User::where('id', auth()->user()->id)->update([
            'umur' => $request->umur,
            'jenisKelamin' => $request->jenisKelamin,
            'no_whatsapp' => $request->no_whatsapp

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
        } else if (isset($request->apply)) {
            if (isset($request->voucher)) {
                $now = Carbon::now();
                $kode = Voucher::where('kode', $request->voucher)->where('expired_date', '>=', $now)->where('stok_voucher', '>', 0)->first();
                if (!$kode) {
                    return back()->with('error', 'Kode Voucher tidak Valid ');
                }
                session()->put('apply', [
                    'kode' => $kode->kode,
                    'diskon' => $kode->jumlah_diskon,
                    'pesan' => "Berhasil Menerapkan Voucher",
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
        // cek ada voucher atau tidak
        if(isset($request->voucher)) {
            //dd($request->all());
            $request->validate([
                'voucher' => 'required',
                'total' => 'required'
            ]);

            \Midtrans\Config::$serverKey = config('midtrans.midtrans.server_key');
            // Set to Development/Sandbox Environment (default). Set to true for Production Environment (accept real transaction).
            \Midtrans\Config::$isProduction = false;
            // Set sanitization on (default)
            \Midtrans\Config::$isSanitized = true;
            // Set 3DS transaction for credit card to true
            \Midtrans\Config::$is3ds = true;

            $params = array(
                'transaction_details' => array(
                    'order_id' => $ref,
                    'gross_amount' => $request->total,
                ),
                'customer_details' => array(
                    'first_name' => auth()->user()->nama,
                    'email' =>  auth()->user()->email,
                    'phone' =>  auth()->user()->no_whatsapp,
                ),
            );

            $snapToken = \Midtrans\Snap::getSnapToken($params);
            // return view('pages.checkout', compact('snapToken'));
            dd('testing');
        }
        
        // tidak pakai voucher
        // 
    }


    // klasifikasi payment method
    public function klasifikasiPaymentMethod($bank, $ref, $voucher_id)
    {
        $tabelPembayaran = PembayaranLayanan::where('ref_transaction_layanan', $ref)->pluck('id')->first();
        $diskon = Voucher::where('id', $voucher_id)->first();
        $voucher_id == null ? $potongan = 0 : $potongan = $diskon->jumlah_diskon;
        $data = PembayaranLayanan::with('user', 'paket_layanan_konseling', 'psikolog', 'detail_pembayarans', 'voucher')->where('ref_transaction_layanan', $ref)->first();
        // -----------------BNI, BRI, BCA, CIMB----------------------- //
        if ($bank == 'bni' || $bank == 'bri' || $bank == 'bca' || $bank == 'cimb') {
            $data = [
                "reference" => $ref,
                "harga_event" => $data->paket_layanan_konseling->harga - $potongan,
                "nama"  => $data->user->nama,
                "email"  => $data->user->email,
                "no_tlpn" => $data->user->no_whatsapp
            ];
            $result = new TransferBankService();
            $res = $result->bank($bank, $data);
            //CEK KODE RESPON
            if ($res["status_code"] != 201) {
                $responseError = [
                    'status_code' => $res["status_code"],
                    'message' => $res['status_message']
                ];
                return $responseError;
            }
            // SET UPDATE TABLE TRANSAKSI EVENT
            PembayaranLayanan::where('ref_transaction_layanan', $res["order_id"])->update([
                "payment_method" => $bank,
                "total_payment" => $res["gross_amount"],
                "fee_transaksi" => 4000,
                "status" => "PENDING",
                "updated_at" => $res["transaction_time"]
            ]);
            DetailPembayaran::where('pembayaran_layanan_id', $tabelPembayaran)->update([
                "kode_bayar_1" => $res["va_numbers"][0]["va_number"]
            ]);

            $responData = [
                "status_code" => $res["status_code"],
                "message" =>  $res["status_message"],
            ];
            return $responData;
        }
        // -----------------MANDIRI----------------------- //
        else if ($bank == "mandiri") {
            $data = [
                "reference" => $ref,
                "harga_event" => $data->paket_layanan_konseling->harga - $potongan,
                "nama"  => $data->user->nama,
                "email"  => $data->user->email,
                "no_tlpn" => $data->user->no_whatsapp
            ];
            $result = new TransferBankService();
            $res = $result->mandiri($bank, $data);
            //CEK KODE RESPON
            if ($res["status_code"] != 201) {
                $responseError = [
                    'status_code' => $res["status_code"],
                    'message' => $res['status_message']
                ];
                return $responseError;
            }
            // SET UPDATE TABLE TRANSAKSI EVENT
            PembayaranLayanan::where('ref_transaction_layanan', $res["order_id"])->update([
                "payment_method" => $bank,
                "total_payment" => $res["gross_amount"],
                "fee_transaksi" => 4000,
                "status" => "PENDING",
                "updated_at" => $res["transaction_time"]
            ]);
            DetailPembayaran::where('pembayaran_layanan_id', $tabelPembayaran)->update([
                "kode_bayar_1" => $res["bill_key"],
                "kode_bayar_2" => $res["biller_code"]
            ]);
            $responData = [
                "status_code" => $res["status_code"],
                "message" =>  $res["status_message"],
            ];
            return $responData;
        }
        // -----------------PERMATA----------------------- //
        else if ($bank == "permata") {
            $data = [
                "reference" => $ref,
                "harga_event" => $data->paket_layanan_konseling->harga - $potongan,
                "nama"  => $data->user->nama,
                "email"  => $data->user->email,
                "no_tlpn" => $data->user->no_whatsapp
            ];
            $result = new TransferBankService();
            $res = $result->permata($bank, $data);
            //CEK KODE RESPON
            if ($res["status_code"] != 201) {
                $responseError = [
                    'status_code' => $res["status_code"],
                    'message' => $res['status_message']
                ];
                return $responseError;
            }
            // SET UPDATE TABLE TRANSAKSI EVENT
            PembayaranLayanan::where('ref_transaction_layanan', $res["order_id"])->update([
                "payment_method" => $bank,
                "total_payment" => $res["gross_amount"],
                "fee_transaksi" => 4000,
                "status" => "PENDING",
                "updated_at" => $res["transaction_time"]
            ]);
            DetailPembayaran::where('pembayaran_layanan_id', $tabelPembayaran)->update([
                "kode_bayar_1" => $res["permata_va_number"],
            ]);
            $responData = [
                "status_code" => $res["status_code"],
                "message" =>  $res["status_message"],
            ];
            return $responData;
        }
        // -----------------INDOMARET----------------------- //
        else if ($bank == "indomaret") {
            $data = [
                "reference" => $ref,
                "harga_event" => $data->paket_layanan_konseling->harga - $potongan,
                "nama"  => $data->user->nama,
                "email"  => $data->user->email,
                "no_tlpn" => $data->user->no_whatsapp
            ];
            $result = new CstoreService();
            $res = $result->indomaret($bank, $data);
            //CEK KODE RESPON
            if ($res["status_code"] != 201) {
                $responseError = [
                    'status_code' => $res["status_code"],
                    'message' => $res['status_message']
                ];
                return $responseError;
            }
            // insert db
            PembayaranLayanan::where('ref_transaction_layanan', $res["order_id"])->update([
                "payment_method" => $bank,
                "total_payment" => $res["gross_amount"],
                "fee_transaksi" => 4000,
                "status" => "PENDING",
                "updated_at" => $res["transaction_time"]
            ]);
            DetailPembayaran::where('pembayaran_layanan_id', $tabelPembayaran)->update([
                "kode_bayar_1" => $res["payment_code"],
                "kode_bayar_2" => $res["merchant_id"],
            ]);
            $responData = [
                "status_code" => $res["status_code"],
                "message" =>  $res["status_message"],
            ];
            return $responData;
        }
        // -----------------ALFAMART----------------------- //
        else if ($bank == "alfamart") {
            $data = [
                "reference" => $ref,
                "harga_event" => $data->paket_layanan_konseling->harga,
                "nama"  => $data->user->nama,
                "email"  => $data->user->email,
                "no_tlpn" => $data->user->no_whatsapp,
                "pesan" => "Pembayaran Layanan Professional Konseling AFEKSI"
            ];
            $result = new CstoreService();
            $res = $result->alfamart($bank, $data);
            //CEK KODE RESPON
            if ($res["status_code"] != 201) {
                $responseError = [
                    'status_code' => $res["status_code"],
                    'message' => $res['status_message']
                ];
                return $responseError;
            }
            // insert db
            PembayaranLayanan::where('ref_transaction_layanan', $res["order_id"])->update([
                "payment_method" => $bank,
                "total_payment" => $res["gross_amount"],
                "fee_transaksi" => 4000,
                "status" => "PENDING",
                "updated_at" => $res["transaction_time"]
            ]);
            DetailPembayaran::where('pembayaran_layanan_id', $tabelPembayaran)->update([
                "kode_bayar_1" => $res["payment_code"],
            ]);
            $responData = [
                "status_code" => $res["status_code"],
                "message" =>  $res["status_message"],
            ];
            return $responData;
        }
        // --------------GOPAY------------------------------
        else if ($bank == "gopay") {
            $data = [
                "reference" => $ref,
                "harga_event" => $data->paket_layanan_konseling->harga,
                "nama"  => $data->user->nama,
                "email"  => $data->user->email,
                "no_tlpn" => $data->user->no_whatsapp
            ];
            $result = new EwalletService();
            $res = $result->gopay($bank, $data);
            //CEK KODE RESPON
            if ($res["status_code"] != 201) {
                $responseError = [
                    'status_code' => $res["status_code"],
                    'message' => $res['status_message']
                ];
                return $responseError;
            }
            // insert
            PembayaranLayanan::where('ref_transaction_layanan', $res["order_id"])->update([
                "payment_method" => $bank,
                "total_payment" => $res["gross_amount"],
                "fee_transaksi" => 4000,
                "status" => "PENDING",
                "updated_at" => $res["transaction_time"]
            ]);
            DetailPembayaran::where('pembayaran_layanan_id', $tabelPembayaran)->update([
                "kode_bayar_1" => $res["actions"][1]['url'],
                "kode_bayar_2" => $res["actions"][0]['url'],
            ]);
            $responData = [
                "status_code" => $res["status_code"],
                "message" =>  $res["status_message"],
            ];
            return $responData;
        }
        // ----------------------------SHOPPE-PAY---------------------
        else if ($bank == "shopeepay") {
            $data = [
                "reference" => $ref,
                "harga_event" => $data->paket_layanan_konseling->harga,
                "nama"  => $data->user->nama,
                "email"  => $data->user->email,
                "no_tlpn" => $data->user->no_whatsapp
            ];
            $result = new EwalletService();
            $res = $result->shopeePay($bank, $data);
            //CEK KODE RESPON
            if ($res["status_code"] != 201) {
                $responseError = [
                    'status_code' => $res["status_code"],
                    'message' => $res['status_message']
                ];
                return $responseError;
            }
            // insert db
            PembayaranLayanan::where('ref_transaction_layanan', $res["order_id"])->update([
                "payment_method" => $bank,
                "total_payment" => $res["gross_amount"],
                "fee_transaksi" => 4000,
                "status" => "PENDING",
                "updated_at" => $res["transaction_time"]
            ]);
            DetailPembayaran::where('pembayaran_layanan_id', $tabelPembayaran)->update([
                "kode_bayar_1" => $res["actions"][0]['url'],
            ]);
            $responData = [
                "status_code" => $res["status_code"],
                "message" =>  $res["status_message"],
            ];
            return $responData;
        }
    }
}
