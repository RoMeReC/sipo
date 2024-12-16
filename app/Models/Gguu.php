<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Gguu extends Model
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'id_gguu',
        'gguu',
        'descripcion_gguu',
    ];
}
