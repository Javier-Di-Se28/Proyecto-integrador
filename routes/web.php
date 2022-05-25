<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DuenioController;
use App\Http\Controllers\MascotaController;
use App\Http\Controllers\VeterinariaController;
<<<<<<< HEAD


=======
use App\Http\Controllers\StatusController;
use App\Http\Controllers\ForodudasController;
use Illuminate\Support\Facades\Auth;
>>>>>>> b25a5a9573a74bc73c78dcde2f85d845d17bcbb3

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
        'mascota', MascotaController::class);

Route::get('Veterinaria/datatable', [ComputadoraController::class,'datatable']);
Route::get('/',function() {
=======
Route::get('/', function () {
>>>>>>> b25a5a9573a74bc73c78dcde2f85d845d17bcbb3
    return view('welcome');
});


