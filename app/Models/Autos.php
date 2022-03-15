<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Autos extends Model
{
    use HasFactory;
    protected $fillable = [
        'matricula_auto',
        'marca',
        'modelo',
        'color',
        'tipus_combustible',
        'num_bastidor',
        'num_plazas',
        'num_portes',
        'grandaria_maleter',
    ];
}
