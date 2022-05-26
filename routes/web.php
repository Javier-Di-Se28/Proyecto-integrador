<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DuenioController;
use App\Http\Controllers\MascotaController;
use App\Http\Controllers\VeterinariaController;
use App\Http\Controllers\StatusController;
use App\Http\Controllers\ForodudasController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\CitaController;
use Illuminate\Support\Facades\Auth;


Route::resources([
    'veterinaria'   => VeterinariaController::class,
    

]);

Route::resources([
    'status'   => StatusController::class,
    
]);

Route::resources([
    'forodudas'   => ForodudasController::class,
]);

Route::resources([
    'usuario'   => UsuarioController::class,
]);

Route::resources([
    'cita'   => CitaController::class,
]);
Route::resources([
    'mascota'   => MascotaController::class,
]);



