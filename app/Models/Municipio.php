<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Municipio extends Model
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'id_municipio',
        'municipio',
        'provincia_id'
    ];
}
