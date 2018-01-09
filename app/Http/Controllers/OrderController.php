<?php
namespace App\Http\Controllers;
use App\Order;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
class OrderController extends Controller
{
    public function Orders($type='')
    {
        if ($type == 'pending') {
            $orders = Order::where('delivered', '0')->get();
        } elseif ($type == 'delivered') {
            $orders = Order::where('delivered', '1')->get();
        } else {
            $orders = Order::all();
        }
        return view('admin.orders', compact('orders'));
    }
        public function toggleDeliver(Request $request,$orderId)
        {
            $order=Order::find($orderId);
            $order->delivered=$request->delivered;
            $order->save();

            return back();
        }
}