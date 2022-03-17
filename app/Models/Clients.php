<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clients extends Model
{
    use HasFactory;
    public $timestamps = false;//Para que no introduzca campos de update at
    protected $fillable = [
        'dni_client',
        'nom',
        'cognoms',
        'num_targeta',
        'edat',
        'telefon',
        'tipus_targeta',
        'adreca',
        'ciutat',
        'pais',
        'num_permis_conduccio',
        'email',
        'punts_permis'

    ];
}
