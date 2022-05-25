<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DuenioController;

use App\Http\Controllers\VeterinariaController;
use App\Http\Controllers\StatusController;
use App\Http\Controllers\ForodudasController;
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

Route::get('/', function () {
    return view('welcome');
});


