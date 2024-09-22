<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Municipio extends Model
{
    use HasFactory;
    protected $table = "municipios";
    protected $fillable = ['id', 'estados_id', 'nombre', 'rowquid'];

    public function estado(): BelongsTo
    {
        return $this->belongsTo(Estado::class, 'estados_id', 'id;');
    }

    public function parroquias(): HasMany
    {
        return $this->hasMany(Parroquia::class, 'municipios_id', 'id');
    }

}
