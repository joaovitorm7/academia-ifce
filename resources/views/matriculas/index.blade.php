@extends('layouts.app')

@section('content')
<div class="container">

    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show mt-3" role="alert" style="max-width: 500px;">
            <strong><i class="bi bi-check-circle-fill"></i> Sucesso!</strong> {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Fechar"></button>
        </div>
    @endif

    <a href="{{ route('matriculas.create') }}" class="btn btn-primary mb-3 mt-3">Nova Matrícula</a>

    <table class="table">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Peso</th>
                <th>Altura</th>
                <th>Modalidade</th>
                <th>Horário</th>

            </tr>
        </thead>
        <tbody>
            @forelse($matriculas as $matricula)
                <tr>
                    <td>{{ $matricula->nome }}</td>
                    <td>{{ $matricula->peso }} kg</td>
                    <td>{{ $matricula->altura }} cm</td>
                    <td>{{ ucfirst($matricula->modalidade) }}</td>
                    <td>{{ ucfirst($matricula->horario) }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="6">Nenhuma matrícula encontrada</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection


<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
