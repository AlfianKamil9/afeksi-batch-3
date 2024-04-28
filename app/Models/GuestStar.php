<?php

namespace App\Models;

use App\Models\EventMaterialSession;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class GuestStar extends Model
{
    use HasFactory;

    protected $table = 'gueststar';

    protected $fillable = [
        'layanan_non_professionals_id',
        'professional_conseling_id',
        'nama_psikolog',
        'rating',
        'profil',
        'deskripsi',
        'keahlian',
        'avatar',
        'pendidikan'
    ];

    public function webinar_session()
    {
        return $this->belongsTo(EventMaterialSession::class, 'pembicara_id');
    }

    public function layanan_non_professionals()
    {
        return $this->belongsTo(LayananNonProfessional::class, 'layanan_non_professionals_id', 'id');
    }

    public function profesional_konselings()
    {
        return $this->belongsTo(profesional_konseling::class, 'professional_conseling_id', 'id');
    }

    public function pembayaran_layanans()
    {
        return $this->hasMany(PembayaranLayanan::class, 'psikolog_id', 'id');
    }
}
