<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Product;
use App\Cart;
use App\Sale;
use App\Mail\SoldMailBuyer;
use App\Mail\SoldMailSeller;
use App\User;

use Session;

class ProductController extends Controller
{
    public function getAddToCart(Request $request, $id)
    {
          $product = Product::find($id);

          $oldCart = Session::has('cart') ? Session::get('cart') : null;

          $cart = new Cart($oldCart);

          $cart->add($product, $product->id);

          $request->session()->put('cart', $cart);

          return redirect()->route('home');
    }

    public function forTest(Request $request)
    {
      dd($request->product_condition);
    }

    public function all_products()
    {

        $products = Product::where('state_id', 1)
                                ->paginate(8); 

        return view('products', compact('products'));
    }

    public function getCart()
    {
        $oldCart = Session::get('cart');

        $cart = new Cart($oldCart);

        return view('shopping_cart', ['products' => $cart->items, 'totalPrice' => $cart->totalPrice]);
    }

    public function getReduceByOne($id)
    {
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->reduceByOne($id);
        Session::put('cart', $cart);

        return redirect()->route('shopping_cart');
    }

    public function getRemoveItem($id)
    {
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->removeItem($id);

        if ($cart->totalQty == 0)
            Session::forget('cart');
        else
            Session::put('cart', $cart);

        return redirect()->route('getCart');
    }

    public function getCheckout()
    {
      if(!Session::has('cart')){
        return view('shopping_cart');
      }

      $oldCart = Session::get('cart');
      $cart = new Cart($oldCart);
      $total = $cart->totalPrice;
      return view('checkout', ['total' => $total]);
    }


    public function postCheckout (Request $request)
    {
          if (!Session::has('cart')){
              return redirect()->route('getCart');
          }

          $oldCart = Session::get('cart');
          $cart = new Cart($oldCart);

          foreach ($cart->items as $key => $value) {

              $sale = new Sale;

              $sale->buyer_name = $request->input('name');
              $sale->sale_time = date("Y-m-d H:i:s");
              $sale->buyer_phone = $request->input('phone_number');
              $sale->buyer_email = $request->input('email');
              $sale->product_id = $key;

              Product::where('id', $key)->update(['state_id' => 6]);
              $user = User::where('id', $value["item"]["user_id"])->get();

              \Mail::to($user[0])->send(new SoldMailSeller);

              $sale->save();
          }


          //\Mail::to($buyer)->send(new SoldMailSaler);

          Session::forget('cart');
          return redirect()->route('getCart')->with('success', 'Succefully purchased');
    }
}
