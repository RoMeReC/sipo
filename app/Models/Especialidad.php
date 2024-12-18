<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Especialidad extends Model
{
    use HasFactory, Notifiable;
    protected $primaryKey = 'id_especialidad';
    protected $fillable = [
        'especialidad',
        'descripcion_especialidad',
    ];
}
