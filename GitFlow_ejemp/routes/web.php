<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CalculadoraController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/division/{num1}/{num2}', [CalculadoraController::class, 'division']);

Route::get('/suma/{num1}/{num2}', [CalculadoraController::class, 'suma']);


