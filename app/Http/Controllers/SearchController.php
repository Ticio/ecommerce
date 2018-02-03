<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class SearchController extends Controller
{
    //

    public function basicSearch(request $request)
    {

    	$products = Product::where('name','LIKE',"%{$request->searchName}%")->get();
    	$searchName = $request->searchName;

        return view('search', compact('products', '$searchName'));
        // return view('search');
    }
}
