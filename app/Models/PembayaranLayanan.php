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
        'paket_layanan_konseling_id',
        'paket_layanan_mentoring_id',
        'payment_method',
        'status',
        'konseling_id',
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
        return $this->belongsTo(LayananKonseling::class, 'konseling_id', 'id');
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

    public function paket_layanan_mentoring()
    {
        return $this->belongsTo(PaketLayananMentoring::class, 'paket_layanan_mentoring_id', 'id');
    }

    public function paket_layanan_konseling()
    {
        return $this->belongsTo(PaketLayananKonseling::class, 'paket_layanan_konseling_id', 'id');
    }
}
