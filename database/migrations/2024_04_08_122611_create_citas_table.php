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
        Schema::create('citas', function (Blueprint $table) {
            $table->id();
            $table->string('motivo', 100);
            $table->timestamp('fecha');
            $table->string('duracion', 45);
            $table->decimal('costo');
            $table->unsignedBigInteger('doctor_id');
            $table->unsignedBigInteger('paciente_id');
            $table->unsignedBigInteger('historial_id');
            $table->timestamps();

            $table->foreign('doctor_id')->references('id')->on('doctores')->onDelete('cascade');
            $table->foreign('paciente_id')->references('id')->on('pacientes')->onDelete('cascade');
            $table->foreign('historial_id')->references('id')->on('historiales')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('citas');
    }
};
