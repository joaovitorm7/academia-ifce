# API Documentation

## Project: laravel/laravel

Laravel Version: v12.28.1

Generated: 11/09/2025, 09:40:34

## Table of Contents

- [web](#web)

## web

| Method | Endpoint | Handler | Description |
|--------|----------|---------|-------------|
| GET | / | function () {
    return redirect()->route('login');
});

/*
 * Rotas de Autenticação (Apenas para Visitantes / Não Logados)
 */
Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthController::class, 'showLoginForm' | List resource |
| POST | /login | AuthController::class, 'login' | Create a new login |
| GET | /register | AuthController::class, 'showRegisterForm' | List register |
| POST | /register | AuthController::class, 'register' | Create a new register |
| POST | /logout | AuthController::class, 'logout' | Create a new logout |
| GET | /contato | function () {
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
    Route::get('/dashboard', [DashboardController::class, 'index' | List contato |
| GET | /matricula | function () {
        return view('matriculas.create');
    })->name('matricula');

    // 🔹 Página de Configurações (somente usuário logado pode acessar)
    Route::get('/configuracoes', [UserController::class, 'edit' | List matricula |
| PUT | /configuracoes | UserController::class, 'update' | Update a specific configuracoes |
| GET | /matriculas | MatriculaController::class, 'index' | List matriculas |
| GET | /matriculas/create | MatriculaController::class, 'create' | List create |
| POST | /matriculas | MatriculaController::class, 'store' | Create a new matriculas |

### GET /

**Handler:** function () {
    return redirect()->route('login');
});

/*
 * Rotas de Autenticação (Apenas para Visitantes / Não Logados)
 */
Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthController::class, 'showLoginForm'

**Description:** List resource

---

### POST /login

**Handler:** AuthController::class, 'login'

**Description:** Create a new login

---

### GET /register

**Handler:** AuthController::class, 'showRegisterForm'

**Description:** List register

---

### POST /register

**Handler:** AuthController::class, 'register'

**Description:** Create a new register

---

### POST /logout

**Handler:** AuthController::class, 'logout'

**Description:** Create a new logout

---

### GET /contato

**Handler:** function () {
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
    Route::get('/dashboard', [DashboardController::class, 'index'

**Description:** List contato

---

### GET /matricula

**Handler:** function () {
        return view('matriculas.create');
    })->name('matricula');

    // 🔹 Página de Configurações (somente usuário logado pode acessar)
    Route::get('/configuracoes', [UserController::class, 'edit'

**Description:** List matricula

---

### PUT /configuracoes

**Handler:** UserController::class, 'update'

**Description:** Update a specific configuracoes

---

### GET /matriculas

**Handler:** MatriculaController::class, 'index'

**Description:** List matriculas

---

### GET /matriculas/create

**Handler:** MatriculaController::class, 'create'

**Description:** List create

---

### POST /matriculas

**Handler:** MatriculaController::class, 'store'

**Description:** Create a new matriculas

---

