<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController; 
use App\Http\Controllers\CitaController;



Route::get('/', function () {
    return view('welcome');
});

Route::resource('usuario', UsuarioController::class);
Route::resource('cita', CitaController::class);