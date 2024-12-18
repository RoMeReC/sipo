<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Departamento extends Model
{
    use HasFactory, Notifiable;
    protected $primaryKey = 'id_departamento';
    protected $fillable = [
        'departamento',
        'descripcion_departamento',
    ];
}
