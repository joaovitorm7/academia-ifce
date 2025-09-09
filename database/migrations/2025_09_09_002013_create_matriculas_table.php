<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('matriculas', function (Blueprint $table) {
            $table->id();

            // Características físicas
            $table->decimal('peso', 5, 2); // até 999.99 kg
            $table->integer('altura'); // em cm
            $table->integer('circunferencia_cintura')->nullable();
            $table->integer('circunferencia_quadril')->nullable();
            $table->enum('nivel_atividade', ['sedentario', 'leve', 'moderado', 'intenso']);
            $table->text('historico_saude')->nullable();

            // Preferências
            $table->enum('modalidade', ['musculacao', 'funcional', 'ginastica', 'crossfit', 'yoga']);
            $table->enum('horario', ['manha', 'tarde', 'noite']);
            $table->text('observacoes')->nullable();

            // Aceite dos termos
            $table->boolean('termos')->default(false);

            $table->timestamps();
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('matriculas');
    }
};
