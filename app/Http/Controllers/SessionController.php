<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use Session;

class SessionController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function home()
    {
        $products_page = Product::where('state_id', 1)
                                 ->where('location', 'page')
                                ->latest()
                                ->limit(8)  
                                ->get(); 

        $products_slide = Product::where('state_id', 1)
                                ->where('location', 'slide')
                                ->latest()  
                                ->get();    

        return view('home', compact('products_page', 'products_slide'));
    }

    //Functions for the dashboard operations
    public function dashboard()
    {
        return view('dashboard');
    }

    public function users()
    {
        return view('users');
    }

    public function request()
    {
        return view('request');
    }

    public function about()
    {
        return view('about');
    }

    public function logout()
    {
        if (Session::has('cart'))
            Session::forget('cart');

        auth()->logout();
        return redirect('/');
    }

    public function register_product()
    {
        return view('register_product');
    }

    public function buying_products()
    {

    }
}
