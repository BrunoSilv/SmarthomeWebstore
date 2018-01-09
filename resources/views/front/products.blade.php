@extends ('layouts.main')

@section('title', 'Products')
@section('content')
<!-- products listing -->
<!-- Latest Products -->
<div class="row">
    @forelse($products as $product)
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
        @empty
        <h3>No products</h3>
        @endforelse
</div>
    @endsection