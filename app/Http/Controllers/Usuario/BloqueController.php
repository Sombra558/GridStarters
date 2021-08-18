<?php

namespace App\Http\Controllers\Usuario;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Helpers\General\CollectionHelper;
use Illuminate\Support\Facades\Auth;
use App\Grip;
use App\Bloque;
use App\UserBank;
use App\AccountRegisters;
use App\PurchasesHistory;
use App\ConfiguracionPublica;
use App\Resolvers\PaymentPlatformResolver;
use App\Services\PayPalService;
use File;

class BloqueController extends Controller
{
    public function store(Request $request)
    {
        $cart = json_decode($request['cart']);
        $blockvalue=ConfiguracionPublica::where('nombre','block')->first();
        $matriz=Grip::find($request['matriz_id']);
        
        $aumentox=600/$request['column'];
        $aumentoy=600/$request['fila'];
        $imageorigin = $request->file('img');
        $pathorigin =$imageorigin->store('public/Grids');
        $pathorigin = str_replace('public/', '', $pathorigin);
    
        $characters2 = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ*-%$&';
        $characters2Length = strlen($characters2);
        $randomString2 = '';
            for ($i = 0; $i < 15; $i++) {
                $randomString2 .= $characters2[rand(0, $characters2Length - 1)];
        }
        foreach ($cart as $bloque) {
            $newbloque = Bloque::create([
                'column' => $bloque->columna,
                'fila' =>   $bloque->fila,
                'size' =>  $request['size'],
                'codigo' => $randomString2,
                'img' => $pathorigin,
                'matriz_id' => $matriz->id,
                'user_id' => Auth::user()->id,
            ]);   
         }
         $myblocks = Bloque::where('codigo',$randomString2)->get();
         $myImg = collect();
         if ($request->file('img')) {
            $origemx=0;
            $origemy=0;
            for ($i=0; $i < (int)$request['fila']; $i++) {
                $origemx=0;
                for ($j=0; $j < (int)$request['column']; $j++) { 
                    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
                    $charactersLength = strlen($characters);
                    $randomString = '';
                        for ($k = 0; $k < 15; $k++) {
                            $randomString .= $characters[rand(0, $charactersLength - 1)];
                    }
                    $img = \Image::make($request->file('img'));
                    $img->resize(600,600);
                    $temp=null;
                    $temp = $img->crop(600/$request['column'],600/$request['fila'],$origemx,$origemy);
                    $temp->resize(25,25);
                    $path = public_path().'/storage-public/Gridsmin/';
                    if (!file_exists($path)) {
                        mkdir($path, 0777, true);
                    }
                    $temp->save($path.$randomString.str_replace(' ','_',$request->file('img')->getClientOriginalName()));
                    $myImg->push([
                        'path' => 'Gridsmin/'.$randomString.str_replace(' ','_',$request->file('img')->getClientOriginalName()),
                    ]);
                    $origemx=$origemx+$aumentox;
                }
                $origemy=$origemy+$aumentoy;

            }


        }

        for ($a=0; $a < $myblocks->count(); $a++) { 

                 $myblocks[$a]->fragmento = $myImg[$a]["path"];
                 $myblocks[$a]->save();
                 $mytemp = json_decode($matriz->matriz);
                 $mytemp[$myblocks[$a]->fila][$myblocks[$a]->column]->src=$myImg[$a]["path"];
                 $mytemp = json_encode($mytemp);
                 $matriz->matriz = $mytemp;
                 $matriz->save();
        }
        $userbank=UserBank::where('user_id',$matriz->user_id)->first();
        $positivo= $request['column']*$request['fila'];
        if ($userbank) {
            $userbank->available=$userbank->available+$positivo*$blockvalue->value;
            $userbank->save();
            AccountRegisters::create([
                'user_banks_id' =>$userbank->id,
                'amount' => $positivo*$blockvalue->value,
                'type' => "sold",
                'withdrawn' =>   0,
            ]);   
        }else{
            $new=UserBank::create([
                'user_id' =>$matriz->user_id,
                'available' => $positivo*$blockvalue->value,
                
                'withdrawn' =>   0,
            ]);
            AccountRegisters::create([
                'user_banks_id' =>$new->id,
                'amount' => $positivo*$blockvalue->value,
                'type' => "sold",
                'withdrawn' =>   0,
            ]); 
            
        }
        PurchasesHistory::create([
            'user_id' =>Auth::user()->id,
            'amount' => $positivo*$blockvalue->value,
            'descripcion' =>  'Compra de bloque',
        ]); 
        $ruta="/grid/".$matriz->nombreURL;
        return $ruta;
    }
    public function store2(Request $request)
    {
        $rules = [
            'value' => ['required', 'numeric', 'min:0.1'],
            'currency' => ['required', 'exists:currencies,iso'],   
        ];
        $request->validate($rules);
        $paymentPlatform = resolve(PayPalService::class);
        return $paymentPlatform->handlePaymentBlocks($request);
    }
    public function approval()
    {
      
        $paymentPlatform = resolve(PayPalService::class);

        return $paymentPlatform->handleApprovalBlock();
    }
}