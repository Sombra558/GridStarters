<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Grip;
use App\User;
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
        $user= Auth::user()->load(['matriz'=>function($q){
            return $q->with(['bloques']);
        },'bank'=>function($q){
            return $q->with(['registros','retiros']);
        },'history']);
        return view('home',compact('user'));
    }
    public function payment()
    {
        $user= Auth::user()->load(['matriz']);
        return view('User.Payment.payment',compact('user'));
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
}
