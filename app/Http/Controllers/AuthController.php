<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function processLogin(Request $request)
    {
        $credentials = $request->only('email', 'senha');

        if (Auth::attempt($credentials)) {
            // Autenticação bem-sucedida, redireciona para a página inicial do usuário
            return redirect()->intended('/home');
        }

        // Autenticação falhou, redireciona para a página de login com uma mensagem de erro
        return redirect()->route('login')->with('error', 'Credenciais inválidas.');
    }

    public function showRegistrationForm()
    {
        return view('auth.register');
    }

    public function processRegistration(Request $request)
    {
        // Validação dos dados do formulário
        $request->validate([
            'nome' => 'required|string|max:255',
            'email' => 'required|string|email|unique:users|max:255',
            'senha' => 'required|string|min:8|max:255|confirmed',
        ]);

        // Cria um novo usuário com os dados do formulário
        $user = Usuario::create([
            'nome' => $request->nome,
            'email' => $request->email,
            'senha' => Hash::make($request->senha),
        ]);

        // Faz o login do usuário recém-criado
        Auth::login($user);

        // Redireciona o usuário para a página de dashboard
        return redirect('/home');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }

}
