<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    protected $table = 'users';

    protected $fillable = [
        'nameUser',
        'lastnameUser',
        'cardCodeUser',
        'typeDocUser',
        'numDocUser',
        'numPhoneUser',
        'emailUser',
        'passUser',
        'stratumUser',
        'ageUser',
        'genderUser',
        'addressUser',
        'idRolUser', // Asigna siempre 'cliente'
    ];

    protected $hidden = [
        'passUser',
    ];

    public function getAuthPassword()
    {
        return $this->passUser;
    }

    public $timestamps = true;
}