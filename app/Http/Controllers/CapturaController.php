<?php

namespace App\Http\Controllers;

use App\Models\Captura;

class CapturaController extends Controller
{
    public function showCapturasPage()
    {
        $capturas = Captura::all();
        return view('screens.capturas', ['capturas' => $capturas]);
    }
}
