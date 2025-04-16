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
        Schema::create('optimization_reports', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_usuario')->unique();
            $table->foreign('id_usuario')
                ->references('id')
                ->on('users');
            $table->timestamp('fecha');
            $table->decimal('impacto_limpieza');
            $table->text('detalles');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('optimization_reports');
    }
};
