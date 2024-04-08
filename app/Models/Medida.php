<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Medida extends Model
{
    use HasFactory;

    protected $table = "medidas";

    public function historial(): BelongsTo {
        return $this->belongsTo(Historial::class);
    }

    protected $fillable = [
        'altura',
        'peso',
        'fecha',
        'historial_id',
    ];
}
