<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Symfony\Component\Console\Input\Input;

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

    public function AjaxSearch(Request $request){
        $inputSearch = $request['inputSearch'];
        $keyResult = DB::table('products')
        ->where('title', 'LIKE', '%'.$inputSearch.'%')->get();
        echo  $keyResult;

    }

    
}
