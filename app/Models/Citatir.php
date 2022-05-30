<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Citatir extends Model
{
    use HasFactory;

    protected $fillable = [
        'dia',
        'hora',
    ];
}
