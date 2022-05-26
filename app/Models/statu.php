<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class statu extends Model
{

    protected $fillable = [
        'hora',
        'dia',
        'tratamiento',
        'observaciones'
    ];
    use HasFactory;
}
