<?php

namespace App\Models;

use App\Models\Psikolog;
use Illuminate\Database\Eloquent\Model;
use App\Models\PaketProfesionalConseling;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class profesional_konseling extends Model
{
    use HasFactory;

    protected $table = "profesional_konselings";
    protected $fillable = [
        'jenis_layanan',
        "namaPengalaman",
        'slug'
    ];


    public function paket_professional_conseling()
    {
        return $this->hasMany(PaketProfesionalConseling::class, 'professional_conseling_id', 'id_profConseling');
    }


    /**
     * The psikolog_professional that belong to the profesional_konseling
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function konselor(): BelongsToMany
    {
        return $this->belongsToMany(Konselor::class, 'konselor_konseling_pivot', 'konseling_id', 'konselor_id');
    }
}
