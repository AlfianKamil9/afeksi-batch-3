<?php

namespace App\Models\Peers;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PeersOrder extends Model
{
    use HasFactory;

    protected $fillable = [
        'customer_id', 'ref', 'paket_id', 'konselor_id', 'tanggal_order', 'status_order', 'total_price', 'platform'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'customer_id');
    }

    public function paket()
    {
        return $this->belongsTo(PeersPaket::class, 'paket_id');
    }

    public function konselor()
    {
        return $this->belongsTo(PeersKonselor::class, 'konselor_id');
    }
}
