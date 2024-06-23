<?php

namespace App\Models\Peers;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PeersIssue extends Model
{
    use HasFactory;

    protected $fillable = ['nama_issue'];
}
