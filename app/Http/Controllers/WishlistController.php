<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Wishlist;
use Illuminate\Support\Facades\DB;


class WishlistController extends Controller
{
    public function index(){
       $products = DB::table('users')
            ->join('wishlists', 'users.id', '=', 'wishlists.user_id')
            ->join('products', 'wishlists.user_id', '=', 'products.id')
            ->where('user_id','=', auth()->user()->id)
            ->select( 'users.*','wishlists.*','products.*')
            ->get();
        return view('wishlist',['products'=>$products]);
    }

    public function delete($product){

    }
}
