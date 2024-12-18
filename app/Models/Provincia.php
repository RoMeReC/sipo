<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Provincia extends Model
{
    use HasFactory, Notifiable;
    protected $primaryKey = 'id_provincia';
    protected $fillable = [
        'provincia',
        'departamento_id',
    ];
}
