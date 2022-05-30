<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DuenioController;
use App\Http\Controllers\MascotitaController;
use App\Http\Controllers\VeterinariaController;

use App\Http\Controllers\MotivoController;

Route::resources([
    'duenio'   => DuenioController::class,
    

]);

use App\Http\Controllers\EstadoController;
use App\Http\Controllers\ForodudasController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\CitaController;




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





Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
