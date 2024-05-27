<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RolesUser extends Model
{
    use HasFactory;

    protected $table = 'roles_users';

    protected $fillable = [
        'roles',
    ];

    public function user()
    {
        return $this->hasMany(User::class);
    }
}
