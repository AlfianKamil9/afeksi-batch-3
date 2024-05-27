<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RatingKonselor extends Model
{
    use HasFactory;

    protected $table = 'rating_konselors';

    protected $guarded = ['id'];

    protected $fillable = [
        'user_id', 'konselor_id', 'tanggal', 'rating', 'review',
    ];

    public function user()
    {
        return $this->hasMany(User::class, 'user_id', 'id');
    }

    public function konselors()
    {
        return $this->belongsTo(User::class, 'konselor_id', 'id');
    }
}
