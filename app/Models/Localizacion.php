<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Localizacion extends Model
{
    use HasFactory;
    protected $table = 'promotores_localizacion';
    protected $fillable = [
        'estados_id',
        'municipios_id',
        'parroquias_id',
        'direccion',
        'acceso_internet',
        'dispositivo_electronico',
        'tipo_dispositivo',
        'users_id',
        'rowquid',
    ];

    public function scopeBuscar($query, $keyword)
    {
        return $query->where('direccion', 'LIKE', "%$keyword%")
            ;
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'users_id', 'id');
    }

}
