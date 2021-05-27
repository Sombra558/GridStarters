<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Grip;
use App\User;
use App\Bloque;
use App\UserBank;
use App\AccountRegisters;
use App\PurchasesHistory;
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
}
