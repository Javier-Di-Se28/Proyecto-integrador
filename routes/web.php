<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DuenioController;

use App\Http\Controllers\VeterinariaController;

use Illuminate\Support\Facades\Auth;

Route::resources([
    'veterinaria'   => VeterinariaController::class,
    
]);

Route::resource(
    'duenio', DuenioController::class);

Route::get('Veterinaria/datatable', [ComputadoraController::class,'datatable']);
Route::get('/',function() {
    return view('welcome');
});


