<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bloque extends Model
{
    protected $fillable = [
        'img','codigo','matriz_id','fragmento','column','fila'
    ];
}
