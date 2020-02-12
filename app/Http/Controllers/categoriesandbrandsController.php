<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class categoriesandbrandsController extends Controller
{
    //

    public function chairs($id){
        $products = Product::where('category',$id)->all();

        return view('pages.shop',['products'=>$products]);
    }

}


