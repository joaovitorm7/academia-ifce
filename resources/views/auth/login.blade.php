@extends('layouts.app')

@section('content')
<div class="login-wrapper">
    <div class="login-card">
        <h1>Entrar</h1>

        @if ($errors->any())
            <div class="alert-error">
                @foreach ($errors->all() as $error)
                    <p>{{ $error }}</p>
                @endforeach
            </div>
        @endif

        <form method="POST" action="{{ route('login.post') }}" class="login-form">
            @csrf

            <label for="email">E-mail</label>
            <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus placeholder="seuemail@ifce.edu.br">

            <label for="password">Senha</label>
            <input id="password" type="password" name="password" required placeholder="••••••••">

            <div class="login-actions">
                <label class="remember">
                    <input type="checkbox" name="remember"> Manter conectado
                </label>
                <button type="submit">Entrar</button>
            </div>
        </form>

        <p class="hint">Use <strong>admin@ifce.test</strong> / <strong>senha123</strong> (do seeder) para testar.</p>
    </div>
</div>
@endsection
