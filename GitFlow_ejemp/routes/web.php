<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CalculadoraController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/suma/{num1}/{num2}', [CalculadoraController::class, 'suma']);


Route::get('calculadora/{opcion}/{num1}/{num2}', [CalculadoraController::class, 'suma']);

Route::get('/potencia/{base}/{exponente}', [App\Http\Controllers\CalculadoraController::class, 'potencia']);

Route::get('/division/{num1}/{num2}', [CalculadoraController::class, 'division']);


Route::get('/resta/{num1}/{num2}', [CalculadoraController::class, 'resta']);


Route::get('/multiplicacion/{num1}/{num2}', [CalculadoraController::class, 'multiplicacion']);