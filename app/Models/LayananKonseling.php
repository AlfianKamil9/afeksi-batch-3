<?php

namespace App\Models;

use App\Models\Psikolog;
use Illuminate\Database\Eloquent\Model;
use App\Models\PaketLayananKonseling;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class LayananKonseling extends Model
{
    use HasFactory;

    protected $table = "layanan_konseling";
    protected $fillable = [
        'jenis_layanan',
        "namaPengalaman",
        'slug'
    ];


    public function paket_layanan_konseling()
    {
        return $this->hasMany(PaketLayananKonseling::class, 'layanan_konseling_id', 'id');
    }


    /**
     * The psikolog_professional that belong to the LayananKonseling
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function konselor(): BelongsToMany
    {
        return $this->belongsToMany(Konselor::class, 'konselor_konseling_pivot', 'konseling_id', 'konselor_id');
    }
}
