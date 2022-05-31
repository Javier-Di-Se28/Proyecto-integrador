<?php

use Illuminate\Support\Facades\Route;



use App\Http\Controllers\DuenioController;
use App\Http\Controllers\MascotaController;
use App\Http\Controllers\VeterinariaController;
use App\Http\Controllers\MotivoController;
use App\Http\Controllers\UsuaritoController;
use App\Http\Controllers\CitaController;

use Illuminate\Support\Facades\Auth;



Route::resources([
    'duenio'   => DuenioController::class,
    

]);

use App\Http\Controllers\EstadoController;
use App\Http\Controllers\ForodudasController;



Route::resources([
    'veterinaria'   => VeterinariaController::class,
]);


Route::resources([
    'estado'   => EstadoController::class,
    

]);

Route::resources([
    'forodudas'   => ForodudasController::class,
]);
    Route::resource(
        'mascota', MascotaController::class);
        
    Route::resource(
            'motivo', MotivoController::class);


Route::resources([
    'usuarito'   => UsuaritoController::class,
]);

Route::resource(
    'cita' , CitaController::class);

Route::resources([
    'mascota'   => MascotaController::class,
]);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/', function () {

    return view('welcome');
});


