<?php

namespace App\Http\Controllers\Konseling;

use Carbon\Carbon;
use App\Models\Konselor;
use App\Models\Psikolog;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\konselorTopic;
use App\Models\PembayaranLayanan;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\PaketProfesionalConseling;
use App\Models\profresional_conseling;

class ProfessionalController extends Controller
{
  
    public function createProfessional (Request $request) {
        if($request->value_id == 1) {
            $t = 'REL';
        } else {
            $t = 'EQU';
        }
        $ref = 'PROF-'.$t.'-'.strtoupper(Str::random(5)).Carbon::now()->format('dmYHis');
        PembayaranLayanan::create([
            'ref_transaction_layanan' => $ref,
            'status' => 'UNPAID',
            'user_id' => auth()->user()->id,
            'conseling_id' => $request->value_id
        ]);
        return redirect()->route('professional.konseling.konselor', $ref);
    }

    public function showAllKonselor(Request $request, $ref_transaction_layanan) {
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
        return view('pages.ProfessionalKonseling.konselor', compact('data', 'slug'));
    }

    public function processPilihKonselor(Request $request, $ref_transaction_layanan) {
        PembayaranLayanan::where('ref_transaction_layanan' , $ref_transaction_layanan)->update([
            'konselor_id' => $request->value_id
        ]);
        return redirect()->route('professional.konseling.pilihan.paket', $ref_transaction_layanan);
    }

    public function showPaketKonseling($ref_transaction_layanan) {
        $profKonseling = PembayaranLayanan::where('ref_transaction_layanan', $ref_transaction_layanan)->firstOrFail();
        $data = PaketProfesionalConseling::with('professional_conseling')->where('professional_conseling_id', $profKonseling->conseling_id)->get();
        $layanan = profresional_conseling::where('id', $profKonseling->conseling_id)->pluck('namaPengalaman')->first();
        $slug = $ref_transaction_layanan;
        //return response()->json($data);
        return view('pages.ProfessionalKonseling.paket-professional-konseling', compact('data', 'slug', 'layanan'));
    }

    public function processPaketKonseling(Request $request, $ref_transaction_layanan) {
        //dd($request->id_paket);
        PembayaranLayanan::where('ref_transaction_layanan' , $ref_transaction_layanan)->update([
            'paket_professional_conseling_id' => $request->id_paket
        ]);
        return redirect()->route('professional.konseling.show.form', $ref_transaction_layanan);
    }
}
