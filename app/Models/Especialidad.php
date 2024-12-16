<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Especialidad extends Model
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'id_especialidad',
        'especialidad',
        'descripcion_especialidad',
    ];
}
