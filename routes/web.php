<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DuenioController;
use App\Http\Controllers\MascotitaController;
use App\Http\Controllers\VeterinariaController;
<<<<<<< HEAD
use App\Http\Controllers\MotivoController;

Route::resources([
    'duenio'   => DuenioController::class,
    

]);
=======
use App\Http\Controllers\StatusController;
use App\Http\Controllers\ForodudasController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\CitaController;
use Illuminate\Support\Facades\Auth;

>>>>>>> dba490072742cbb26efbd72dc92498efb9a742fe

Route::resources([
    'veterinaria'   => VeterinariaController::class,
    

]);

Route::resources([
    'status'   => StatusController::class,
    
]);

Route::resources([
    'forodudas'   => ForodudasController::class,
]);

<<<<<<< HEAD
    Route::resource(
        'mascotita', MascotitaController::class);
        
    Route::resource(
            'motivo', MotivoController::class);


Route::get('/',function() {
    return view('welcome');
});
=======
Route::resources([
    'usuario'   => UsuarioController::class,
]);

Route::resources([
    'cita'   => CitaController::class,
]);


>>>>>>> dba490072742cbb26efbd72dc92498efb9a742fe


