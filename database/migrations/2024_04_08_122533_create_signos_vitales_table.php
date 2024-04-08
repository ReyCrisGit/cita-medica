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
        Schema::create('signos_vitales', function (Blueprint $table) {
            $table->id();
            $table->string('temperatura', 45);
            $table->string('presion_arterial', 45);
            $table->string('frecuencia_respiratoria', 45);
            $table->string('frecuencia_cardiaca', 45);
            $table->unsignedBigInteger('historial_id');
            $table->timestamps();

            $table->foreign('historial_id')->references('id')->on('historiales')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('signos_vitales');
    }
};
