<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Cita extends Model
{
    use HasFactory;

    protected $table = "citas";

    public function historia(): BelongsTo {
        return $this->belongsTo(Historial::class);
    }

    public function doctor(): BelongsTo {
        return $this->belongsTo(Doctor::class);
    }

    public function paciente(): BelongsTo {
        return $this->belongsTo(Paciente::class);
    }

    public function consultorio(): BelongsTo {
        return $this->belongsTo(Consultorio::class);
    }

    protected $fillable = [
        'motivo',
        'fecha',
        'duracion',
        'costo',
    ];

}
