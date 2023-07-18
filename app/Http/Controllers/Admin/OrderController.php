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

        $pdf = PDF::loadView('layouts.admin.ecommerce.order.invoice', compact('order'));

        return $pdf->stream();
        // download PDF file with download method
        return $pdf->download('invoice.pdf');
    }

    public function adminOrderDelete($id)
{
    try {
        $order = Order::findOrFail($id);
        $order->delete();
        return redirect()->back()->with('success', 'Order deleted successfully.');
    } catch (\Exception $exception) {
        return redirect()->back()->with('error', 'Failed to delete the order. Please try again.');
    }
}
}
