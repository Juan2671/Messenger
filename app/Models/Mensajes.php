<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mensajes extends Model
{
    use HasFactory;

    protected $table='mensajes';
    protected $casts = [
        'written_by_me' => 'boolean'
    ];
}
