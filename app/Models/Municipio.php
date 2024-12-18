<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Municipio extends Model
{
    use HasFactory, Notifiable;
    protected $primaryKey = 'id_municipio';
    protected $fillable = [
        'municipio',
        'provincia_id'
    ];
}
