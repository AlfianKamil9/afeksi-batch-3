<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Voucher;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class KlaimCode extends Controller
{
    public function claim(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'kode' => 'required',
        ]);

        if ($validator->fails()) {
            return response([
                'message' => $validator->messages(),
            ], 404);
        }

        $now = Carbon::now();
        $kode = Voucher::where('kode', $request->kode)->where('expired_date', '>=', $now)->first();
        if (! $kode) {
            return response([
                'message' => 'Code is Invalid',
            ], 404);
        }

        return response([
            'kode' => $kode->kode,
            'diskon' => $kode->jumlah_diskon,
            'pesan' => 'Berhasil Menerapkan Voucher',
        ], 200);

    }
}
