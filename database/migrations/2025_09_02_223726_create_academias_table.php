<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('academias', function (Blueprint $table) {
            $table->id();
            $table->string('nome'); // Ex.: "Academia IFCE - Campus Fortaleza"
            $table->string('unidade')->nullable(); // Ex.: "Fortaleza"
            $table->string('cnpj')->nullable();
            $table->string('email')->nullable();
            $table->string('telefone')->nullable();
            $table->string('endereco')->nullable();
            $table->text('descricao')->nullable();
            $table->json('modalidades')->nullable(); // Ex.: ["Musculação","Natação","Pilates"]
            $table->string('horario_funcionamento')->nullable(); // Ex.: "Seg-Sex 06:00-22:00 | Sáb 08:00-14:00"
            $table->string('site_url')->nullable();
            $table->string('instagram_url')->nullable();
            $table->string('logo_path')->nullable(); // Ex.: "storage/logos/ifce.png"
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('academias');
    }
};
