<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GuestStar extends Model
{
    use HasFactory;

    protected $table = 'gueststar';

    protected $fillable = [
        'layanan_mentoring_id',
        'layanan_konseling_id',
        'nama_psikolog',
        'rating',
        'profil',
        'deskripsi',
        'keahlian',
        'avatar',
        'pendidikan',
    ];

    public function webinar_session()
    {
        return $this->belongsTo(EventMaterialSession::class, 'pembicara_id');
    }

    public function layanan_mentoring()
    {
        return $this->belongsTo(LayananMentoring::class, 'layanan_mentoring_id', 'id');
    }

    public function layanan_konseling()
    {
        return $this->belongsTo(LayananKonseling::class, 'layanan_konseling_id', 'id');
    }

    public function pembayaran_layanans()
    {
        return $this->hasMany(PembayaranLayanan::class, 'psikolog_id', 'id');
    }
}
