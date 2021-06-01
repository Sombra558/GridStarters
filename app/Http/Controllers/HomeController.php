<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Grip;
use App\User;
use App\ConfiguracionPublica;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $retirovalue=ConfiguracionPublica::where('nombre','retiro')->first();
        $user= Auth::user()->load(['matriz'=>function($q){
            return $q->with(['bloques'=>function($k){
                return $k->where('estado',false);
            }]);
        },'bank'=>function($q){
            return $q->with(['registros','retiros']);
        },'history']);
        return view('home',compact('user','retirovalue'));
    }
    public function payment()
    {
        $user= Auth::user()->load(['matriz']);
        $gridvalue=ConfiguracionPublica::where('nombre','block')->first();
        return view('User.Payment.payment',compact('user','gridvalue'));
    }
    public function paymentgrid()
    {
        $user= Auth::user()->load(['matriz']);
        $gridvalue=ConfiguracionPublica::where('nombre','grid')->first();
        return view('User.Payment.gridpayment',compact('user','gridvalue'));
    }
    public function mygrid()
    {
        $user= Auth::user()->load(['matriz'=>function($q){
            return $q->with(['bloques']);
        }]);
        return view('MyProfile.MisCuadrilla',compact('user'));
    }
    public function mygriddetail()
    {
        $user= Auth::user()->load(['matriz'=>function($q){
            return $q->with(['bloques']);
        }]);
        return view('MyProfile.MyGrids',compact('user'));
    }
    public function showgrip($nombreURL)
    {
        $user= Auth::user()->load(['matriz'=>function($q){
            return $q->with(['bloques']);
        }]);
        $grip= Grip::where('nombreURL',$nombreURL)->first();
       
        if ($grip) {
            $grip->load('user','bloques');
            return view('MyProfile.MiDetalle',compact('grip','user'));
        }else{
            return view('error.error404',compact('grip'));
        }       
    }
    public function editarurl(Request $request,$id)
    {
        $solicitud=Grip::find($id);
        $solicitud->nombreURL=$request['nombreURL'];
        $solicitud->save();
        return $solicitud;
    }
}
