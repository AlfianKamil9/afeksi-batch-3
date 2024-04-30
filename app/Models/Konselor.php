<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Konselor extends Model
{
    use HasFactory;
    protected $table = 'konselors';
    protected $guarded = ['id'];

    protected $fillable = [
        'user_id', 'profile', 'deskripsi'
    ];

    public function user() {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function topic() {
        return $this->hasMany(konselorTopic::class);
    }
    
    public function konseling(): BelongsToMany
    {
        return $this->belongsToMany(LayananKonseling::class, 'konselor_konseling_pivot', 'konselor_id', 'konseling_id');
    }
}