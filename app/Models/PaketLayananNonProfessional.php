<?php

namespace App\Models;

use App\Models\LayananNonProfessional;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PaketLayananNonProfessional extends Model
{
    use HasFactory;
    protected $table = 'paket_non_professionals';
    protected $guarded = ['id'];
    protected $fillable = [
        'layanan_nonProfessionals_id',
        'nama_paket',
        'harga',
        'deskripsi_paket','deskripsi_singkat','durasi','jumlah_sesi','deskripsi_durasi'
    ];

    public function layanan_non_professionals()
    {
        return $this->belongsTo(LayananNonProfessional::class, 'layanan_nonProfessionals_id', 'id');
    }

    // public function pembayaran_layanans()
    // {
    //     return $this->hasMany(PembayaranLayanan::class, 'paket_layanan_non_professional_id', 'id');
    // }

    public function pembayaran_layanans()
    {
        return $this->hasMany(PembayaranLayanan::class);
    }
}
