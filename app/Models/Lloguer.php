<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lloguer extends Model
{
    use HasFactory;
    protected $fillable = [
        'dni_client',
        'matricula_auto',
        'datos_prestec',
        'datos_devolucion',
        'lloc_devolucion',
        'preu_dia',
        'prestec_retorn_disponible',
        'tipus_asseguranca',
    ];
}
