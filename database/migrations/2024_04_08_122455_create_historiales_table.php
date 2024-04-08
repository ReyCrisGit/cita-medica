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
        Schema::create('historiales', function (Blueprint $table) {
            $table->id();
            $table->string('enfermedad_actual', 100);
            $table->text('examen_fisico_general');
            $table->string('fuerza', 100);
            $table->timestamp('fecha')->useCurrent();
            $table->timestamp('fecha_creacion')->useCurrent();
            $table->unsignedBigInteger('tipo_historial_id');
            $table->unsignedBigInteger('paciente_id');
            $table->unsignedBigInteger('doctor_id');
            $table->timestamps();

            $table->foreign('tipo_historial_id')->references('id')->on('tipos_historiales')->onDelete('cascade');
            $table->foreign('paciente_id')->references('id')->on('pacientes')->onDelete('cascade');
            $table->foreign('doctor_id')->references('id')->on('doctores')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('historiales');
    }
};
