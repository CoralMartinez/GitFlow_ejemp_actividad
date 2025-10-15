<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CalculadoraController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/potencia/{base}/{exponente}', [App\Http\Controllers\CalculadoraController::class, 'potencia']);

