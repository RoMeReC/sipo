<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Persona extends Model
{
    use HasFactory, Notifiable;
    protected $primaryKey = 'id_persona';
    protected $fillable = [
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
