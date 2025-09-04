@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Configurações da Conta</h2>

    @if(session('success'))
        <div style="color: green; margin-bottom: 15px;">
            {{ session('success') }}
        </div>
    @endif

    <form method="POST" action="{{ route('config.update') }}" onsubmit="return confirmarAlteracao()">
        @csrf

        <div>
            <label for="name">Nome</label>
            <input type="text" name="name" value="{{ old('name', $user->name) }}" required>
            @error('name') <small style="color:red;">{{ $message }}</small> @enderror
        </div>

        <div>
            <label for="email">E-mail</label>
            <input type="email" name="email" value="{{ old('email', $user->email) }}" required>
            @error('email') <small style="color:red;">{{ $message }}</small> @enderror
        </div>

        <div>
            <label for="password">Nova Senha (opcional)</label>
            <input type="password" name="password">
        </div>

        <div>
            <label for="password_confirmation">Confirmar Senha</label>
            <input type="password" name="password_confirmation">
            @error('password') <small style="color:red;">{{ $message }}</small> @enderror
        </div>

        <button type="submit">Salvar Alterações</button>
    </form>

    <form method="POST" action="{{ route('logout') }}" style="margin-top:20px;" onsubmit="return confirmarLogout()">
        @csrf
        <button type="submit" style="color:red;">Encerrar Sessão</button>
    </form>
</div>

<script>
function confirmarAlteracao() {
    return confirm("Tem certeza que deseja alterar seus dados?");
}

function confirmarLogout() {
    return confirm("Deseja realmente encerrar a sessão?");
}
</script>