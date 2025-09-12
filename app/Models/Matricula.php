<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Matricula extends Model
{
        protected $fillable = [
        'nome',
        'peso',
        'altura',
        'circunferencia_cintura',
        'circunferencia_quadril',
        'nivel_atividade',
        'historico_saude',
        'objetivos',
        'modalidade',
        'horario',
        'observacoes',
        'termos',
    ];
}
