<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculadoraController extends Controller
{
   public function suma($num1, $num2){
        return 'La suma de '.$num1.' y '.$num2.' es: '.($num1 + $num2);
   }

    public function potencia($base, $exponente)
    {
        $resultado = pow($base, $exponente);
        return "La potencia de {$base} elevado a {$exponente} es: {$resultado}";
    }


    public function resta($num1, $num2){
        return 'la resta de '.$num1.' y '.$num2.' es: '.($num1 - $num2);
    }

    public function multiplicacion($num1, $num2){
        return 'la multiplicacionnnn de '.$num1.' y '.$num2.' es: '.($num1 * $num2);
    }

}


