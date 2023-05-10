<?php

namespace App\Http\Controllers;

use App\Models\User;
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
        $credentials = $request->only('email', 'password');

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
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|unique:users|max:255',
            'password' => 'required|string|min:8|max:255|confirmed',
        ]);

        // Cria um novo usuário com os dados do formulário
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        // Faz o login do usuário recém-criado
        Auth::login($user);

        // Redireciona o usuário para a página de dashboard
        return redirect('/dashboard');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }

}
