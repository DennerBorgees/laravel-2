<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalcController extends Controller
{
    public function showSum()
    {
        return view('sumCalc');
    }

    public function calcSum(Request $request)
    {
        if(!is_numeric($request->n1) || !is_numeric($request->n2))
        {
            return abort(502, 'Não São Números');
        }

        $resultSum = $request->n1 + $request->n2;


        return view('sum', compact('resultSum'));
    }
}
