@extends('layouts.admin.master')

@section('title')
    Admin | Order Details
@endsection

@section('content')
    <h1 class="mt-4">Order Details</h1>
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Order Details
        </div>
        <div class="card-body">
            <span style="font-size: 22px; font-weight: 600; text-transform: capitalize">Order Details</span>
            <table class="table table-hover table-bordered">
                <thead>
                <tr>
                    <th>Order Date</th>
                    <th>Invoice ID</th>
                    <th>Total Price</th>
                    <th>Total Qty</th>
                    <th>Payment Type</th>
                </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>{{ $order->created_at->format('m/d/Y') }}</td>
                        <td>{{ $order?->invoice_id }}</td>
                        <td>Tk. {{ $order->total_price }}</td>
                        <td>{{ $order->total_qty }}</td>
                        <td>{{ ucfirst($order->payment_type) }}</td>
                    </tr>
                </tbody>
            </table>
            <hr/>
            <span style="font-size: 22px; font-weight: 600; text-transform: capitalize">Product Details</span>
            <table class="table table-hover table-bordered">
                <thead>
                <tr>
                    <th>Product Image</th>
                    <th>Product Name</th>
                    <th>Product Price</th>
                    <th>Product Qty</th>
                </tr>
                </thead>
                <tbody>
                @foreach($order->orderDetails as $data)
                <tr>
                    <td>
                        <img src="{{ asset('/product/'.$data->product?->image) }}" height="50" width="50" />
                    </td>
                    <td>
                        {{ $data->product?->name }}
                    </td>
                    <td>
                        Tk.{{ $data?->price }}
                    </td>
                    <td>
                        {{ $data?->qty }}
                    </td>
                </tr>
                @endforeach
                </tbody>
            </table>

            <hr/>
            <span style="font-size: 22px; font-weight: 600; text-transform: capitalize">Billing / Shipping Details</span>
            <table class="table table-hover table-bordered">
                <thead>
                <tr>
                    <th>Customer Name</th>
                    <th>Email</th>
                    <th>Division</th>
                    <th>District</th>
                    <th>Post Code</th>
                    <th>Address</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>{{ $order->billing?->full_name }}</td>
                    <td>{{ $order->billing?->email }}</td>
                    <td>{{ $order->billing?->division }}</td>
                    <td>{{ $order->billing?->district }}</td>
                    <td>{{ $order->billing?->post_code }}</td>
                    <td>{{ $order->billing?->address }}</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
