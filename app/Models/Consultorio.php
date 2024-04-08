<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Consultorio extends Model
{
    use HasFactory;

    protected $table = "consultorios";

    public function citas(): HasMany {
        return $this->hasMany(Cita::class);
    }

    protected $fillable = [
        'nombre',
        'descripcion',
    ];
}
