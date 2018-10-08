<?php

namespace App\Admin\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use \App\Order;
use \App\OrderProduct;
use \App\ProductSize;
use \App\Product;

class OrderController extends Controller
{
    public function index(){
        $orders = Order::orderBy("created_at", 'desc')->paginate(15);
        return view('admin.order.index', compact('orders'));
    }

    public function orderProduct(Order $order) {
        $orderProducts = OrderProduct::where('order_id', $order->id)->orderBy('created_at', 'desc')->paginate(10);
        return view('admin.order.orderProduct', compact(['order','orderProducts']));
    }
}
