<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Configurações</title>
    @vite('resources/css/app.css')

    <style>
        body {
            background: #f4f4f4;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        h1 {
            text-align: center;
            color: #006400;
            margin-top: 32px;
            margin-bottom: 24px;
        }

        form {
            background: #fff;
            max-width: 400px;
            margin: 24px auto;
            padding: 28px 24px 18px 24px;
            border-radius: 12px;
            box-shadow: 0 4px 18px rgba(0, 0, 0, 0.08);
            display: flex;
            flex-direction: column;
            gap: 16px;
        }

        form div {
            display: flex;
            flex-direction: column;
            gap: 4px;
        }

        label {
            font-weight: bold;
            color: #333;
            margin-bottom: 2px;
        }

        input[type="text"],
        input[type="email"],
        input[type="password"] {
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 8px;
            font-size: 16px;
            background: #fafafa;
            transition: border 0.2s;
        }

        input:focus {
            border-color: #006400;
            outline: none;
        }

        button[type="submit"] {
            background: #006400;
            color: #fff;
            border: none;
            border-radius: 8px;
            padding: 12px 0;
            font-size: 17px;
            font-weight: bold;
            cursor: pointer;
            margin-top: 10px;
            transition: background 0.2s;
        }

        button[type="submit"]:hover {
            background: #065f46;
        }

        div[style*="color: green;"] {
            text-align: center;
            margin-bottom: 12px;
            font-weight: bold;
        }
    </style>
</head>

<body>
    <h1>Configurações da Conta</h1>

    @if(session('success'))
    <div style="color: green;">{{ session('success') }}</div>
    @endif

    <form method="POST" action="{{ route('config.update') }}">
        @csrf
        @method('PUT')

        <div>
            <label for="name">Nome:</label>
            <input type="text" name="name" id="name" value="{{ old('name', $user->name) }}" required>
        </div>

        <div>
            <label for="email">E-mail:</label>
            <input type="email" name="email" id="email" value="{{ old('email', $user->email) }}" required>
        </div>

        <div>
            <label for="password">Nova Senha (opcional):</label>
            <input type="password" name="password" id="password">
        </div>

        <div>
            <label for="password_confirmation">Confirme a Nova Senha:</label>
            <input type="password" name="password_confirmation" id="password_confirmation">
        </div>

        <button type="submit">Salvar Alterações</button>
    </form>

    <form method="POST" action="{{ route('logout') }}">
        @csrf
        <button type="submit">Encerrar Sessão</button>
    </form>
</body>

</html>