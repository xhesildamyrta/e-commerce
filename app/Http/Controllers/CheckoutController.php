<?php

namespace App\Http\Controllers;

use App\Http\Requests\CheckoutRequest;
use Illuminate\Support\Facades\Auth;

use App\Models\Order;
use Carbon\Carbon;
use Cartalyst\Stripe\Exception\CardErrorException;
use Cartalyst\Stripe\Laravel\Facades\Stripe;
use Gloudemans\Shoppingcart\Facades\Cart;

use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function index(){
        if(Auth::check()){
            return view('checkout');
        }
        else{
            return redirect()->route('login')->with('success_message','Please login in order to continue checkout');;
        }
    }
    public function store(Request $request){
        $contents = Cart::content()->map(function ($item) {
            return $item->model->title;
        })->values()->toJson();

        try {
            $charge = Stripe::charges()->create([
                'amount' => Cart::total(),
                'currency' => 'USD',
                'source' => $request->stripeToken,
                'description' => 'Order',
                'receipt_email' => $request->email,
                'metadata' => [
                    'contents' => $contents,
                ],
            ]);
            $date = Carbon::now();
            $purchase_date = $date->toDateString();

            foreach (Cart::content() as $item) {
                $order = Order::create([
                    'user_id' => auth()->user() ? auth()->user()->id : null,
                    'dateOfPurchase' => $purchase_date,
                    'product_id' => $item->model->id,
                ]);
            }
            Cart::instance('default')->destroy();
            return redirect()->route('confirmation')->with('success_message', 'Thank you! Your payment has been successfully accepted!');
        } catch (CardErrorException $e) {
            return back()->withErrors('Error! ' . $e->getMessage());
        }
    }
}
