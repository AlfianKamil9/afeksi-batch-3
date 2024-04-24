<?php

namespace App\Http\Controllers\Konseling;

use Carbon\Carbon;
use App\Models\Konselor;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\PembayaranLayanan;
use App\Http\Controllers\Controller;
use App\Models\PaketProfesionalConseling;

class PeersConselingController extends Controller
{
    public function processFirstPeers(Request $request) {
        $ref = 'PEERS-'.strtoupper(Str::random(5)).Carbon::now()->format('dmYHis');
        PembayaranLayanan::create([
            'ref_transaction_layanan' => $ref,
            'status' => 'UNPAID',
            'user_id' => auth()->user()->id,
            'conseling_id' => $request->value_id
        ]);
        return redirect()->route('peers.konseling.pilihan.paket', $ref);
    }

    public function showKonselorPeers(Request $request, $ref_transaction_layanan) {
        $t = PembayaranLayanan::with('konseling')->where('ref_transaction_layanan', $ref_transaction_layanan)->firstOrFail();
        $t = $t->konseling->namaPengalaman;
        $slug = $ref_transaction_layanan;
        $kueri = Konselor::with('topic', 'konseling')->whereHas('konseling', function($query) use ($t) {
            $query->where('namaPengalaman', $t);
        })->orderBy('id', 'desc');
        
        // Filter using input type text
        if ($request->has('input_search')) {
            $kueri->where('nama', 'like', '%' . $request->input('input_search') . '%');
        }

        // Filter by date using dropdown
        $dateFilter = $request->input('sort_date');
        if ($dateFilter === 'latest') {
            $kueri->orderBy('id', 'desc');
        } elseif ($dateFilter === 'oldest') {
            $kueri->orderBy('id', 'asc');
        }

        $data = $kueri->get();
         // filter by category_event_id using checkbox
        if ($request->has('topic')) {
                $kategori = $request->input('topic');
                $data = Konselor::whereHas('topic', function ($query) use ($kategori) {
                            $query->where('jenis_topic', 'like', "%$kategori%");
                        })
                        ->whereHas('konseling', function($query) use ($t) {
                            $query->where('namaPengalaman', $t);
                        })
                        ->get();
        }

        //return response()->json($data);
        return view('pages.LayananKonseling.konselor', compact('data', 'slug'));
    }

    public function processPilihKonselor(Request $request, $ref_transaction_layanan) {
        PembayaranLayanan::where('ref_transaction_layanan' , $ref_transaction_layanan)->update([
            'konselor_id' => $request->value_id
        ]);
        return redirect()->route('peers.konseling.pilihan.paket', $ref_transaction_layanan);
    }

    public function showPaketKonseling($ref_transaction_layanan) {
        // $id = PembayaranLayanan::where('ref_transaction_layanan', $ref_transaction_layanan)->pluck('conseling_id')->first();
        $data = PaketProfesionalConseling::with('professional_conseling')->where('professional_conseling_id', 3)->get();
        $slug = $ref_transaction_layanan;
        //return response()->json($data);
        return view('pages.LayananKonseling.paket-peers-konseling', compact('data', 'slug'));
    }

    public function processPaketKonseling(Request $request, $ref_transaction_layanan) {
        //dd($request->id_paket);
        PembayaranLayanan::where('ref_transaction_layanan' , $ref_transaction_layanan)->update([
            'paket_professional_conseling_id' => $request->id_paket
        ]);
        return redirect()->route('peers.konseling.show.form', $ref_transaction_layanan);
    }
}
