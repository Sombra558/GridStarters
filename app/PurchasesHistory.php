<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PurchasesHistory extends Model
{
    protected $fillable = [
        'user_id','transaction_id','payment_method','amount','descripcion',
    ];
    public function user(){
        return $this->belongsTo('App\User');
    }
}
