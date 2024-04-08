<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;


class CentroMedico extends Model
{
    use HasFactory;

    protected $table = 'centros_medicos';

    public function doctores(): HasMany {
        return $this->hasMany(Doctor::class);
    }

    public function recetas(): HasMany {
        return $this->hasMany(Receta::class);
    }

    protected $fillable = [
        'nombre',
        'celular',
        'direccion',
        'correo',
    ];
}
