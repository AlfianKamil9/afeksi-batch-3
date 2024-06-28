<?php

namespace App\Models\Peers;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PeersPaket extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_paket', 'headline_paket', 'harga_paket', 'durasi_paket', 'deskripsi_paket', 'status_paket'
    ];
}
