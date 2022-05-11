<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VeterinariaController;

Route::resources([
    'veterinaria'   => VeterinariaController::class,
    
]);

Route::get('/', function () {
    return view('welcome');
});
