<?php

namespace App\Http\Controllers\Usuario;

use App\Http\Controllers\Controller;
use App\SolicutudRetiro;
use Illuminate\Http\Request;

class SolicitudRetiroControlle extends Controller
{
    public function store(Request $request)
    {
        $solicitud=SolicutudRetiro::create([
            'user_banks_id' =>$request['user_banks_id'],
            'amount' => $request['amount'],
            'email' => $request['email'],
            'estado' => 'pendiente',
        ]); 
        return $solicitud;
    }
}
