<?php

namespace App\Http\Controllers;
use App\Models\Category;

use Illuminate\Http\Request;

class CategoriesController extends Controller
{
     public function index() {
        $categories = Category::all();

        return view('home', compact('categories'));
    }
    public function category($category) {
        $categories = Category::all();
        dd($categories);
        $category = Category::where('name', $category)->get();
        $products = Category::with('products')->where('category_id', $category[0]->id)->get();

        return view('home', compact('category', 'products', 'categories'));
    }
}
