@extends('layouts.app')

@section('content')
<style>
    body {
        background: #f0f2f5;
    }

    /* Centralizar o card */
    .center-wrapper {
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh; /* centro exato da tela */
    }
 
    .form-card {
        width: 100%;
        max-width: 600px;
        background: #fff;
        padding: 25px 30px;
        border-radius: 12px;
        box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.1);
    }

    .form-card h2 {
        text-align: center;
        margin-bottom: 25px;
        font-weight: bold;
        color: #333;
    }

    .form-card h4 {
        text-align: center;
        margin: 20px 0 15px 0;
        font-weight: bold;
        color: #444;
    }

    .form-card label {
        font-weight: 600;
        margin-top: 12px;
        display: block;
    }

    .form-card input,
    .form-card select,
    .form-card textarea {
        width: 100%;
        padding: 10px;
        margin-top: 6px;
        border-radius: 6px;
        border: 1px solid #ccc;
        background: #fafafa;
    }

    .form-card textarea {
        min-height: 80px;
        resize: vertical;
    }

    .form-card button {
        margin-top: 20px;
        width: 100%;
        padding: 12px;
        background: #007bff;
        color: #fff;
        border: none;
        border-radius: 6px;
        font-size: 16px;
        font-weight: bold;
        cursor: pointer;
        transition: 0.3s;
    }

    .form-card button:hover {
        background: #0056b3;
    }

    .form-card small {
        color: red;
    }

    /* Radios alinhados lado a lado */
    .radio-group {
        display: flex;
        gap: 20px;
        margin-top: 8px;
    }

    .radio-group label {
        font-weight: normal;
        display: flex;
        align-items: center;
        gap: 6px;
        margin: 0;
    }
</style>

<div class="center-wrapper">
    <div class="form-card">
        <h2>Matrícula - Academia IFCE</h2>

        @if(session('success'))
            <div style="color: green; margin-bottom: 15px;">
                {{ session('success') }}
            </div>
        @endif

        <form method="POST" action="{{ route('matriculas.store') }}" id="registrationForm" onsubmit="return confirmarMatricula()">
            @csrf

            <!-- Características Físicas -->
            <h4>Características Físicas</h4>

            <label for="nome">Nome *</label>
            <input type="text" name="nome" value="{{ old('nome') }}" step="0.1" required>
            @error('nome') <small>{{ $message }}</small> @enderror

            <label for="peso">Peso (kg) *</label>
            <input type="number" name="peso" value="{{ old('peso') }}" step="0.1" required>
            @error('peso') <small>{{ $message }}</small> @enderror

            <label for="altura">Altura (cm) *</label>
            <input type="number" name="altura" value="{{ old('altura') }}" required>
            @error('altura') <small>{{ $message }}</small> @enderror

            <label for="circunferencia_cintura">Circunferência da Cintura (cm)</label>
            <input type="number" name="circunferencia_cintura" value="{{ old('circunferencia_cintura') }}">

            <label for="circunferencia_quadril">Circunferência do Quadril (cm)</label>
            <input type="number" name="circunferencia_quadril" value="{{ old('circunferencia_quadril') }}">

            <label>Nível de Atividade Física *</label>
            <div class="radio-group">
                <label><input type="radio" name="nivel_atividade" value="sedentario" {{ old('nivel_atividade')=='sedentario'?'checked':'' }}> Sedentário</label>
                <label><input type="radio" name="nivel_atividade" value="leve" {{ old('nivel_atividade')=='leve'?'checked':'' }}> Leve</label>
                <label><input type="radio" name="nivel_atividade" value="moderado" {{ old('nivel_atividade')=='moderado'?'checked':'' }}> Moderado</label>
                <label><input type="radio" name="nivel_atividade" value="intenso" {{ old('nivel_atividade')=='intenso'?'checked':'' }}> Intenso</label>
            </div>
            @error('nivel_atividade') <small>{{ $message }}</small> @enderror

            <label for="historico_saude">Histórico de Saúde</label>
            <textarea name="historico_saude">{{ old('historico_saude') }}</textarea>

            <!-- Preferências -->
            <h4>Preferências de Treino</h4>

            <label for="modalidade">Modalidade Preferida *</label>
            <select name="modalidade" required>
                <option value="" disabled {{ old('modalidade') ? '' : 'selected' }}>Selecione</option>
                <option value="musculacao" {{ old('modalidade')=='musculacao'?'selected':'' }}>Musculação</option>
                <option value="funcional" {{ old('modalidade')=='funcional'?'selected':'' }}>Treino Funcional</option>
                <option value="ginastica" {{ old('modalidade')=='ginastica'?'selected':'' }}>Ginástica</option>
                <option value="crossfit" {{ old('modalidade')=='crossfit'?'selected':'' }}>CrossFit</option>
                <option value="yoga" {{ old('modalidade')=='yoga'?'selected':'' }}>Yoga/Pilates</option>
            </select>
            @error('modalidade') <small>{{ $message }}</small> @enderror

            <label for="horario">Horário Preferencial *</label>
            <select name="horario" required>
                <option value="" disabled {{ old('horario') ? '' : 'selected' }}>Selecione</option>
                <option value="manha" {{ old('horario')=='manha'?'selected':'' }}>Manhã (6h às 12h)</option>
                <option value="tarde" {{ old('horario')=='tarde'?'selected':'' }}>Tarde (12h às 18h)</option>
                <option value="noite" {{ old('horario')=='noite'?'selected':'' }}>Noite (18h às 22h)</option>
            </select>
            @error('horario') <small>{{ $message }}</small> @enderror

            <label for="observacoes">Observações ou Metas</label>
            <textarea name="observacoes">{{ old('observacoes') }}</textarea>

            <!-- Termos -->
            <label style="margin-top: 15px;">
                <input type="checkbox" name="termos" required {{ old('termos') ? 'checked' : '' }}>
                Concordo com os termos e condições.
            </label>
            @error('termos') <small>{{ $message }}</small> @enderror

            <button type="submit">Finalizar Matrícula</button>
        </form>
    </div>
</div>

<script>
function confirmarMatricula() {
    return confirm("Tem certeza que deseja finalizar a matrícula?");
}
</script>
@endsection
