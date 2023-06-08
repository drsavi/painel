<?php

use App\Http\Controllers\CapturaController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\ExtratoController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UsuarioController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {return view('welcome');});
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'processLogin']);
Route::get('/register', [AuthController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [AuthController::class, 'processRegistration'])->name('register');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/home', [HomeController::class, 'showHomePage'])->name('home');
Route::get('/extratos', [ExtratoController::class, 'showExtratosPage'])->name('extratos');
Route::get('/capturas', [CapturaController::class, 'showCapturasPage'])->name('capturas');
Route::get('/clientes', [ClienteController::class, 'showClientesPage'])->name('clientes');
Route::get('/usuarios', [UsuarioController::class, 'showUsuariosPage'])->name('usuarios');


