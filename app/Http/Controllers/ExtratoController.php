<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExtratoController extends Controller
{
    public function showExtratosPage()
    {
        return view('screens.extratos');
    }
}
