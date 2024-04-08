<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class SignoVital extends Model
{
    use HasFactory;

    protected $table = "signos_vitales";

    public function historial(): BelongsTo {
        return $this->belongsTo(Historial::class);
    }

    protected $fillabe = [
        'temperatura',
        'presion_arterial',
        'frecuencia_respiratoria',
        'frecuencia_cardiaca',
        'historial_id',
    ];
}
