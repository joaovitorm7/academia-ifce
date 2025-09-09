@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Lista de Matrículas</h1>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <a href="{{ route('matriculas.create') }}" class="btn btn-primary mb-3">Nova Matrícula</a>

    <table class="table">
        <thead>
            <tr>
                <th>Peso</th>
                <th>Altura</th>
                <th>Nível Atividade</th>
                <th>Modalidade</th>
                <th>Horário</th>
                <th>Objetivos</th>
            </tr>
        </thead>
        <tbody>
            @forelse($matriculas as $matricula)
                <tr>
                    <td>{{ $matricula->peso }} kg</td>
                    <td>{{ $matricula->altura }} cm</td>
                    <td>{{ ucfirst($matricula->nivel_atividade) }}</td>
                    <td>{{ ucfirst($matricula->modalidade) }}</td>
                    <td>{{ ucfirst($matricula->horario) }}</td>
                    <td>{{ implode(', ', $matricula->objetivos) }}</td>
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
