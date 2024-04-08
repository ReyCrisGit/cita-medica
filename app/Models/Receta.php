<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Receta extends Model
{
    use HasFactory;

    protected $table = "recetas";

    public function indicaciones(): HasMany {
        return $this->hasMany(Indicacion::class);
    }

    public function doctor(): BelongsTo {
        return $this->belongsTo(Doctor::class);
    }

    public function centroMedico(): BelongsTo {
        return $this->belongsTo(CentroMedico::class);
    }

    public function medicamentos(): BelongsToMany {
        return $this->belongsToMany(Medicamento::class);
    }

    public function diagnosticos(): BelongsToMany {
        return $this->belongsToMany(Diagnostico::class);
    }

    public function pacientes(): BelongsToMany {
        return $this->belongsToMany(Paciente::class);
    }

    protected $fillable = [
        'fecha',
        'nombre',
        'cantidad',
        'costo',
        'doctor_id',
        'centro_medico',
    ];
}
