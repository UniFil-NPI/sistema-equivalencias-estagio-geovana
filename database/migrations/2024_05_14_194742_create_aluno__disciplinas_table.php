<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('aluno__disciplinas', function (Blueprint $table) {
            $table->unsignedBigInteger('id_aluno');
            $table->unsignedBigInteger('id_disciplina');
            $table->float('nota_final');
        });

        Schema::table('aluno__disciplinas', function (Blueprint $table) {
            $table->foreign('id_aluno')->references('id')->on('alunos');
            $table->foreign('id_disciplina')->references('id')->on('disciplinas');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('aluno__disciplinas');
    }
};
