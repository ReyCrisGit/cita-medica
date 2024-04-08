<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Medicamento extends Model
{
    use HasFactory;

    protected $table = "medicamentos";

    public function recetas(): BelongsToMany {
        return $this->belongsToMany(Receta::class);
    }

    protected $fillable = [
        'nombre',
        'descripcion',
        'concentrado',
        'precio',
    ];
}
