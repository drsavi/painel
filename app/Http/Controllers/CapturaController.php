<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CapturaController extends Controller
{
    public function showCapturasPage()
    {
        return view('screens.capturas');
    }
}
