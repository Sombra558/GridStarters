<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Grip extends Model
{
    protected $fillable = [
        'user_id','matriz','nombreURL','filas','columns',
    ];
    public function user(){
        return $this->belongsTo('App\User');
    }
    public function bloques(){
        return $this->hasMany('App\Bloque','matriz_id');
    }
}
