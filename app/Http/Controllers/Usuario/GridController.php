<?php

namespace App\Http\Controllers\Usuario;

use App\Http\Controllers\Controller;
use App\Grip;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\PurchasesHistory;
use App\ConfiguracionPublica;
class GridController extends Controller
{
    public function store(Request $request)
    {
        $username=Auth::user()->name;
        $username=str_replace(' ','-',$username);
        $gridvalue=ConfiguracionPublica::where('nombre','grid')->first();
        do {
            $pase=false;
            $random=rand(1, 1500);
            $nombreURL='grid-'.$username.$random;
            $verifi=Grip::where('nombreURL',$nombreURL)->first();
            if ($verifi) {
                $pase=true;
            }
            # code...
        } while ($pase != false);

        $evento= new Grip($request->all()); 
        $evento->nombreURL=strtolower($nombreURL);
        $evento->save();
        PurchasesHistory::create([
            'user_id' =>Auth::user()->id,
            'amount' => $gridvalue->value,
            'descripcion' =>  'Compra de Grilla',
        ]); 
        return $evento;
    }
}
