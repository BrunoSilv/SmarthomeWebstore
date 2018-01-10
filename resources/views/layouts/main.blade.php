<!doctype html>
<html class="no-js" lang="en" dir="ltr">
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="x-ua-compatible" content="ie=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>
        @yield ('title', 'Smarthome Warehouse')
    </title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>
    <link rel="stylesheet" href="{{asset('dist/css/foundation.min.css')}}"/>
    <link rel="stylesheet" href="{{asset('dist/css/app.css')}}"/>
    <link href="http://cdnjs.cloudflare.com/ajax/libs/foundicons/3.0.0/foundation-icons.css" rel="stylesheet">


</head>
<body>
<div  class="top-bar">
    <div style="color:white" class="top-bar-left">
        <h4 class="brand-title">
            <a href="{{route('homepage')}}">
                <i class="fa fa-home fa-lg" aria-hidden="true">
                </i>
                Smarthome Warehouse
            </a>
        </h4>
    </div>
    <div class="top-bar-right">
        <ol class="menu">
            <li>
                <a href="{{route('products')}}">
                    Products
                </a>
            </li>
            <li>
                <a href="{{url('login')}}">
                    Login
                </a>
            </li>
            <li>
                <a href="{{route('cart.index')}}">
                    <i class="fa fa-shopping-cart fa-2x" aria-hidden="true">
                    </i>
                    Cart
                    <span class="alert badge">
                                {{Cart::count()}}
                            </span>
                </a>
            </li>
        </ol>
    </div>
</div>
@yield ('content')
{{--<footer class="footer">

</footer>--}}

<script src="{{asset('dist/js/vendor/jquery.js')}}"></script>
<script type="text/javascript" src="https://js.stripe.com/v2/"></script>﻿
<script type="text/javascript">
    Stripe.setPublishableKey('pk_test_z7j4Av79ofFQjaUWMo4nbRqj');
</script>
<script src="{{asset('dist/js/app.js')}}"></script>

</body>
</html>
