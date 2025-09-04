<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;



/*
 * Rota Principal: Redireciona para a tela de login.
 */
Route::get('/', function () {
    return redirect()->route('login');
});

/*
 * Rotas de Autenticação (Apenas para Visitantes / Não Logados)
 */
Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [AuthController::class, 'login'])->name('login.post');

    Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
    Route::post('/register', [AuthController::class, 'register'])->name('register.post');
});

/*
 * Rota de Logout (Acessível para quem está logado)
 */
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

/*
 * Rotas Públicas (Acessíveis por qualquer um, logado ou não)
 */
Route::get('/modalidades', function () {
    return view('modalidades');
})->name('modalidades');

Route::get('/contato', function () {
    return view('contato');
})->name('contato');

/*
 * Rotas Protegidas (Apenas para usuários autenticados)
 */
Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::get('/matricula', function () {
        return view('matricula');
    })->name('matricula');
});
