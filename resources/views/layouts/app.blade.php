<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Academia IFCE</title>
    @vite(['resources/css/app.css'])
     <!-- Layout Básico -->
</head>
<body>
    <!-- Cabeçalho -->
    <header>
        <nav class="navbar">
            <div class="logo">Academia IFCE</div>
            <ul class="nav-links">
                <li><a href="/">Início</a></li>
                <li><a href="/modalidades">Modalidades</a></li>
                <li><a href="/matricula">Matrícula</a></li>
                <li><a href="/contato">Contato</a></li>
                <li><a href="/login">Login</a></li>
            </ul>
        </nav>
    </header>

    <!-- Conteúdo da página -->
    <main class="container">
        @yield('content')
    </main>

    <!-- Rodapé -->
    <footer>
        <p>© {{ date('Y') }} Academia IFCE - Todos os direitos reservados</p>
    </footer>
</body>
</html>
