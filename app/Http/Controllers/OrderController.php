<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function Orders(){
        return view('backend.order.orders');
    }
}
