<?php

namespace App\Models;

use App\Models\User;
use App\Models\LayananMentoring;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class PsikologMentoring extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id', 'profile', 'deskripsi'
    ];
    protected $guarded = ['id'];

    public function user() {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function mentoring(): BelongsToMany
    {
        return $this->belongsToMany(LayananMentoring::class, 'psikolog_mentoring_pivot','psikolog_id', 'mentoring_id');
    }
}
