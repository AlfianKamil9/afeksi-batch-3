<?php

namespace App\Models;

use App\Models\LayananNonProfessional;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class PsikologMentoring extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama', 'pendidikan', 'avatar', 'profile', 'deskripsi'
    ];
    protected $guarded = ['id'];

    public function mentoring(): BelongsToMany
    {
        return $this->belongsToMany(LayananNonProfessional::class, 'psikolog_mentoring_pivot','psikolog_id', 'mentoring_id');
    }
}
