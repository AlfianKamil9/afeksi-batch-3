<?php

namespace App\Models;

use App\Models\RolesUser;
use App\Models\EventTransaction;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasFactory, Notifiable, CanResetPassword;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $table = 'users';

    protected $fillable = [
        'nama',
        'avatar',
        'tgl_lahir',
        'email',
        'jenisKelamin',
        'password',
        'umur',
        'google_id',
        'no_whatsapp',
        //'instansi',
        'domisili',
        'role_id',
        'pekerjaan'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function roles() 
    {
        return $this->belongsTo(RolesUser::class, 'role_id', 'id');
    }

    public function education() 
    {
        return $this->hasMany(UserEducation::class);
    } 

    public function event_transaction()
    {
        return $this->hasMany(EventTransaction::class);
    }

    public function psikolog_mentoring()
    {
        return $this->hasMany(PsikologMentoring::class);
    }

    public function konselor_konseling()
    {
        return $this->hasMany(Konselor::class);
    }

    public function pembayaran_layanan()
    {
        return $this->hasMany(PembayaranLayanan::class);
    }

    public function rating_konselor()
    {
        return $this->hasMany(RatingKonselor::class);
    }
}