<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class TipoHistorial extends Model
{
    use HasFactory;

    protected $table = "tipos_historiales";

    public function historiales(): HasMany {
        return $this->hasMany(Historial::class);
    }

    protected $fillable = [
        'nombre',
        'descripcion',
    ];
}
