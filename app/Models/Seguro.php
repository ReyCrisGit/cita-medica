<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Seguro extends Model
{
    use HasFactory;

    protected $table = "seguros";

    public function paciente(): BelongsTo {
        return $this->belongsTo(Paciente::class);
    }

    protected $fillabe = [
        'nombre',
        'paciente_id',
    ];
}
