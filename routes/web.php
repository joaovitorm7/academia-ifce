<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;

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
Route::get('/contato', function () {
    return view('contato');
})->name('contato');
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
        return view('matriculas.create');
    })->name('matricula');

    // 🔹 Página de Configurações (somente usuário logado pode acessar)
    Route::get('/configuracoes', [UserController::class, 'edit'])->name('config.edit');
    Route::put('/configuracoes', [UserController::class, 'update'])->name('config.update');
});


use App\Http\Controllers\MatriculaController;
Route::get('/matriculas', [MatriculaController::class, 'index'])->name('matriculas.index');
Route::get('/matriculas/create', [MatriculaController::class, 'create'])->name('matriculas.create');
Route::post('/matriculas', [MatriculaController::class, 'store'])->name('matriculas.store');



