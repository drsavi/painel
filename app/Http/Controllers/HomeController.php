<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function showHomePage()
    {
        return view('screens.home');
    }
}
