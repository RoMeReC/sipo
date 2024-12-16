<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;


class Condicion extends Model
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'id_condicion',
        'condicion',
    ];
}
