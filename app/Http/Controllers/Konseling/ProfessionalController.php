<?php

namespace App\Http\Controllers\Konseling;

use App\Http\Controllers\Controller;
use App\Models\Konselor;
use App\Models\LayananKonseling;
use App\Models\PaketLayananKonseling;
use App\Models\PembayaranLayanan;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class ProfessionalController extends Controller
{
    public function createProfessional(Request $request)
    {
        // $ref = 'PROF-'.$t.'-'.strtoupper(Str::random(5)).Carbon::now()->format('dmYHis');
        // PembayaranLayanan::create([
        //     'ref_transaction_layanan' => $ref,
        //     'status' => 'UNPAID',
        //     'user_id' => auth()->user()->id,
        //     'konseling_id' => $request->value_id
        // ]);
        return redirect()->route('professional.konseling.konselor');
    }

    public function showAllKonselor(Request $request)
    {
        $topic = LayananKonseling::where('tipe_layanan', 'PROFESSIONAL KONSELING')->get();
        $t = $request->has('topic') ? $request->input('topic') : 'Relationship';
        $p = LayananKonseling::where('nama_layanan', $t)->pluck('id')->first();
        $kueri = Konselor::with('user.education', 'konseling')->whereHas('konseling', function ($query) use ($t) {
            $query->where('nama_layanan', 'like', "%$t%");
        });

        // Filter using input type text
        if ($request->has('input_search')) {
            $name = $request->input('topic');
            $kueri->whereHas('user', function ($query) use ($name) {
                $query->where('nama', 'like', '%'.$name.'%');
            });
        }
        // Filter by date using dropdown
        $dateFilter = $request->input('sort_date');
        if ($dateFilter === 'latest') {
            $kueri->orderBy('id', 'desc');
        } elseif ($dateFilter === 'oldest') {
            $kueri->orderBy('id', 'asc');
        }

        $data = $kueri->get();
        //return response()->json($data);
        // filter by category_event_id using checkbox
        if ($request->has('topic')) {
            $kategori = $request->input('topic');
            $data = Konselor::whereHas('konseling', function ($query) use ($t) {
                $query->where('nama_layanan', $t);
            })->get();
        }

        return view('pages.ProfessionalKonseling.konselor', compact('data', 'p', 'topic'));
    }

    public function processPilihKonselor(Request $request)
    {
        //dd($request->all());
        $ref = 'PROF-'.strtoupper(Str::random(5)).Carbon::now()->format('dmYHis');
        PembayaranLayanan::create([
            'ref_transaction_layanan' => $ref,
            'status' => 'UNPAID',
            'user_id' => auth()->user()->id,
            'konseling_id' => $request->konseling_id,
            'konselor_id' => $request->value_id,
        ]);

        return redirect()->route('professional.konseling.pilihan.paket', $ref);
    }

    public function showPaketKonseling($ref_transaction_layanan)
    {
        $profKonseling = PembayaranLayanan::where('ref_transaction_layanan', $ref_transaction_layanan)->firstOrFail();
        $data = PaketLayananKonseling::with('layanan_konseling')->where('layanan_konseling_id', $profKonseling->konseling_id)->get();
        $layanan = LayananKonseling::where('id', $profKonseling->konseling_id)->pluck('nama_layanan')->first();
        $slug = $ref_transaction_layanan;

        //return response()->json($data);
        return view('pages.ProfessionalKonseling.paket-professional-konseling', compact('data', 'slug', 'layanan'));
    }

    public function processPaketKonseling(Request $request, $ref_transaction_layanan)
    {
        //dd($request->id_paket);
        PembayaranLayanan::where('ref_transaction_layanan', $ref_transaction_layanan)->update([
            'paket_layanan_konseling_id' => $request->id_paket,
        ]);

        return redirect()->route('professional.konseling.show.form', $ref_transaction_layanan);
    }
}
