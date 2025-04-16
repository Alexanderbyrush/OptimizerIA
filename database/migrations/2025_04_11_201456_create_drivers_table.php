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
        Schema::create('drivers', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_usuario')->unique();
            $table->foreign('id_usuario')
                ->references('id')
                ->on('users');
            $table->string('nombre');
            $table->string('version');
            $table->timestamp('fecha_instalacion');
            $table->enum('estado', ['Actualizado', 'Obsoleto'])->default('actualizado');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('drivers');
    }
};
