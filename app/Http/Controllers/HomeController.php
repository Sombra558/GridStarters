<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

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
        }]);
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
        return view('MyProfile.MyGrids',compact('user'));
    }
}
