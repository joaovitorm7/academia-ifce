@extends('layouts.app')

@section('content')
<div class="dash-header">
    <div class="dash-title">
        @if($academia?->logo_path)
            <img src="{{ asset($academia->logo_path) }}" alt="Logo IFCE" class="logo-ifce">
        @endif
        <div>
            <h1>{{ $academia->nome ?? 'Academia IFCE' }}</h1>
            @if($academia?->unidade)
                <p class="subtitle">Unidade: {{ $academia->unidade }}</p>
            @endif
        </div>
    </div>
</div>


<div class="dash-sobre">
    <div class="sobre-conteudo">
        <div class="sobre-textos">
            <h2 class="title-academia">Sobre a Academia do IFCE</h2>
            <p class="texto-academia">Academia do IFCE Cedro foi fundada em 2023, tem o intuito de promover a prática esportiva e o bem-estar da comunidade. É livre para todos os estudantes, que precisam somente reservar um horário para utilizar as instalações. Aqui você encontrará um ambiente acolhedor e motivador para suas atividades físicas.</p>
        </div>
        <img src="{{ asset('foto-academia.jpg') }}" alt="Imagem ficticia da academia IFCE - Cedro" class="imagem-academia">
    </div>
</div>


<div class="grid">
    <!--
    <section class="card">
        <h2>Sobre</h2>
        <p>{{ $academia->descricao ?? 'Informações ainda não cadastradas.' }}</p>
    </section>
    -->
    <section class="card">
        <h2>Contato</h2>
        <ul class="list">
            @if($academia?->email)<li><strong>E-mail:</strong> {{ $academia->email }}</li>@endif
            @if($academia?->telefone)<li><strong>Telefone:</strong> {{ $academia->telefone }}</li>@endif
            @if($academia?->endereco)<li><strong>Endereço:</strong> {{ $academia->endereco }}</li>@endif
            @if($academia?->cnpj)<li><strong>CNPJ:</strong> {{ $academia->cnpj }}</li>@endif
        </ul>
        <div class="links">
            @if($academia?->site_url)<a href="{{ $academia->site_url }}" target="_blank" rel="noopener">Site</a>@endif
            @if($academia?->instagram_url)<a href="{{ $academia->instagram_url }}" target="_blank" rel="noopener">Instagram</a>@endif
        </div>
    </section>

    <section class="card">
        <h2>Horário de Funcionamento</h2>
        <p>{{ $academia->horario_funcionamento ?? '—' }}</p>
        <button class="btn-card">
            <a href="">Reservar Horário</a>
        </button>
    </section>

    <section class="card">
        <h2>Modalidades</h2>
        <div class="badges">
            @foreach(($academia->modalidades ?? []) as $m)
                <span class="badge">{{ $m }}</span>
            @endforeach
            @if(empty($academia?->modalidades))
                <p>—</p>
            @endif
        </div>
        <button class="btn-card"><a href="#">Saber mais</a></button>
    </section>
</div>
 <!-- Logout Section -->
    <section class="encerrar-sessao">
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="btn-sessao">Encerrar Sessão</button>
        </form>
    </section>
@endsection
