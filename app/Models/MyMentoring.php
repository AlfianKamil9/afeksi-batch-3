<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MyMentoring extends Model
{
    use HasFactory;
    protected $table = 'my_mentorings';
    protected $guarded = ['id'];

    protected $fillable = [
        'user_id', 'mentoring_id', 'transaksi_id', 'tanggal_mentoring', 'waktu', 'link'
    ];

    public function user() {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function MyMentoring(){
        return $this->belongsTo(LayananMentoring::class, 'mentoring_id', 'id');
    }
}
