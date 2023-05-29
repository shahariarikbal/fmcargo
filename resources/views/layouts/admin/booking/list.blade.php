@extends('layouts.admin.master')

@section('title')
    Admin | Booking List
@endsection

@section('content')
    <h1 class="mt-4">Customer Booking List</h1>
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Customer Booking List Table
            <x-admin.action-button href="{{ route('customer.booking') }}" class="btn-success float-end"><i class="fas fa-plus-circle"></i> Add</x-admin.action-button>
        </div>
        <div class="card-body">
            <table id="datatablesSimple">
                <thead>
                <tr>
                    <th>SL</th>
                    <th>BookingID</th>
                    <th>Booking Date</th>
                    <th>Name</th>
                    <th>Phone</th>
                    <th>Weight & Unit</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($bookings->chunk(20) as $booking)
                    @foreach($booking as $i => $data)
                        <tr>
                            <td>{{ $i+1 }}</td>
                            <td>
                                <a href="{{ route('customer.booking.view', $data->id) }}">{{ $data->bookingId }}</a>
                            </td>
                            <td>{{ $data->created_at->format('m/d/Y') }}</td>
                            <td>{{ $data->name }}</td>
                            <td>{{ $data->phone }}</td>
                            <td>{{ $data->weight_pcs }} {{ $data->unit }}</td>
                            <td>
                                @if($data->status == 1)
                                    <x-admin.action-button href="#" title="Warehouse">Pending</x-admin.action-button>
                                @elseif($data->status == 2)
                                    <x-admin.action-button href="#" title="Shipping">Warehouse</x-admin.action-button>
                                @elseif($data->status == 3)
                                    <x-admin.action-button href="#" title="Customs">Shipping</x-admin.action-button>
                                @elseif($data->status == 4)
                                    <x-admin.action-button href="#" title="BD Warehouse">Customs</x-admin.action-button>
                                @elseif($data->status == 5)
                                    <x-admin.action-button href="#" title="Delivered">BD Warehouse</x-admin.action-button>
                                @else
                                    <x-admin.action-button href="#" title="Delivered" class="btn-primary">Delivered</x-admin.action-button>
                                @endif
                            </td>
                            <td>
                                @if($data->status == 1)
                                    <x-admin.action-button href="{{ route('customer.booking.pending', $data->id) }}" title="Warehouse" class="btn-secondary"><i class="fa-solid fa-vial"></i></x-admin.action-button>
                                @elseif($data->status == 2)
                                    <x-admin.action-button href="{{ route('customer.booking.warehouse', $data->id) }}" title="Shipping" class="btn-warning"><i class="fa-solid fa-house-lock"></i></x-admin.action-button>
                                @elseif($data->status == 3)
                                    <x-admin.action-button href="{{ route('customer.booking.shipping', $data->id) }}" title="Customs" class="btn-primary"><i class="fa-solid fa-truck-fast"></i></x-admin.action-button>
                                @elseif($data->status == 4)
                                    <x-admin.action-button href="{{ route('customer.booking.customs', $data->id) }}" title="BD Warehouse" class="btn-info"><i class="fa-solid fa-person-military-pointing"></i></x-admin.action-button>
                                @elseif($data->status == 5)
                                    <x-admin.action-button href="{{ route('customer.booking.bd-warehouse', $data->id) }}" title="Delivered" class="btn-success"><i class="fa-solid fa-house-lock"></i></x-admin.action-button>
                                @else
                                    <x-admin.action-button href="#" title="Delivered" class="btn-primary"><i class="fa-solid fa-circle-check"></i></x-admin.action-button>
                                @endif
                                <x-admin.action-button href="{{ route('customer.booking.view', $data->id) }}" title="View Details" class="btn-primary"><i class="fas fa-eye"></i></x-admin.action-button>
                                <x-admin.action-button href="{{ route('customer.booking.edit', $data->id) }}" title="Edit" class="btn-info"><i class="fas fa-pen-to-square"></i></x-admin.action-button>
                                <x-admin.action-button href="{{ route('customer.booking.delete', $data->id) }}" title="Delete" onclick="return confirm('Are you sure delete this info ?')" class="btn-danger"><i class="fas fa-trash-alt"></i></x-admin.action-button>
                            </td>
                        </tr>
                    @endforeach
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
