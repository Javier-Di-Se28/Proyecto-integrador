<?php

use Illuminate\Support\Facades\Route;



use App\Http\Controllers\DuenioController;
use App\Http\Controllers\MascotitaController;
use App\Http\Controllers\VeterinariaController;
<<<<<<< HEAD
=======
use App\Http\Controllers\UsuaritoController;
use App\Http\Controllers\CitatirController;



>>>>>>> f2d84c594f386a8cc3709d922c24391bf011a586

use App\Http\Controllers\MotivoController;

<<<<<<< HEAD
Route::resources([
    'duenio'   => DuenioController::class,
    

]);

use App\Http\Controllers\EstadoController;
use App\Http\Controllers\ForodudasController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\CitaController;


=======
use App\Http\Controllers\StatusController;
use App\Http\Controllers\ForodudasController;
use Illuminate\Support\Facades\Auth;
>>>>>>> f2d84c594f386a8cc3709d922c24391bf011a586


Route::resources([
    'veterinaria'   => VeterinariaController::class,
]);


Route::resources([
    'estado'   => EstadoController::class,
    

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
=======
Route::resources([
    'mascota' => MascotaController::class,
]);

Route::resources([
    'duenio'   => DuenioController::class,
]);

Route::resources([
    'usuarito' => UsuaritoController::class,
]);

Route::resources([
    'citatir'   => CitatirController::class,
]);

Route::get('/', function () {
    return view('welcome');
});
>>>>>>> f2d84c594f386a8cc3709d922c24391bf011a586
