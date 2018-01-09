@extends('layouts.main')

@section('content')

    <h3>Cart Items</h3>
    <table class="table table-hover">
        <thead>
        <tr>
            <th>Name</th>
            <th>Quantity</th>
            <th>Price</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($cartItems as $cartItem)
            <tr>
                <td>{{$cartItem->name}}</td>
                <td>
                    {!! Form::open(['route' => ['cart.update', $cartItem->rowId], 'method' => 'PUT']) !!}
                    <input name="qty" type="text" value="{{$cartItem->qty}}">
                    <input type="submit" class="btn btn-sm btn-default" value="OK">
                    {!! Form::close() !!}
                </td>
                <td>{{$cartItem->price}}€</td>
                <td>
                    <form action="{{route('cart.destroy', $cartItem->rowId)}}" method="POST">
                        {{csrf_field()}}
                        {{method_field('DELETE')}}
                        <input class="btn btn-sm btn-danger" type="submit" value="Delete">
                    </form>
                </td>
            </tr>
        @endforeach
        <tr>
            <td></td>
            <td>Items:{{Cart::count()}}</td>
            <td>
                Tax: ${{Cart::tax()}}<br>
                Total: {{Cart::total()}}€</td>
            <td></td>
        </tr>
        </tbody>
    </table>

    <a href="{{route('checkout.shipping')}}" class="button">Checkout</a>
    @endsection