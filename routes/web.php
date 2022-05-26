<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DuenioController;
use App\Http\Controllers\MascotitaController;
use App\Http\Controllers\VeterinariaController;

use App\Http\Controllers\MotivoController;

Route::resources([
    'duenio'   => DuenioController::class,
    

]);

use App\Http\Controllers\StatuController;
use App\Http\Controllers\ForodudasController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\CitaController;




Route::resources([
    'veterinaria'   => VeterinariaController::class,
    

]);


    

Route::resources([
    'statu'   => StatuController::class,
    
]);

Route::resources([
    'forodudas'   => ForodudasController::class,
]);


    Route::resource(
        'mascotita', MascotitaController::class);
        
    Route::resource(
            'motivo', MotivoController::class);


Route::get('/',function() {
    return view('welcome');
});

Route::resources([
    'usuario'   => UsuarioController::class,
]);

Route::resources([
    'cita'   => CitaController::class,
]);
Route::resources([
    'mascota'   => MascotaController::class,
]);




