<?php

namespace App\Models\Peers;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PeersFormulir extends Model
{
    use HasFactory;

    protected $fillable = [
        'order_id', 'nama_lengkap', 'jenis_kelamin', 'email', 'whatsapp', 'bukti', 'detail_formulir'
    ];
}
