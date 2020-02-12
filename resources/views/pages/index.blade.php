@extends('layout.app')

@section('content')
<!-- Product Catagories Area Start -->
<div class="products-catagories-area clearfix">
    <div class="amado-pro-catagory clearfix">
       
        <!-- Single Catagory -->
        @foreach ($products as $product)     
        <div class="single-products-catagory clearfix">
            <a href="{{ url('show/'. $product->id) }}">
                <img src= {{$product->image}} alt="">
                <!-- Hover Content -->
                <div class="hover-content">
                    <div class="line"></div>
                    <p>From ${{$product->price}}</p>
                    <h4>{{$product->name}}</h4>
                </div>
            </a>
        </div>
        @endforeach      
    </div>
</div>
@endsection