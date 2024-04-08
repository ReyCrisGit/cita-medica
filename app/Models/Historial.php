<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Historial extends Model
{
    use HasFactory;

    protected $table = "historiales";

    public function citas(): HasMany {
        return $this->hasMany(Cita::class);
    }

    public function signosVitales(): HasMany {
        return $this->hasMany(SignoVital::class);
    }

    public function medidas(): HasMany {
        return $this->hasMany(Medida::class);
    }

    public function diagnosticos(): BelongsToMany {
        return $this->belongsToMany(Diagnostico::class);
    }

    public function tipoHistorial(): BelongsTo {
        return $this->belongsTo(TipoHistorial::class);
    }

    public function doctor(): BelongsTo {
        return $this->belongsTo(Doctor::class);
    }

    public function paciente(): BelongsTo {
        return $this->belongsTo(Paciente::class);
    }

    protected $fillable = [
        'enfermedad_actual',
        'examen_fisico_general',
        'fuerza',
        'fecha',
        'fecha_creacion',
        'tipo_historial_id',
        'paciente_id',
        'doctor_id',
    ];
}
