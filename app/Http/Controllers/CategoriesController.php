<?php

namespace App\Http\Controllers;
use App\Models\Category;

use Illuminate\Http\Request;

class CategoriesController extends Controller
{
     public function index() {
        $categories = Category::all();

        return view('categories', compact('categories'));
    }
    public function show($category) {
        $category = Category::find($category);
        // $category = Category::where('name', $category)->get();
        // $products = Category::with('products')->where('category_id', $category[0]->id)->get();

        return view('category-product',['category'=>$category]);
    }
}
