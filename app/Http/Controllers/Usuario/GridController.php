<?php

namespace App\Http\Controllers\Usuario;

use App\Http\Controllers\Controller;
use App\Grip;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

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
        return $evento;
    }
}
