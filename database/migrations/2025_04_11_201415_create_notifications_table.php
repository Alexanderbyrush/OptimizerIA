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
        Schema::create('notifications', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_usuario')->unique();
            $table->foreign('id_usuario')
                ->references('id')
                ->on('users');
            $table->string('tipo');
            $table->text('mensaje');
            $table->timestamp('fecha');
            $table->enum('estado', ['Pendiente', 'Leida'])->default('pendiente');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('notifications');
    }
};
