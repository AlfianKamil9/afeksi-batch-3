<?php

namespace App\Models\Peers;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PeersPraktekSchedule extends Model
{
    use HasFactory;

    protected $fillable = [
        'konselor_id', 'hari', 'jam_mulai', 'jam_selesai'
    ];
}
