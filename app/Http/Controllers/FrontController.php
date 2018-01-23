<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;

class FrontController extends Controller
{
    public function index()
    {
        $products=Product::paginate(4);
        return view('front.home', compact('products'));
    }

    public function products()
    {
        $products=Product::paginate(4);
        return view('front.products', compact('products'));
    }

    public function product()
    {
        return view('front.product');
    }
}
