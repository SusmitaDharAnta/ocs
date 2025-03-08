<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function Orders(){

        $orders=Order::paginate(10);
        return view('backend.order.orders',compact('orders'));
    }
}
