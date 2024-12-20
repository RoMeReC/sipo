<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Grado extends Model
{
    use HasFactory, Notifiable;
    protected $table = 'grados';
    protected $primaryKey = 'id_grado';
    protected $fillable = [
        'grado',
        'descripcion_grado',
    ];
}
