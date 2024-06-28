<?php

namespace App\Http\Controllers\PeersKonselingNew;

use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\Peers\PeersOrder;
use App\Models\Peers\PeersFormulir;
use App\Models\Peers\PeersKonselor;
use App\Http\Controllers\Controller;
use App\Models\Peers\PeersPaket;

class PeersConselingNew extends Controller
{
    public function show_pilih_paket()
    {
        return view('flow-design-baru.paket-konseling');
    }

    public function pilih_paket(Request $request)
    {
        $user_id = auth()->user()->id;
        $paket = $request->select_paket == 0 ? 'free' : 'paid';

        if ($paket == 'paid') {
            return redirect()->route('peers-new.pilih-paket-berbayar');
        }
        $ref = 'PEERS-' . strtoupper(Str::random(5)) . Carbon::now()->format('dmYHis');

        $peer = PeersOrder::create([
            'customer_id' => $user_id,
            'ref' => $ref,
            'paket_id' => 1,
            'total_price' => 0,
        ]);
        if (!$peer) {
            return 'gagal';
        }
        return redirect()->route('peers-new.pilih-konselor', $ref);
    }

    /**
     * PAKET BERBAYAR
     */

    public function show_pilih_berbayar()
    {
        $paket = PeersPaket::where('status_paket', 'paid')->get();
        return view('flow-design-baru.layanan-konseling.0-pilih-paket-berbayar', compact('paket'));
    }

    public function pilih_berbayar(Request $request)
    {
        $ref = 'PEERS-' . strtoupper(Str::random(5)) . Carbon::now()->format('dmYHis');
        $user_id = auth()->user()->id;
        $paket = PeersPaket::where('id', $request->paket_id)->firstOrFail();

        $peer = PeersOrder::create([
            'customer_id' => $user_id,
            'ref' => $ref,
            'paket_id' => $paket->id
        ]);
        if (!$peer) {
            return 'gagal';
        }
        return redirect()->route('peers-new.pilih-konselor', $ref);
    }
    /**
     * END PAKET BERBAYAR
     */

    public function pilih_konselor($ref)
    {
        $cek = PeersOrder::where('ref', $ref)->firstOrFail();
        $konselors = PeersKonselor::all();
        return view('flow-design-baru.layanan-konseling.1-pilih-konselor', compact('konselors', 'ref'));
    }

    public function process_pilih_konselor(Request $request, $ref)
    {
        $cek = PeersOrder::where('ref', $ref)->firstOrFail();
        $peer = $cek->update([
            'konselor_id' => $request->konselor_id,
        ]);
        if (!$peer) {
            return 'gagal';
        }
        return redirect()->route('peers-new.pilih-layanan', $ref);
    }

    public function pilih_layanan($ref)
    {
        $cek = PeersOrder::where('ref', $ref)->firstOrFail();
        return view('flow-design-baru.layanan-konseling.2-pilih-layanan', compact('ref'));
    }

    public function process_pilih_layanan(Request $request, $ref)
    {
        $cek = PeersOrder::where('ref', $ref)->firstOrFail();
        $peer = $cek->update([
            'platform' => $request->platform,
        ]);
        if (!$peer) {
            return 'gagal';
        }
        return redirect()->route('peers-new.formulir', $ref);
    }

    public function formulir($ref)
    {
        $cek = PeersOrder::where('ref', $ref)->firstOrFail();
        return view('flow-design-baru.layanan-konseling.3-data-diri', compact('ref'));
    }

    public function process_formulir(Request $request, $ref)
    {
        $request->validate([
            'nama_lengkap' => 'required',
            'jenis_kelamin' => 'required',
            'email' => 'required|email:dns',
            'whatsapp' => 'required',
            'bukti' => 'required',
            'detail_formulir' => 'required'
        ]);

        $cek = PeersOrder::where('ref', $ref)->firstOrFail();
        $form = PeersFormulir::create([
            'order_id' => $cek->id,
            'nama_lengkap' => $request->nama_lengkap,
            'jenis_kelamin' => $request->jenis_kelamin,
            'email' => $request->email,
            'whatsapp' => $request->whatsapp,
            'bukti' => $request->bukti,
            'detail_formulir' => $request->detail_formulir
        ]);
        if (!$form) {
            return 'gagal';
        }
        return redirect()->route('peers-new.view-pembayaran', $ref);
    }

    public function view_pembayaran($ref)
    {
        $cek = PeersOrder::with('user', 'paket', 'konselor', 'formulir')->where('ref', $ref)->firstOrFail();
        return $cek;
        return view('flow-design-baru.layanan-konseling.4-pembayaran', compact('cek'));
    }
}
