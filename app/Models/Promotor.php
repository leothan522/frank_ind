<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Promotor extends Model
{
    use HasFactory;
    protected $table = "promotores";
    protected $fillable = [
        'cedula',
        'nombres',
        'apellidos',
        'nacimiento',
        'sexo',
        'telefono_1',
        'telefono_2',
        'estado_civil',
        'nivel_academico',
        'profesional',
        'facebook',
        'instagram',
        'pagina_web',
        'users_id',
        'rowquid'
    ];

    public function scopeBuscar($query, $keyword)
    {
        return $query->where('cedula', 'LIKE', "%$keyword%")
            ->orWhere('nombres', 'LIKE', "%$keyword%")
            ->orWhere('apellidos', 'LIKE', "%$keyword%")
            ;
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'users_id', 'id');
    }

}
