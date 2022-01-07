<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function index(){
        if(Auth::check())
        {
            return view('checkout');
        }
        else{

            return redirect()->route('login')->with('success_message','Please login in order to continue checkout');;
        }
    }
}
