<?php

namespace Database\Seeders;

use App\Models\Academia;
use Illuminate\Database\Seeder;

class AcademiaSeeder extends Seeder
{
    public function run(): void
    {
        Academia::updateOrCreate(
            ['nome' => 'Academia IFCE - Campus Cedro'],
            [
                'unidade' => 'Cedro',
                'cnpj' => '00.000.000/0000-00',
                'email' => 'academia.cedro@ifce.edu.br',
                'telefone' => '(85) 3333-0000',
                'endereco' => 'Av. Treze de Maio, 2081 - Benfica, Cedro - CE',
                'descricao' => 'Espaço de promoção à saúde e bem-estar para a comunidade acadêmica e servidores.',
                'modalidades' => ['Musculação', 'Funcional', 'Ginástica', 'Pilates'],
                'horario_funcionamento' => 'Seg-Sex 06:00–22:00 | Sáb 08:00–14:00',
                'site_url' => 'https://ifce.edu.br',
                'instagram_url' => 'https://instagram.com/ifceoficial',
                'logo_path' => null,
            ]
        );
    }
}
