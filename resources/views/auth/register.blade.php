@extends('layouts.guest')

@section('title','Registrar')

@section('content')
<div class="login-card">
    <h1>Registrar</h1>

    @if ($errors->any())
        <div class="alert-error">
            @foreach ($errors->all() as $error)
                <p>{{ $error }}</p>
            @endforeach
        </div>
    @endif

    <form method="POST" action="{{ route('register.post') }}" class="login-form">
        @csrf

        <label for="name">Nome</label>
        <input id="name" type="text" name="name" value="{{ old('name') }}" required autofocus>

        <label for="email">E-mail</label>
        <input id="email" type="email" name="email" value="{{ old('email') }}" required>

        <label for="password">Senha</label>
        <input id="password" type="password" name="password" required>

        <label for="password_confirmation">Confirmar Senha</label>
        <input id="password_confirmation" type="password" name="password_confirmation" required>

        <button type="submit">Criar Conta</button>
    </form>

    <p class="auth-footer">Já tem conta? <a href="{{ route('login') }}">Entrar</a></p>
</div>
@endsection
