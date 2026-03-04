<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void // para criar as colunas -> nao se preocupar com o down(), pq utilizaremos mais o up
    {
        Schema::create('jogos', function (Blueprint $table) {
            $table->id();
            $table->string('Nome', 55);
            $table->string('Categoria', 55);
            $table->year('ano_criacao');
            $table->double('valor',8,2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void //para reverter
    {
        Schema::dropIfExists('jogos');
    }
};
