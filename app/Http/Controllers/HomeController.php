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

    public function sum($num1, $num2)
    {
        if(!is_numeric($num1) || !is_numeric($num2))
        {

            return abort(404, 'Um dos Parâmetros não é número');
        }

        $resultSum = $num1 + $num2;

        return view('sum', compact('resultSum'));
    }

    public function sub($num1sub, $num2sub)
    {
        if(!is_numeric($num1sub) || !is_numeric($num2sub))
        {

            return abort(404, 'Um dos Parâmetros não é número');
        }

        $resultSub = $num1sub - $num2sub;

        return view('sub', compact('resultSub'));
    }

    public function pokemon($nome)
    {
        return view('pokemon', compact('nome'));
    }
}
