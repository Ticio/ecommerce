<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Product;

class SellerController extends Controller
{
    //

    public function store($id)
    {
        $products = Product::where('user_id', $id)->paginate(16); 

        return view('store', compact('products'));
    }

    public function delete($id)
    {	
        Product::destroy($id); 

        $products = Product::where('user_id', Auth::user()->id)->paginate(16);

        return view('store', compact('products'));
    }
}
