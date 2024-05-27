<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaketLayananMentoring extends Model
{
    use HasFactory;

    protected $table = 'paket_layanan_mentoring';

    protected $guarded = ['id'];

    protected $fillable = [
        'layanan_mentoring_id',
        'nama_paket',
        'harga',
        'deskripsi_paket', 'deskripsi_singkat', 'durasi', 'jumlah_sesi', 'deskripsi_durasi',
    ];

    public function layanan_mentoring()
    {
        return $this->belongsTo(LayananMentoring::class, 'layanan_mentoring_id', 'id');
    }

    public function pembayaran_layanans()
    {
        return $this->hasMany(PembayaranLayanan::class);
    }
}
