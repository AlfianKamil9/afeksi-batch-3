<?php

namespace App\Models;

use App\Models\Psikolog;
use App\Models\PsikologMentoring;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class LayananMentoring extends Model
{
    use HasFactory;

    protected $table = 'layanan_mentoring';
    protected $guarded = ['id'];
    protected $fillable = [
        'jenis_layanan',
        'nama_layanan',
        'slug'
    ];

    public function paket_layanan_mentoring()
    {
        return $this->hasMany(PaketLayananMentoring::class,'id');
    }

    // public function psikologs()
    // {
    //     return $this->hasMany(Psikolog::class, 'layanan_mentoring_id', 'id');
    // }

    /**
     * The psikolog_non_profesional that belong to the LayananMentoring
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function psikolog_mentoring(): BelongsToMany
    {
        return $this->belongsToMany(PsikologMentoring::class, 'psikolog_mentoring_pivot', 'mentoring_id', 'psikolog_id');
    }
}
