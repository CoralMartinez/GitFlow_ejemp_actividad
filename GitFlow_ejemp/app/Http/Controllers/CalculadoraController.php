<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculadoraController extends Controller
{
   public function suma($num1, $num2){
        return 'la suma de '.$num1.' y '.$num2.' es: '.($num1 + $num2);
    }
}


