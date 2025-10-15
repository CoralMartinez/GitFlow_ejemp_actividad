<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculadoraController extends Controller
{
    public function potencia($base, $exponente)
    {
        $resultado = pow($base, $exponente);
        return "La potencia de {$base} elevado a {$exponente} es: {$resultado}";
    }
}
