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
        Schema::create('recetas', function (Blueprint $table) {
            $table->id();
            $table->timestamp('fecha');
            $table->string('nombre', 100);
            $table->string('cantidad', 100);
            $table->decimal('costo');
            $table->unsignedBigInteger('doctor_id');
            $table->unsignedBigInteger('centro_medico_id');
            $table->timestamps();

            $table->foreign('doctor_id')->references('id')->on('doctores')->onDelete('cascade');
            $table->foreign('centro_medico_id')->references('id')->on('centros_medicos')->onDelete('cascade');
            $table->foreign('medicamento_id')->references('id')->on('medicamentos')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('recetas');
    }
};
