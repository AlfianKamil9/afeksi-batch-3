<?php

namespace App\Models;

use App\Models\PsikologMentoring;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PembayaranLayanan extends Model
{
    use HasFactory;

    protected $table = 'pembayaran_layanans';

    protected $fillable = [
        'user_id',
        'voucher_id',
        'ref_transaction_layanan',
        'paket_professional_conseling_id',
        'paket_layanan_non_professional_id',
        'payment_method',
        'status',
        'conseling_id',
        'psikolog_id',
        'sub_total',
        'total_payment',
        'fee_transaksi'
    ];

    public function voucher()
    {
        return $this->belongsTo(Voucher::class, 'voucher_id', 'id');
    }

    // public function mentoring()
    // {
    //     return $this->belongsTo(Mentoring::class, 'mentoring_id', 'id');
    // }

    public function konseling()
    {
        return $this->belongsTo(profresional_conseling::class, 'conseling_id', 'id');
    }

    public function psikolog()
    {
        return $this->belongsTo(PsikologMentoring::class, 'psikolog_id', 'id');
    }

    public function konselor()
    {
        return $this->belongsTo(Konselor::class,'konselor_id', 'id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function detail_pembayarans()
    {
        return $this->hasOne(DetailPembayaran::class, 'pembayaran_layanan_id', 'id');
    }

    public function paket_non_professionals()
    {
        return $this->belongsTo(PaketLayananNonProfessional::class, 'paket_layanan_non_professional_id', 'id');
    }

    public function paket_profesional_conselings()
    {
        return $this->belongsTo(PaketProfesionalConseling::class, 'paket_professional_conseling_id', 'id');
    }
}
