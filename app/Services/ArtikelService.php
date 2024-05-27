<?php

namespace App\Services;

use App\Models\Artikel;

class ArtikelService
{
    public function getAllArtikel()
    {
        return Artikel::orderBy('id', 'desc');
    }

    public function getDetailArtikel($slug)
    {
        return Artikel::where('slug', $slug)
            ->firstOrFail();
    }
}
