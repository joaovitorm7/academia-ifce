@extends('layouts.app')

@section('content')
    <h1>Dashboard</h1>
    <p>Olá, {{ auth()->user()->name }}! Você está logado.</p>

    <form method="POST" action="{{ route('logout') }}" style="margin-top:16px;">
        @csrf
        <button type="submit">Sair</button>
    </form>
@endsection
