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
        Schema::create('pacientes', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 100);
            $table->string('ci', 45);
            $table->string('celular', 15);
            $table->string('sexo', 45);
            $table->date('nacimiento');
            $table->string('profesion', 100);
            $table->string('observaciones', 100)->nullable();
            $table->string('procedencia', 100);
            $table->string('estado_civil', 45);
            $table->string('peso', 10);
            $table->string('altura', 10);
            $table->string('direccion', 100);
            $table->string('grupo_sanguineo', 45);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pacientes');
    }
};
