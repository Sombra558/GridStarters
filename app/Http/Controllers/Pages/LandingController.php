<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use App\Grip;
use App\User;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function index()
    {
        $users= Grip::all()->load(['user','bloques'=>function($k){
            return $k->where('estado',0)->get();
        }]);
        return view('welcome',compact('users'));
    }
    public function search () 
    {
        
       $key = request('key');
       $users=collect();
        $coleccionusers=Grip::get()->load(['user'=>function($q) use($key){
            return $q->where('name', 'like', "%$key%");
        },'bloques'=>function($k){
            return $k->where('estado',0)->get();
        }]);
        foreach ($coleccionusers as $key ) {
           if($key->user){
            $users->push($key);
           }
        }
  
 

        return view('welcome',compact('users'));

    }
    public function showgrip($nombreURL)
    {
        $grip= Grip::where('nombreURL',$nombreURL)->first();
        if ($grip->count()>0) {
            $grip->load(['user','bloques'=>function($k){
                return $k->where('estado',0)->get();
            }]);
            return view('Grip.show',compact('grip'));
        }else{
            return view('error.error404',compact('grip'));
        }       
    }
}
