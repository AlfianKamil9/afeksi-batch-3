<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class UserEducation extends Model
{
    use HasFactory;

    protected $table =  'user_education';

    protected $fillable = [
        'user_id', 'instansi', 'jurusan', 'jenjang', 'ipk', 'tahun'
    ];


    public function user() {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
