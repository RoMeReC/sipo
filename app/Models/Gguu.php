<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Gguu extends Model
{
    use HasFactory, Notifiable;
    protected $table = 'gguus';
    
    protected $primaryKey = 'id_gguu';
    protected $fillable = [
        'gguu',
        'descripcion_gguu',
    ];
}
