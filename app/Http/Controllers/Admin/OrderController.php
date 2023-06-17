<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use PDF;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function adminOrderList()
    {
       $orders = Order::with('orderDetails', 'billing')->get();
        return view('layouts.admin.ecommerce.order.list', compact('orders'));
    }

    public function adminOrderView($id)
    {
        $order = Order::with('orderDetails', 'billing')->where('id', $id)->first();
        return view('layouts.admin.ecommerce.order.view', compact('order'));
    }

    public function orderInvoiceDownload($id)
    {
        $order = Order::with('orderDetails', 'billing')->where('id', $id)->first();

        $pdf = PDF::loadView('pdf_view', compact('order'));

        // download PDF file with download method
        return $pdf->download('invoice.pdf');
    }
}
