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
        if(!is_numeric($request->n1) || !is_numeric($request->n2)) {
            return abort(502, 'Nao sao numeros');
        }

        $result = $request->n1 + $request->n2;

        return view('resultado', compact('result'));
    }
}
