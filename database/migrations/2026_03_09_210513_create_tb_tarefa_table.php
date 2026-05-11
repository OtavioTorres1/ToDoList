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
        Schema::create('tb_tarefa', function (Blueprint $table) {
            $table->id();
            $table->string('tituloTarefa');
            $table->string('descTarefa');
            $table->string('statusTarefa');
            $table->string('prioridadeTarefa');
            $table->string('prazoTarefa');
            $table->foreignId('tb_usuario_id')->constrained('tb_usuario');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_tarefa');
    }
};
