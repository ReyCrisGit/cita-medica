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
        Schema::create('doctores', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 100);
            $table->string('correo', 100);
            $table->string('contrasenia', 45);
            $table->string('foto', 45)->nullable();
            $table->unsignedBigInteger('centro_medico_id');
            $table->timestamps();

            $table->foreign('centro_medico_id')->references('id')->on('centros_medicos')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('doctores');
    }
};
