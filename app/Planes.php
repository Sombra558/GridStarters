<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Planes extends Model
{
    protected $fillable = [
        'estado','precio','filas','columns','name','src',
    ];
}
