<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Evento extends Model
{
    use HasFactory;
    public function categoria(): BelongsTo
    {
        return $this->belongsTo(Categoria::class);
    }
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
    public function inscripcion(): BelongsToMany
    {
        return $this->belongsToMany(User::class, 'inscripcions')->withPivot(['numero_entrada', 'estado']);
    }
}
