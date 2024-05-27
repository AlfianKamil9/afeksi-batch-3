<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class testimonial_internship extends Model
{
    use HasFactory;

    protected $table = 'testimonial_internship';

    protected $fillable = ['nama', 'posisi', 'foto', 'testimoni'];
}
