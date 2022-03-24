<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Autos extends Model
{
    use HasFactory;
    public $timestamps = false;//Para que no introduzca campos de update at
    protected $primaryKey = 'matricula_auto';
    protected $fillable = [
        'matricula_auto',
        'marca',
        'model',
        'color',
        'tipus_combustible',
        'num_bastidor',
        'num_plazas',
        'num_portes',
        'grandaria_maleter',
    ];
}
