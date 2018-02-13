<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Product;
use App\Cart;
use App\Sale;
use App\Mail\YourProductHasBeenSold;
use App\User;
use Mail;

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

    public function all_products()
    {
        $products = Product::where('state_id', 1)->paginate(16); 

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

        if ($cart->totalQty == 0)
            Session::forget('cart');
        else
            Session::put('cart', $cart);
        
        return redirect()->route('getCart');
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
              $buyer = new User;

              $sale->buyer_name = $request->input('name');
              $sale->buyer_phone = $request->input('phone_number');
              $sale->buyer_email = $request->input('email');
              $residence = $request->input('residence');
              $room_number  = $request->input('room_number');            
              
              $sale->sale_time   = date("Y-m-d H:i:s");
              $sale->product_id  = $key;
  
              Product::where('id', $key)->update(['state_id' => 6]);
              $user = User::where('id', $value["item"]["user_id"])->get();

              $user[0]->buyername = $sale->buyer_name;
              $user[0]->buyerphone_number = $sale->buyer_phone;
              $user[0]->buyeremail = $sale->buyer_email;
              $user[0]->buyerresidence = $residence;
              $user[0]->buyerroom_number = $room_number;

              // dd($user[0]->buyername);
              Mail::to($user[0])->send(new YourProductHasBeenSold( $user[0], $buyer, $residence, $room_number));

              // Mail::send(['text' => 'emails.emailSeller'], ['name', 'Swapnsells'], function($message){

              //   $message->to('ticioguitar@gmail.com', 'Ticio')->subject('Test email');
              //   $message->from('swapnsells@gmail.com', 'Swapnsells');
              // });

              // $sale->save();
          }


          // \Mail::to($buyer)->send(new SoldMailSaler);

          Session::forget('cart');
          return redirect()->route('getCart')->with('success', 'Succefully purchased');
    }
}
