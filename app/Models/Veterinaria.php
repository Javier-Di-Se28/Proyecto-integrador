<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Veterinaria extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'sucursal',
        'direccion',
        'servicios',
        'numTelefonico',
        'correo',
        'redesSociales'
    ];
}

