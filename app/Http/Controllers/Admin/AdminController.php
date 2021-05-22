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
        
        return view('Admin.Public.index');
    }
}
