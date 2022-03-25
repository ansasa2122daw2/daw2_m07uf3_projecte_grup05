<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuaris extends Model
{
    use HasFactory;
    public $timestamps = false;//Para que no introduzca campos de update at
    public $incrementing = false;
    protected $primaryKey = 'email';
    protected $fillable = [
        'nom',
        'cognom',
        'email',
        'contrasenya',
        'tipus',
        'hora_entrada',
        'hora_sortida'
    ];

    protected $hidden = [
        'contrasenya',
        'remember_token',

    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
