<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Product;

class SellerController extends Controller
{
    //

    public function profile()
    {   
        return view('profile');
    }

    public function store($id)
    {
        // return "Ola pessoal tudo bem com voces";
        $products = Product::where('user_id', $id)->paginate(16); 

        return view('store', compact('products'));
    }

    public function delete($id)
    {	
        Product::destroy($id); 

        $products = Product::where('user_id', Auth::user()->id)->paginate(16);

        return view('store', compact('products'));
    }

    public function profile_update(Request $request)
    {       
        Auth::user()->name = $request->name;
        Auth::user()->email = $request->email;
        Auth::user()->phone_number = $request->phone_number;
        Auth::user()->whatsapp_number = $request->whatsapp_number;

        if (!($request->password == null))
            Auth::user()->password = bcrypt($request->password);
    
        $save = Auth::user()->save();

        if ($save)
            return view('profile')->with('success', 'Data saved successfully');
        
        return view('profile')->with('error', 'Error saving the data');   
    }

    public function product_update(Request $request, $id)
    {   
        // Product::where('id', $key)->update(['state_id' => 6]);

        $product = Product::find($id);
        
        $product->name = $request->name;
        $product->description = $request->description;
        $product->color = $request->color;

        // @isset($request->product_type_id)
            $product->product_type_id = isset($request->product_type_id) ? $request->product_type_id :  $product->product_type_id;
        // @endisset

        // @isset($request->product_condition)
            $product->product_condition = isset($request->product_condition) ? $request->product_condition : $product->product_condition;
            // $product->product_condition = $request->product_condition;
        // @endisset

        $product->price = $request->price;
        $product->quantity = $request->quantity;

        //dd($product);
        $product->save();

        $products = Product::where('user_id', Auth::user()->id)->paginate(16);

        return view('store', compact('products'));
    }
}
