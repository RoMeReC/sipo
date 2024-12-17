<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Avatar extends Model
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'id_persona',
        'nombres',
        'primer_apellido',
        'segundo_apellido',
        'carnet_identidad',
        'fecha_nacimiento',
        'telefono',
        'condicion_id',
        'genero_id',
        'usuario_id',
        'municipio_id',
    ];
}
