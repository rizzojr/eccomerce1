<?php

namespace App\Http\Controllers;
use App\Product;
use Illuminate\Http\Request;

class ProductdetailsController extends Controller
{
    //
    public function show($id){
        //retrieve the product from the db
        $productdetails = product::find($id);
        //pass productdetails to the product view page
        return view('pages.product-details',['productdetails'=>$productdetails]);
    }
}
