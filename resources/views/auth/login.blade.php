@extends('layouts.guest')

@section('title','Login')

@section('content')
<div class="logo-container">
    <img src="{{ asset('Campus_cedro.png') }}" alt="Imagem da logo do IFCE Campus Cedro" class="logo-ifce">
</div>
<div class="login-card">
    <h1>Sistema de Academia</h1>
    <h1>Login</h1>

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
        <input id="email" type="email" name="email" required autofocus>

        <label for="password">Senha</label>
        <input id="password" type="password" name="password" required>

        <div class="remember">
            <input type="checkbox" id="remember" name="remember">
            <label for="remember">Lembrar-me</label>
        </div>

        <button type="submit">Entrar</button>
    </form>

    <p class="auth-footer">Não tem conta? <a href="{{ route('register') }}">Registrar-se</a></p>
</div>
@endsection