<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class categoriesController extends Controller
{
    //
    public function chairs(){

        $products = Product::where('category_id','5');
        return $products;
    }
}
