<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Grip;
use App\User;
use App\Bloque;
use App\UserBank;
use App\AccountRegisters;
use App\PurchasesHistory;
use App\SolicutudRetiro;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $totalblock=Bloque::all()->count();
        $totalgrid=Grip::all()->count();
        return view('Admin.Home.index',compact('totalblock','totalgrid'));
    }
    public function public()
    {
        $grids= Grip::all()->load(['user','bloques'=>function($q){
            return $q->with('user');
        }]);
        return view('Admin.Public.index',compact('grids'));
    }
    public function users()
    {
        $users=User::where('id','!=',1)->get();
        return view('Admin.Users.index',compact('users'));
    }
    public function sales()
    {
        $users=User::all()->where('id','!=',1);
        $sales=PurchasesHistory::all()->load(['user']);
        return view('Admin.Sales.Sales',compact('sales'));
    }
    public function reports()
    {
        $users=User::all()->where('id','!=',1);
        $sales=PurchasesHistory::all()->load(['user']);
        return view('Admin.Reports.reports',compact('sales'));
    }
    public function retiros()
    {
        $users=User::all()->where('id','!=',1);
        $totalblock=Bloque::all()->count();
        $totalgrid=Grip::all()->count();
        $accountregistersolds=AccountRegisters::where('type','sold')->get()->load(['bank'=>function($q){
            return $q->with('user');
        }]);
        $accountretirosregisters=SolicutudRetiro::get()->load(['bank'=>function($q){
            return $q->with('user');
        }]);
       
        return view('Admin.Retiros.Retiros',compact('totalblock','totalgrid','accountregistersolds','accountretirosregisters'));
    }
    public function verificar(Request $request,$id)
    {
        $solicitud=SolicutudRetiro::find($id)->load(['bank'=>function($q){
            return $q->with('user');
        }]);
        $banco=UserBank::find($solicitud->user_banks_id);
        $solicitud->numero_de_comprobante=$request['numero_de_comprobante'];
        if ($request->file('img')) {
                $image = $request->file('img');
                $path = $image->store('public/Depositos');
                $path = str_replace('public/', '', $path);
                $solicitud->img_deposito=$path;
            }
        $solicitud->estado="verificado";
        $banco->withdrawn=$banco->withdrawn+$solicitud->amount;
        $banco->available=$banco->available - $solicitud->amount;
        $banco->save();
        $solicitud->save();
        return $solicitud;
    }
}
