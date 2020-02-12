<?php

namespace App\Http\Controllers;
use App\Cart;
use App\Product;

use Illuminate\Http\Request;

class shopingCart extends Controller
{
    //
    public function index(){
          
        //calculate sum of prices
        $sum = Cart::where('guest_ipaddress',getenv('REMOTE_ADDR'))->sum('price');

        //getting items from cart
        $cartItems = Cart::where('guest_ipaddress',getenv('REMOTE_ADDR'))->get();
        
              
        return view('pages.Cart',['cartItems'=>$cartItems,'sum'=>$sum]);
    }  



    public function store(Request $request){

       
       //insert data to the database
       $shopingCart = new Cart();
       $shopingCart->guest_ipaddress = $request->input('ipaddr');
       $shopingCart->product_id = request('product_id');
       $shopingCart->quantity = request('quantity');
       $shopingCart->price = request('product_price')*request('quantity');
       $shopingCart->save();

       //count product in the cart table
       $count = Cart::all()->count();
       global $count;

       return redirect('home');    
       
    }

  
}
