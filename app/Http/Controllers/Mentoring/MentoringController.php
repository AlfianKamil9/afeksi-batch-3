<?php

namespace App\Http\Controllers\Mentoring;

use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\PembayaranLayanan;
use App\Http\Controllers\Controller;
use App\Models\LayananMentoring;
use App\Models\PaketLayananMentoring;

class MentoringController extends Controller
{
    public function showPreMarriage() {
        $slug = LayananMentoring::where('id', 2)->pluck('slug')->first();
        return view('pages.LayananMentoring.pre-marriage', compact('slug'));
    }

    public function showRelationship() {
        $slug = LayananMentoring::where('id', 3)->pluck('slug')->first();
        return view('pages.LayananMentoring.relationship-konseling', compact('slug'));
    }

     public function showParenting() {
        $slug = LayananMentoring::where('id', 1)->pluck('slug')->first();
        return view('pages.LayananMentoring.parenting-mentoring', compact('slug'));
    }

     public function showPaketMentoring($slug_item_mentoring) {
        $mentoring = LayananMentoring::where('slug', $slug_item_mentoring)->firstOrFail();
        $data = PaketLayananMentoring::where('layanan_mentoring_id', $mentoring->id)->get();
        $layanan = $mentoring->nama_layanan;
       return view('pages.LayananMentoring.paket-mentoring', compact('data', 'layanan'));
    }

    public function savePaketYangDipilih (Request $request) {
        $ref = 'DEV-'.strtoupper(Str::random(5)).Carbon::now()->format('dmYHis');
        PembayaranLayanan::create([
            'user_id' => auth()->user()->id, 
            'ref_transaction_layanan' => $ref, 
            'status' => 'UNPAID',
            'paket_layanan_mentoring_id' => $request->id_paket
        ]);
        
        return redirect('/mentoring/'.$ref.'/data-diri');
    }
}
