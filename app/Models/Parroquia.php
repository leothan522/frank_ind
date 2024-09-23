<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Parroquia extends Model
{
    use HasFactory;
    protected $table = "parroquias";
    protected $fillable = ['id', 'municipios_id', 'nombre', 'rowquid'];

    public function municipio(): BelongsTo
    {
        return $this->belongsTo(Municipio::class, 'municipios_id', 'id');
    }

    public function promotores(): HasMany
    {
        return $this->hasMany(Localizacion::class, 'parroquias_id', 'id');
    }

}
