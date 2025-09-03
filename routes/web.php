<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;

/*
 * Entrada: sempre redireciona para login (quem já estiver logado vai pro dashboard)
 */
Route::get('/', function () {
    return redirect()->route('login');
});

/*
 * Rotas abertas apenas para guests (não logados).
 * OBS: vamos ajustar RouteServiceProvider::HOME para /dashboard (ver mais abaixo).
 */
Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [AuthController::class, 'login'])->name('login.post');

    Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
    Route::post('/register', [AuthController::class, 'register'])->name('register.post');
});

/*
 * Logout (pode ser acessado mesmo por usuários autenticados)
 */
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

/*
 * Rotas protegidas por autenticação
 */
Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::get('/modalidades', function () {
        return view('modalidades');
    });

    Route::get('/matricula', function () {
        return view('matricula');
    });

    Route::get('/contato', function () {
        return view('contato');
    });
});

