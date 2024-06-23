<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaketProfesionalConseling extends Model
{
    use HasFactory;
    protected $table = 'paket_profesional_conselings';
    protected $fillable = [
        'nama_paket',
        'professional_conseling_id',
        'durasi',
        'jumlah_sesi',
        'deskripsi_paket',
        'deskripsi_singkat',
        'harga',
    ];

    public function professional_conseling()
    {
        return $this->belongsTo(profresional_conseling::class, 'professional_conseling_id', 'id');
    }

    public function pembayaran_layanans()
    {
        return $this->hasMany(PembayaranLayanan::class, 'paket_professional_conseling_id', 'id');
    }
    
}
