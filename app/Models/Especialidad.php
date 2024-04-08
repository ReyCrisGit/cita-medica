<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Especialidad extends Model
{
    use HasFactory;

    protected $table = "especialidades";

    public function doctores(): BelongsToMany {
        return $this->belongsToMany(Doctor::class);
    }

    protected $fillable = [
        'nombre',
    ];
}
