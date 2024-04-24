<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class konselorTopic extends Model
{
    use HasFactory;
    protected $fileable =[
        'konselor_id', 'jenis_topic'
    ];


    public function konselor() {
        return $this->belongsTo(Konselor::class, 'konselor_id', 'id');
    }
}
