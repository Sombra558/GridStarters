es
<?php

namespace App\Http\Controllers\Usuario;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Helpers\General\CollectionHelper;
use App\Grip;
use App\Bloque;
use File;

class BloqueController extends Controller
{
    public function store(Request $request)
    {
        $cart = json_decode($request['cart']);
        $matriz=Grip::find($request['matriz_id']);
        $mytemp=json_decode($matriz->matriz);
        $originalimg = \Image::make($request->file('img'));
        $imaor=$request->file('img');
        $pathoriginal = $imaor->store('public/Grids');
        $pathoriginal = str_replace('public/', '', $pathoriginal);
        $aumentox=600/$request['column'];
        $aumentoy=600/$request['fila'];
        $origenx=300;
        $mybloques= collect();
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
                'codigo' => $randomString2,
                'matriz_id' => $request['matriz_id'],
            ]);

            $mybloques->push($newbloque);
        }
   
       
        for ($i=0; $i < $request['fila']; $i++) {
           
            $origeny=0;
            for ($j=0; $j < 2; $j++) { 
                $bloquecaptura=null;
                $bloquecaptura=Bloque::where('codigo',$randomString2)->where('fila',$i)->where('column',$j)->first();
           
                $img = \Image::make($request->file('img'));
                $img->resize(600,600);
                $temp=null;
                $temp = $img->crop(300,300,$origenx,$origeny);
                $temp->resize(25,25);
                $path = public_path().'/storage/Gridsmin/';
                
                if (!file_exists($path)) {
                    mkdir($path, 666, true);
                }
                $temp->save($path.$bloquecaptura->id.str_replace(' ','_',$request->file('img')->getClientOriginalName()));
                $bloquecaptura->img= $pathoriginal;
                $bloquecaptura->fragmento = 'Gridsmin/'.$bloquecaptura->id.str_replace(' ','_',$request->file('img')->getClientOriginalName());
                $bloquecaptura->save();
                $origeny=$origeny+$aumentoy;
                
            }
            
            $origenx = $origenx - $aumentox;
            
        }
 
        //relacionar-en-la-matriz
        $vincules = Bloque::where('codigo',$mybloques[0]->codigo)->get();
          

        
    
        foreach ($vincules as $element) {

                $mytemp = json_decode($matriz->matriz);
               
                $mytemp[$element->fila][$element->column]->src=$element->fragmento;
                
                $mytemp = json_encode($mytemp);
                $matriz->matriz = $mytemp;
                $matriz->save();
        }
        
        $ruta="/grid/".$matriz->nombreURL;
      
        return $ruta;
    }
    public function store2(Request $request)
    {
        $cart = json_decode($request['cart']);
        $matriz=Grip::find($request['matriz_id']);
        $aumentox=600/$request['column'];
        $aumentoy=600/$request['fila'];
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
                'codigo' => $randomString2,
                'matriz_id' => $request['matriz_id'],
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
                    $path = public_path().'/storage/Gridsmin/';
                    if (!file_exists($path)) {
                        mkdir($path, 666, true);
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
                 $mytemp = json_decode($matriz->matriz);
                 $mytemp[$myblocks[$a]->fila][$myblocks[$a]->column]->src=$myImg[$a]["path"];
                 $mytemp = json_encode($mytemp);
                 $matriz->matriz = $mytemp;
                 $matriz->save();
        }
    
        $ruta="/grid/".$matriz->nombreURL;
        return $ruta;
    }
}
