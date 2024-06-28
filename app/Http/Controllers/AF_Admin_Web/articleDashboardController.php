<?php

namespace App\Http\Controllers\AF_Admin_Web;

use App\Models\Artikel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class articleDashboardController extends Controller
{
    public function index()
    {
        $artikels = Artikel::all();
        return view('A_Page_Admin.Article.admin-article', compact('artikels'));
    }

    public function show($id)
    {
        $artikel = Artikel::findOrFail($id);
        return view('A_Page_Admin.Article.detail-data-artikel', compact('artikel'));
    }

    public function search(Request $request)
    {
        $query = $request->search;
        $artikels = Artikel::where('judul_artikel', 'like', '%' . $query . '%')->get();

        // Mengembalikan hasil pencarian ke view
        return view('A_Page_Admin.Article.admin-article', compact('artikels'));
    }

    public function create()                
    {
        return view('A_Page_Admin.Article.tambah-data-artikel');
    }
    public function createArticle(Request $request)
    {
        //validasi
        $messages = [
            'judul_artikel.required' => 'Judul artikel wajib diisi.',
            'topik.required' => 'Topik wajib diisi.',
            'isi_artikel.required' => 'Isi artikel wajib diisi.',
            'gambar.required' => 'Gambar wajib diisi.',
            'gambar.mimes' => 'Gambar wajib bertipe jpg/png/jpeg.',
            'tanggal_rilis.required' => 'Tanggal rilis wajib diisi.',
        ];

        $request->validate([
            'judul_artikel' => 'required',
            'topik' => 'required',
            'isi_artikel' => 'required',
            'gambar' => 'required|mimes:jpg,png,jpeg',
            'tanggal_rilis' => 'required',

        ], $messages);

        // membuat slug
        $ArtikelSlug = str_replace(' ', '-', $request->judul_artikel);

        // mengupload file gambar
        $extension = $request->file('gambar')->getClientOriginalExtension();
        $photoName = $request->title_event.now()->timestamp.'.'.$extension;
        $request->file('gambar')->storeAs('assets/img/artikel/', $photoName);

        //create artikel
        Artikel::create([
            'judul_artikel' => $request->judul_artikel,
            'slug' => $ArtikelSlug,
            'topik' => $request->topik,
            'isi_artikel' => $request->isi_artikel,
            'gambar' => $photoName,
            'tanggal_rilis' => $request->tanggal_rilis
        ]);

        return redirect()->route('admin.articles.index');
    }

    public function edit($id)
    {
        $artikel = Artikel::findOrFail($id);
        return view('A_Page_Admin.Article.edit-data-artikel', compact('artikel'));
    }
    
    public function updateArtikel(Request $request, $id){
         // membuat slug
         $ArtikelSlug = str_replace(' ', '-', $request->judul_artikel);

         // mengupload file gambar
         $extension = $request->file('gambar')->getClientOriginalExtension();
         $photoName = $request->title_event.now()->timestamp.'.'.$extension;
         $request->file('gambar')->storeAs('assets/img/artikel/', $photoName);
         
        Artikel::find($id)->update([
            'judul_artikel' => $request->judul_artikel,
            'slug' => $ArtikelSlug,
            'topik' => $request->topik,
            'isi_artikel' => $request->isi_artikel,
            'gambar' => $photoName,
            'tanggal_rilis' => $request->tanggal_rilis
        ]);

        return view('A_Page_Admin.Article.admin-article');

    }

    public function destroy($id){
        $artikel = Artikel::findOrFail($id);
        $artikel->delete();
        return redirect()->back();
    }
}
