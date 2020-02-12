<?php

namespace App\Http\Controllers;

use App\Brand;
use App\Category;
use App\Product;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    public function index(){

        //accessing the database
        $products = Product::all()->take(9);
      
        return view('pages.index',['products'=>$products]);
        
    }
    public function cart(){
        return view('pages.cart');
    }
    public function checkout($sum){

        return view('pages.checkout',['sum'=>$sum]);
    }
    public function shop(){

        //retrieve products from the database
        $products = Product::all()->take(8);
        $selectedfew = $products->count();

        $categories = Category::all();
        $brands = Brand::all();
        $allproducts = Product::all()->count();

        return view('pages.shop',['products'=>$products,'selectedfew'=>$selectedfew,'allproducts'=>$allproducts,'brands'=>$brands,'categories'=>$categories]);
    }
}
