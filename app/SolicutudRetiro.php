<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SolicutudRetiro extends Model
{
    protected $fillable = [
        'img_deposito','numero_de_comprobante','estado','amount','user_banks_id','email',
    ];
    public function bank(){
        return $this->belongsTo('App\UserBank','user_banks_id');
      }
}
