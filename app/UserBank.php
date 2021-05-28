<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserBank extends Model
{
    protected $fillable = [
        'user_id','available','withdrawn',
    ];
    public function user(){
        return $this->belongsTo('App\User');
      }
      public function registros(){
        return $this->hasMany('App\AccountRegisters','user_banks_id');
      }
      public function retiros(){
        return $this->hasMany('App\SolicutudRetiro','user_banks_id');
      }
}
