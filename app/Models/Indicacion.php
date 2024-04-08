<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Indicacion extends Model
{
    use HasFactory;

    protected $table = "indicaciones";

    public function receta(): BelongsTo {
        return $this->belongsTo(Receta::class);
    }
    
    protected $fillable = [
        'frecuencia',
        'tiempo_uso',
        'via_administracion',
        'receta_id',
    ];
}
