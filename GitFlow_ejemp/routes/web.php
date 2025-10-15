<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CalculadoraController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('calculadora/{opcion}/{num1}/{num2}', [CalculadoraController::class, 'suma']);