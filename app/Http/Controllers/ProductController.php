<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Pagination\LengthAwarePaginator;

class ProductController extends Controller
{
    public function index(){
        
        $products = Product::paginate(4);
        return view('all-products', compact('products'));
    }


    public function ShopList() {
        // $products = Product::where("category_id", "=", 6)->paginate(4);
        $products = Product::paginate(4);

        return view('shop-list', compact('products'));
    }

}
