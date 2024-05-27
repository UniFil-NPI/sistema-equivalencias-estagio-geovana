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
        Schema::create('grade__disciplinas', function (Blueprint $table) {
            $table->unsignedBigInteger('id_grade');
            $table->unsignedBigInteger('id_disciplina');
        });

        Schema::table('grade__disciplinas', function (Blueprint $table) {
            $table->foreign('id_grade')->references('id')->on('grades');
            $table->foreign('id_disciplina')->references('id')->on('disciplinas');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('grade__disciplinas');
    }
};
