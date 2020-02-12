@extends('layout.app')
@section('content')

<div class="cart-table-area section-padding-100">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-lg-8">
                <div class="checkout_details_area mt-50 clearfix">

                    <div class="cart-title">
                        <h2>Checkout</h2>
                    </div>

                    <form action="{{url('checkout')}}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <input type="text" class="form-control" name="fname" id="first_name" value="" placeholder="First Name" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <input type="text" class="form-control" name="sname" id="last_name" value="" placeholder="Last Name" required>
                            </div>
                            <div class="col-12 mb-3">
                                <input type="email" class="form-control" name="email" id="email" placeholder="Email" value="">
                            </div>
                            <div class="col-12 mb-3">
                                <select class="w-100" name="country" id="country">
                                <option value="usa">United States</option>
                                <option value="Tz">Tanzania</option>
                                <option value="uk">United Kingdom</option>
                                <option value="ger">Germany</option>
                                <option value="fra">France</option>
                                <option value="ind">India</option>
                                <option value="aus">Australia</option>
                                <option value="bra">Brazil</option>
                                <option value="cana">Canada</option>
                            </select>
                            </div>
                            <div class="col-12 mb-3">
                                <input type="text" class="form-control mb-3" name="postalcode" id="postal-code" placeholder="postal-code" value="">
                            </div>
                            <div class="col-12 mb-3">
                                <input type="text" class="form-control mb-3" name="street" id="street" placeholder="street" value="">
                            </div>
                            <div class="col-12 mb-3">
                                <input type="text" class="form-control" name="city" id="city" placeholder="City" value="">
                                <input type="hidden" name="guest_ipaddr" value="{{getenv('REMOTE_ADDR')}}">
                            </div>
                            <div class="col-md-6 mb-3">
                                <input type="number" class="form-control" name="phone" id="phone_number" min="0" placeholder="Phone No" value="">
                            </div>
                        </div>
                    {{-- </form> --}}
                </div>
            </div>
            <div class="col-12 col-lg-4">
                <div class="cart-summary">
                    <h5>Cart Total</h5>
                    <ul class="summary-table">
                        <li><span>subtotal:</span> <span>${{$sum}}</span></li>
                        <li><span>delivery:</span> <span>Free</span></li>
                        <li><span>total:</span> <span>${{$sum}}</span></li>
                    </ul>

                    <div class="payment-method">
                        <!-- Cash on delivery -->
                        <div class="custom-control custom-checkbox mr-sm-2">
                            <input type="radio" value="Cash on Delivery" name="paymentMethod" class="custom-control-input" id="cod">
                            <label class="custom-control-label" for="cod">Cash on Delivery</label>
                        </div>
                        <!-- Paypal -->
                        <div class="custom-control custom-checkbox mr-sm-2">
                            <input type="radio" name="paymentMethod" value="Paypal" class="custom-control-input" id="paypal">
                            <label class="custom-control-label" for="paypal">Paypal <img class="ml-15" src="{{asset('img/core-img/paypal.png')}}" alt=""></label>
                        </div>
                    </div>

                    <div class="cart-btn mt-100">
                        {{-- <a href="{{url('checkout')}}" class="btn amado-btn w-100">Checkout</a> --}}
                        <button type="submit" name="checkout" value="6" class="btn amado-btn">Checkout</button>
                        {{-- <input type="button" class="btn amado-btn w-100"  value="Checkout"> --}}
                    </div>
                </div>
            </div>
        </form>

        </div>
    </div>
</div>
@endsection