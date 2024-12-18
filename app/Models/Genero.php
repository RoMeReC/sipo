<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Genero extends Model
{
    use HasFactory, Notifiable;
    protected $primaryKey = 'id_genero';
    protected $fillable = [
        'genero',
        'descripcion_genero',
    ];
}
