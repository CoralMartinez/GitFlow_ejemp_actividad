<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculadoraController extends Controller
{
    public function suma($opcion,$num1,$num2){
        return view('calculadora.calculadora',['opcion' => $opcion ,'num1' => $num1, 'num2' => $num2]);
    }

    public function potencia($base, $exponente)
    {
        $resultado = pow($base, $exponente);
        return "La potencia de {$base} elevado a {$exponente} es: {$resultado}";
    }
}
