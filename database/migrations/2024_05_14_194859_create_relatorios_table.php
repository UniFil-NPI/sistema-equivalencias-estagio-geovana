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
        Schema::create('relatorios', function (Blueprint $table) {
            $table->id();
            $table->string('observacao');
            $table->string('link_caminho');
            $table->unsignedBigInteger('id_aluno');
            $table->timestamps();
        });

        Schema::table('relatorios', function (Blueprint $table) {
            $table->foreign('id_aluno')->references('id')->on('alunos');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('relatorios');
    }
};
