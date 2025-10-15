<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/division/{num1}/{num2}', [CalculadoraController::class, 'division']);