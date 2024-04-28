<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class RolesUser extends Model
{
    use HasFactory;

    protected $table = 'roles_users';

    protected $fillable = [
        'roles'
    ];

    public function user() {
        return $this->hasMany(User::class);
    }
}
