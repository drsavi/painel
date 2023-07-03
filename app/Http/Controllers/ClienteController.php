<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function showClientesPage()
    {
        $clientes = Cliente::all();

        return view('screens.clientes', ['clientes' => $clientes]);
    }

    public function showCadastrarClientesPage()
    {
        return view('screens.clientes-cadastrar');
    }

    public function processCadastrarClientes(Request $request){

        $request->validate([
            'nome' => 'required|string|max:255',
            'cnpj' => 'required|string|unique:clientes|min:14|max:255',
            'idQuestor' => 'required|string|min:4|max:255',
        ]);

        if($request->status == null){
            $request->status = false;
        }

        Cliente::create([
            'nome' => $request->nome,
            'cnpj' => $request->cnpj,
            'idQuestor' => $request->idQuestor,
            'status' => $request->status
        ]);

        return redirect('/clientes');
    }
}
