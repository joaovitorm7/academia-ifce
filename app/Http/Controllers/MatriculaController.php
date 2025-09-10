<?php

namespace App\Http\Controllers;

use App\Models\Matricula;
use Illuminate\Http\Request;

class MatriculaController extends Controller
{

    public function index()
    {
        $matriculas = Matricula::latest()->get();
        return view('matriculas.index', compact('matriculas'));
    }

    public function create()
    {
        return view('matriculas.create');
    }

    public function store(Request $request)
    {
        // Validação dos campos
        $validated = $request->validate([
            'peso' => 'required|numeric|min:1',
            'altura' => 'required|numeric|min:1',
            'circunferencia_cintura' => 'nullable|numeric|min:1',
            'circunferencia_quadril' => 'nullable|numeric|min:1',
            'nivel_atividade' => 'required|in:sedentario,leve,moderado,intenso',
            'historico_saude' => 'nullable|string',
            'modalidade' => 'required|in:musculacao,funcional,ginastica,crossfit,yoga',
            'horario' => 'required|in:manha,tarde,noite',
            'observacoes' => 'nullable|string',

            'termos' => 'accepted',
        ]);

        Matricula::create([
            'peso' => $validated['peso'],
            'altura' => $validated['altura'],
            'circunferencia_cintura' => $validated['circunferencia_cintura'] ?? null,
            'circunferencia_quadril' => $validated['circunferencia_quadril'] ?? null,
            'nivel_atividade' => $validated['nivel_atividade'],
            'historico_saude' => $validated['historico_saude'] ?? null,
            'modalidade' => $validated['modalidade'],
            'horario' => $validated['horario'],
            'observacoes' => $validated['observacoes'] ?? null,
            'termos' => true,
        ]);

        return redirect()->route('matriculas.index')
                         ->with('success', 'Matrícula realizada com sucesso!');
    }
}
