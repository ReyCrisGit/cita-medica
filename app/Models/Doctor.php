<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Doctor extends Model
{
    use HasFactory;

    protected $table = "doctores";

    public function historiales(): HasMany {
        return $this->hasMany(Historial::class);
    }

    public function citas(): HasMany {
        return $this->hasMany(Cita::class);
    }

    public function recetas(): HasMany {
        return $this->hasMany(Receta::class);
    }

    public function centroMedico(): BelongsTo {
        return $this->belongsTo(CentroMedico::class);
    }

    public function especialidades(): BelongsToMany {
        return $this->belongsToMany(Especialidad::class);
    }

    protected $fillable = [
        'nombre',
        'correo',
        'contrasenia',
        'foto',
        'centro_medico_id',
    ];
}
