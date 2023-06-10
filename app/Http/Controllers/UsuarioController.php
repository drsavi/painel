<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UsuarioController extends Controller
{
    public function showUsuariosPage()
    {
        $usuarios = User::all();

        return view('screens.usuarios', ['usuarios' => $usuarios]);
    }

    public function showCadastrarUsuariosPage()
    {
        return view('screens.usuarios-cadastrar');
    }

    public function processCadastrarUsuarios(Request $request){

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|unique:users|max:255',
            'password' => 'required|string|min:6|max:255|confirmed',
            'empresa' => 'string',
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'status' => $request->status,
            'admin' => $request->admin,
            'empresa' => $request->empresa,
        ]);

        return redirect('/usuarios');
    }
}
