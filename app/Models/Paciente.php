<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Paciente extends Model
{
    use HasFactory;

    protected $table = "pacientes";

    public function seguros(): HasMany {
        return $this->hasMany(Seguro::class);
    }

    public function historiales(): HasMany {
        return $this->hasMany(Historial::class);
    }

    public function citas(): HasMany {
        return $this->hasMany(Cita::class);
    }

    public function recetas(): BelongsToMany {
        return $this->belongsToMany(Receta::class);
    }

    protected $fillable = [
        'nombre',
        'ci',
        'celular',
        'sexo',
        'nacimiento',
        'profesion',
        'observaciones',
        'procedencia',
        'estado_civil',
        'peso',
        'altura',
        'direccion',
        'grupo_sanguinedo',
    ];
}
