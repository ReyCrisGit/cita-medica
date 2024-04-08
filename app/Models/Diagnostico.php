<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Diagnostico extends Model
{
    use HasFactory;

    protected $table = "diagnosticos";

    public function historiales(): BelongsToMany {
        return $this->belongsToMany(Historial::class);
    }

    public function recetas(): BelongsToMany {
        return $this->belongsToMany(Receta::class);
    }

    protected $fillable = [
        'enfermedad',
        'tratamiento',
    ];
}
