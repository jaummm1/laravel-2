<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalcController extends Controller
{
    public function showSoma()
    {
        return view('soma');
    }


    public function calcSoma(Request $request)
    {
            if($request->n2 == '+')
               {$result = $request->n1 + $request->n3;}
            else if($request->n2 == '-')
               {$result = $request->n1 - $request->n3;}
            else if($request->n2 == '*')
               {$result = $request->n1*$request->n3;}
            else
              { $result = $request->n1/$request->n3;}

        return view('calcular', compact('result'));
    }

    public function showSoma1()
    {
        return view('calculadora');
    }


    public function calcSoma1(Request $request)
    {
            if($request->operador == '+')
               {$result = $request->num1 + $request->num2;}
            else if($request->operador == '-')
               {$result = $request->num1 - $request->num2;}
            else if($request->operador == '*')
               {$result = $request->num1*$request->num2;}
            else
              { $result = $request->num1/$request->num2;}

        return view('calcular', compact('result'));
    }
}
