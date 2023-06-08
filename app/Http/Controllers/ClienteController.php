<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function showClientesPage()
    {
        return view('screens.clientes');
    }
}
