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
        Schema::create('aluno__grades', function (Blueprint $table) {
            $table->unsignedBigInteger('id_grade');
            $table->unsignedBigInteger('id_aluno');
        });

        Schema::table('aluno__grades', function (Blueprint $table) {
            $table->foreign('id_grade')->references('id')->on('grades');
            $table->foreign('id_aluno')->references('id')->on('alunos');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('aluno__grades');
    }
};
