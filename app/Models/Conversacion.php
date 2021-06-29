<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Conversacion extends Model
{
    use HasFactory;

    protected $appends = ['contact_name'];

    public function getContactNameAttribute()
    {
        return $this->contacto()->first(['name'])->name;
    }

    public function contacto()
    {
        return $this->belongsTo(User::class);
    }
}
