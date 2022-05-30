<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuarito extends Model
{
    use HasFactory;

    protected $fillable = [
        'idUsuario',
        'idVeterinaria',
        'correo',
        'contrasenia',
    ];
}
