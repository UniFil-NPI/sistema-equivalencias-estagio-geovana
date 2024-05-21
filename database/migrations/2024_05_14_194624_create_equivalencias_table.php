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
        Schema::create('equivalencias', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_disciplina');
            $table->unsignedBigInteger('id_disciplina_equivalente');
            $table->text('observacao');
            $table->timestamps();
        });

        Schema::table('equivalencias', function (Blueprint $table) {
            $table->foreign('id_disciplina')->references('id')->on('disciplinas');
            $table->foreign('id_disciplina_equivalente')->references('id')->on('disciplinas');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('equivalencias');
    }
};
