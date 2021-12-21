<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Pagination\LengthAwarePaginator;

class ProductController extends Controller
{
    public function index(){

        $products = Product::orderBy('title')->paginate(4);
        return view('all-products', compact('products'));
    }
}
