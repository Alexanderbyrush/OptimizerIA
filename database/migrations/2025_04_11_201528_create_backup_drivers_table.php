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
        Schema::create('backup_drivers', function (Blueprint $table) {
            $table->id();
            $table->timestamp('fecha');
            $table->unsignedBigInteger('id_usuario')->unique();
            $table->foreign('id_usuario')
                ->references('id')
                ->on('users');

            $table->unsignedBigInteger('id_driver')->unique();
            $table->foreign('id_driver')
                ->references('id')
                ->on('drivers');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('backup_drivers');
    }
};
