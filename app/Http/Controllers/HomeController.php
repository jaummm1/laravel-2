<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use function PHPUnit\Framework\isNan;

class HomeController extends Controller
{
    public function hello()
    {
        return view('hello');
    }

    public function soma($num1, $num2)
    {
        //verificacao se variaveis sao numeros
        if (!is_numeric($num1) || !is_numeric($num2)){
            return abort(502, 'Nao sao Numeros');
        }
        //calcular soma
        $result = $num1 + $num2;

        //retornar pagina para o usuario
        return view('resultado', compact('result'));
    }

    public function sub($num1, $num2)
    {
        //verificacao se variaveis sao numeros
        if (!is_numeric($num1) || !is_numeric($num2)){
            return abort(502, 'Nao sao Numeros');
        }
        //calcular subtracao
        $result = $num1 - $num2;

        //retornar pagina para o usuario
        return view('resultado', compact('result'));
    }
}
