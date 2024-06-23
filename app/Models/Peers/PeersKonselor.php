<?php

namespace App\Models\Peers;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PeersKonselor extends Model
{
    use HasFactory;

    protected $fillable = ['nama_konselor', 'profile_konselor', 'instagram'];
}
