<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Models\Usuario;
use App\Models\UsuariosClientes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UsuarioController extends Controller
{
    public function showUsuariosPage()
    {
        $usuarios = Usuario::all();
        return view('screens.usuarios', ['usuarios' => $usuarios]);
    }

    public function showCadastrarUsuariosPage()
    {
        $clientes = Cliente::all();
        return view('screens.usuarios-cadastrar', ['clientes' => $clientes]);
    }

    public function processCadastrarUsuarios(Request $request){

        $request->validate([
            'nome' => 'required|string|max:255',
            'email' => 'required|string|email|unique:usuarios|max:255',
            'password' => 'required|string|min:6|max:255|confirmed',
        ]);

        if($request->admin == null){
            $request->admin = false;
        }

        if($request->status == null){
            $request->status = false;
        }
        
        $usuario = Usuario::create([
            'nome' => $request->nome,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'status' => $request->status,
            'admin' => $request->admin,
        ]);

        if($request->empresa !== "Não há clientes cadastrados"){
            UsuariosClientes::create([
                'usuario_id' => $usuario->id,
                'cliente_id' => $request->empresa
            ]);
        }

        return redirect('/usuarios');
    }

    public function destroy(Usuario $usuario)
    {
        if ($usuario->clientes->count() > 0) {
            UsuariosClientes::where('usuario_id', $usuario->id)->delete();
        }

        $usuario->delete();
    }
}
