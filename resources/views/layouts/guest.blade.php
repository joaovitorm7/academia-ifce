<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>@yield('title', 'Área de Login')</title>
  @vite(['resources/css/app.css'])
</head>
<body>
  <main class="guest-wrapper">
    @yield('content')
  </main>
</body>
</html>
