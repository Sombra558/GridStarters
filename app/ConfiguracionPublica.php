<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ConfiguracionPublica extends Model
{
    protected $fillable = [
        'nombre', 'value',
    ];
}
