<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/modalidades', function () {
    return view('modalidades');
});

Route::get('/matricula', function () {
    return view('matricula');
});

Route::get('/contato', function () {
    return view('contato');
});

// Rotas de autenticação
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.post');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Exemplo de rota protegida (apenas logado acessa)
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware('auth')->name('dashboard');
