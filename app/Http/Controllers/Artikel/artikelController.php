<?php

namespace App\Http\Controllers\Artikel;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Services\ArtikelService;

class artikelController extends Controller
{

    protected  $artikel;
    public function __construct(ArtikelService $artikel)
    {
        $this->artikel = $artikel;
    }

    public function index(Request $request) {
        $query = $this->artikel->getAllArtikel();

        // Filter using input type text
        if ($request->has('input_search')) {
            $query->where('judul_artikel', 'like', '%' . $request->input('input_search') . '%');
        }

        // Filter by date using dropdown
        $dateFilter = $request->input('sort_date');
        if ($dateFilter === 'oldest') {
            $query->orderBy('created_at', 'asc');
        } else  {
            $query->orderBy('created_at', 'desc');
        } 

        // filter by topik using checkbox
        if ($request->has('topik')) {
            $query->where('topik', $request->input('topik'));
        }

        $data = $query->get();

        return view('pages.Artikel.artikel', [
            'data' => $data
        ]);
    }


    public function show($slug) {
        $data = $this->artikel->getDetailArtikel($slug);
        return view('pages.Artikel.artikel-detail',[
            'data' => $data
        ]);
    }
}
