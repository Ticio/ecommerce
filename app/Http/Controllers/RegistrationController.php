<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Product;

class RegistrationController extends Controller
{
    public function register_product(request $request)
    {
        if($request->hasFile('image'))
        {
            $filename = $request->file('image')->getClientOriginalName();

            $request->file('image')->storeAs('public/images/products/', $filename);

            $product = new Product;
            $product->name = $request->name;
            $product->image_path = 'public/images/products/' . $filename;
            $product->description = $request->description;
            $product->color = $request->color;
            $product->state_id = 1;
            $product->shop_id = 1;
            $product->state_id = 1;
            $product->user_id = 1; //This has to be removed later
            $product->product_type_id = $request->product_type_id;
            $product->product_condition = $request->product_condition;
            $product->price = $request->price;
            $product->quantity = 1;

            $product->save();
        }
        else
            return View("register_product")->with("error", "No image was selected");

        return View("register_product")->with("success", "Image uploaded successfully");
    }
}
