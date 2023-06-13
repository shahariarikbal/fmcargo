@extends('layouts.admin.master')

@section('title')
    Admin | Order List
@endsection

@section('content')
    <h1 class="mt-4">Order List</h1>
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Order List Table
        </div>
        <div class="card-body">
            <table id="datatablesSimple">
                <thead>
                <tr>
                    <th>SL</th>
                    <th>Invoice ID</th>
                    <th>Customer Name</th>
                    <th>Product Name</th>
                    <th>Total Price</th>
                    <th>Total Qty</th>
                    <th>Payment Type</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($orders as $order)
                    <tr>
                        <td>{{ $loop->index+1 }}</td>
                        <td>{{ $order?->invoice_id }}</td>
                        <td>{{ $order->billing?->full_name }}</td>
                        <td>
                            @foreach($order->orderDetails->product as $product)
                                <p>{{ $product->name }}</p>
                            @endforeach
                        </td>
                        <td>{{ $order->total_price }}</td>
                        <td>{{ $order->total_qty }}</td>
                        <td>
                            <x-admin.action-button href="{{ route('admin.order.view', $order->id) }}" title="Edit" class="btn-info"><i class="fas fa-pen-to-square"></i></x-admin.action-button>
                            <x-admin.action-button href="{{ route('admin.order.delete', $order->id) }}" title="Delete" onclick="return confirm('Are you sure delete this info ?')" class="btn-danger"><i class="fas fa-trash-alt"></i></x-admin.action-button>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
