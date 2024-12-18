<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Rol extends Model
{
    use HasFactory, Notifiable;
    protected $primaryKey = 'id_rol';
    protected $fillable = [
        'rol',
    ];
}
