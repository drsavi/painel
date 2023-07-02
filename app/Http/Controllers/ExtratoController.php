<?php

namespace App\Http\Controllers;

use App\Models\Extrato;

class ExtratoController extends Controller
{
    public function showExtratosPage()
    {
        $extratos = Extrato::all();
        return view('screens.extratos', ['extratos' => $extratos]);
    }
}
