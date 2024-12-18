<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;


class Servidor extends Model
{
    use HasFactory, Notifiable;
    protected $primaryKey = 'id_servidor';
    protected $fillable = [
        'persona_id',
        'grado_id',
        'especialidad_id',
        'uudd_id',
    ];
}
