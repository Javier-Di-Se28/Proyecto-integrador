<?php

use Illuminate\Support\Facades\Route;
<<<<<<< HEAD
use App\Http\Controllers\VeterinariaController;
=======
use App\Http\Controllers\ComputadoraController;
use Illuminate\Support\Facades\Auth;
>>>>>>> a54f7c0ab0f1b9709527580f44a63dc73cf25de0

Route::resources([
    'veterinaria'   => VeterinariaController::class,
    
]);

Route::get('/', function () {
    return view('welcome');
});
