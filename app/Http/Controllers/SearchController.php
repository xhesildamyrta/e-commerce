<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;


class SearchController extends Controller
{
    public function search(Request $request)
    {
        $request->validate([
            'query' => 'required'
        ]);
        $query = $request->input('query');
        $products = Product::where('title', 'like', "%$query%")->
                           orWhere('description', 'like', "%$query%")->paginate(4);

        return view('search')->with(['products' => $products,
            'query' => $query]);
    }
}
