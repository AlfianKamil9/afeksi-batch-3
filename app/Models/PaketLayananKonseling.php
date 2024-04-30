<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaketLayananKonseling extends Model
{
    use HasFactory;
    protected $table = 'paket_layanan_konseling';
    protected $fillable = [
        'nama_paket',
        'layanan_konseling_id',
        'durasi',
        'jumlah_sesi',
        'deskripsi_paket',
        'deskripsi_singkat',
        'harga',
    ];

    public function layanan_konseling()
    {
        return $this->belongsTo(LayananKonseling::class, 'layanan_konseling_id', 'id');
    }

    public function pembayaran_layanans()
    {
        return $this->hasMany(PembayaranLayanan::class, 'paket_layanan_konseling_id', 'id');
    }
    
}
