<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;


class Condicion extends Model
{
    use HasFactory, Notifiable;
    protected $primaryKey = 'id_condicion';
    protected $fillable = [
        'condicion',
    ];
}
