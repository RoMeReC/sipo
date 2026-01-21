<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Profesion extends Model
{
    use HasFactory, Notifiable;
    protected $table = 'profesiones';
    protected $primaryKey = 'id_profesion';
    protected $fillable = [
        'profesion',
        'descripcion_profesion',
    ];
}
