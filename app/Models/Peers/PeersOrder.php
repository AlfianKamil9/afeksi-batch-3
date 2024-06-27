<?php

namespace App\Models\Peers;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PeersOrder extends Model
{
    use HasFactory;

    protected $fillable = [
        'customer_id', 'ref', 'paket_id', 'konselor_id', 'tanggal_order', 'status_order', 'total_price', 'platform'
    ];
}
