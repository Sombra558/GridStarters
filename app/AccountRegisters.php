<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AccountRegisters extends Model
{
    protected $fillable = [
        'user_banks_id','transaction_id','payment_method','amount',
    ];

   
}
