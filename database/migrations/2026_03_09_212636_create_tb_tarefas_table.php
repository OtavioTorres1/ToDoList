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
        Schema::create('tb_tarefas', function (Blueprint $table) {
            $table->id();
            $table->string('tituloTarefas');
            $table->string('descTarefas');
            $table->string('statusTarefas');
            $table->string('prioridadeTarefas');
            $table->string('prazoTarefas');
            $table->foreignId('tb_usuario_id')->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_tarefas');
    }
};
