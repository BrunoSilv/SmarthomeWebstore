@extends('layouts.main')

@section('content')
    <section class="hero text-center">
        <br/>
        <br/>
        <br/>
        <br/>
        <br>
        <br>
        <br>
        <br>
        <br>
        <a href="{{url('/products')}}"><button class="button large">Check out products</button></a>
    </section>
    <br/>
    <div class="subheader text-center">
        <h2>
            Warehouse Latest Products
        </h2>
    </div>

    <!-- Latest Products -->
    <div class="row">
        @forelse($products->chunk(4) as $chunk)
            @foreach($chunk as $product)
        <div class="small-3 columns">
            <div class="item-wrapper">
                <div class="img-wrapper">
                    <a href="{{route('cart.addItem',$product->id)}}" class="button expanded add-to-cart">
                        Add to Cart
                    </a>
                    <a href="#">
                        <img src="{{url('images', $product->image)}}"/>
                    </a>
                </div>
                <a href="{{route('product')}}">
                    <h3>
                        {{$product->title}}
                    </h3>
                </a>
                <h5>
                    {{$product->price}}€
                </h5>
                <p>
                    {{$product->description}}
                </p>
            </div>
        </div>
            @endforeach
            @empty
            <h3>No Products</h3>
            @endforelse
    </div>
    <!-- Footer -->
    <br>
    @endsection