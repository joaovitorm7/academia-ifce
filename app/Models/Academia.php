<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Academia extends Model
{
    protected $fillable = [
        'nome','unidade','cnpj','email','telefone','endereco','descricao',
        'modalidades','horario_funcionamento','site_url','instagram_url','logo_path',
    ];

    protected $casts = [
        'modalidades' => 'array',
    ];
}
