<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Pagination\LengthAwarePaginator;

class ProductController extends Controller
{
    public function index(Request $request){

        $sort= $request->get('sortprod','default');
        // $perPage = $request->get('perPage','4');
        if($sort== 'asc'){
            $products=Product::orderBy('title', 'ASC')->paginate(12);
            return view('all-products', compact('products'));
        }
        elseif($sort =="desc"){
            $products=Product::orderBy('title', 'DESC')->paginate(12);
            return view('all-products', compact('products'));
        }
        elseif($sort =="lowerPrice"){
            $products=Product::orderBy('price', 'ASC')->paginate(12);
            return view('all-products', compact('products'));
        }
        elseif($sort =="higherPrice"){
            $products=Product::orderBy('price', 'DESC')->paginate(12);
            return view('all-products', compact('products'));
        }
        
    $products = Product::paginate(12);
        return view('all-products', compact('products'));
    }
















    public function ShopList() {
        // $products = Product::where("category_id", "=", 6)->paginate(4);
        $products = Product::paginate(4);

        return view('shop-list', compact('products'));
    }


}
