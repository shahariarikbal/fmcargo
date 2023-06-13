<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function adminOrderList()
    {
       $orders = Order::with('orderDetails', 'billing')->get();
        return view('layouts.admin.ecommerce.order.list', compact('orders'));
    }
}