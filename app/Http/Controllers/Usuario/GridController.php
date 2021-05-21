<?php

namespace App\Http\Controllers\Usuario;

use App\Http\Controllers\Controller;
use App\Grip;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\PurchasesHistory;

class GridController extends Controller
{
    public function store(Request $request)
    {
        $username=Auth::user()->name;
        $username=str_replace(' ','-',$username);
        $nombreURL='grid-'.$username;
        
        $evento= new Grip($request->all()); 
        $evento->nombreURL=strtolower($nombreURL);
        $evento->save();
        PurchasesHistory::create([
            'user_id' =>Auth::user()->id,
            'amount' => 250,
            'descripcion' =>  'Compra de Grilla',
        ]); 
        return $evento;
    }
}
