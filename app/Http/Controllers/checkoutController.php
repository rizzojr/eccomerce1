<?php

namespace App\Http\Controllers;

use App\Customer;
use App\Order;
use App\Cart;
use Illuminate\Http\Request;

class checkoutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        //capture customer info
        $customer = new Customer();
        
        $customer->guest_ipaddress = request('guest_ipaddr');
        $customer->fname = request('fname');
        $customer->sname = request('sname');
        $customer->email = request('email');
        $customer->country = request('country');
        $customer->city = request('city');
        $customer->postalcode = request('postalcode');
        $customer->street = request('street');
        $customer->phone = request('phone');
        $customer->save();
       


        //fill order table
         $order = new Order();
         
         $order->guest_ipaddress = request('guest_ipaddr');
         $order->paymentType = request('paymentMethod');
         $order->save();

         $carts = Cart::where('guest_ipaddress',request('guest_ipaddr'))->get();

         foreach($carts as $cart){
            $order->cart()->attach($cart->id);
         }
        return 123;

         

        

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
