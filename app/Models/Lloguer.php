<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lloguer extends Model
{
    use HasFactory;
    public $timestamps = false;//Para que no introduzca campos de update at
    protected $primaryKey = 'dni_client';
    public $incrementing = false;
    protected $fillable = [
        'dni_client',
        'matricula_auto',
        'data_prestec',
        'data_devolucion',
        'lloc_devolucion',
        'preu_dia',
        'prestec_retorn_disponible',
        'tipus_asseguranca',
    ];
}
