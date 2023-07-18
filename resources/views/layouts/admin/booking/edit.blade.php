@extends('layouts.admin.master')

@section('title')
    Admin | Booking Edit
@endsection

@section('content')
    <h1 class="mt-4">Customer Booking Edit</h1>
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Customer Booking Edit
        </div>
        <div class="row" style="padding: 30px;">
            <div class="col-md-2"></div>
            <div class="col-md-8" style="box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;">
                <form action="{{ route('customer.booking.update', $booking->id) }}" method="post">
                    @csrf
                    <div class="card-body">
                        <x-admin.action-button href="{{ route('customer.booking.list') }}" class="btn-primary float-end"> <i class="fas fa-arrow-alt-circle-left"></i> Manage</x-admin.action-button>
                        <div class="input-group">
                            <x-admin.input-group-div style="width: calc( 33.33% - 10px ); margin-right: 10px;">
                                <x-admin.label for="name">Name</x-admin.label>
                                <x-admin.input type="text" id="name" name="name" value="{{ $booking->name ?? old('name') }}" placeholder="Enter your full name..."></x-admin.input>
                                <x-admin.input-error for="name" class="mt-2"></x-admin.input-error>
                            </x-admin.input-group-div>

                            <x-admin.input-group-div style="width: calc( 33.33% - 10px ); margin-right: 10px;">
                                <x-admin.label for="phone">Phone</x-admin.label>
                                <x-admin.input type="tel" id="phone" name="phone" value="{{ $booking->phone ?? old('phone') }}" placeholder="Enter your phone number..."></x-admin.input>
                                <x-admin.input-error for="phone" class="mt-2"></x-admin.input-error>
                            </x-admin.input-group-div>

                            <x-admin.input-group-div style="width: calc( 33.33% - 10px ); margin-right: 10px;">
                                <x-admin.label for="email">Email</x-admin.label>
                                <x-admin.input type="email" id="email" name="email" value="{{ $booking->email ?? old('email') }}" placeholder="Enter your email..."></x-admin.input>
                                <x-admin.input-error for="email" class="mt-2"></x-admin.input-error>
                            </x-admin.input-group-div>
                        </div>

                        <div class="input-group">
                            <x-admin.input-group-div style="width: calc( 50% - 10px ); margin-right: 10px;">
                                <x-admin.label for="pick_up_address">Pick up address</x-admin.label>
                                <x-admin.textarea name="pick_up_address" id="pick_up_address" rows="5" placeholder="Enter Pick up address">{{ $booking->pick_up_address ?? old('pick_up_address') }}</x-admin.textarea>
                                <x-admin.input-error for="pick_up_address" class="mt-2"></x-admin.input-error>
                            </x-admin.input-group-div>

                            <x-admin.input-group-div style="width: calc( 50% - 10px ); margin-right: 10px;">
                                <x-admin.label for="drop_of_address">Drop of address</x-admin.label>
                                <x-admin.textarea name="drop_of_address" id="drop_of_address" rows="5" placeholder="Enter Drop of address">{{ $booking->drop_of_address ?? old('drop_of_address') }}</x-admin.textarea>
                                <x-admin.input-error for="drop_of_address" class="mt-2"></x-admin.input-error>
                            </x-admin.input-group-div>
                        </div>

                        <div class="input-group">
                            <x-admin.input-group-div style="width: calc( 50% - 10px ); margin-right: 10px;">
                                <x-admin.label for="weight_pcs">Weight / Pcs</x-admin.label>
                                <x-admin.input name="weight_pcs" value="{{ $booking->weight_pcs ?? old('weight_pcs') }}" id="weight_pcs" placeholder="Enter Product weight or pcs"></x-admin.input>
                                <x-admin.input-error for="weight_pcs" class="mt-2"></x-admin.input-error>
                            </x-admin.input-group-div>

                            <x-admin.input-group-div style="width: calc( 50% - 10px )">
                                <x-admin.label for="unit">Unit</x-admin.label>
                                <x-admin.select-option name="unit" id="unit">
                                    <option selected disabled>Select A Unit</option>
                                    <option value="kg" {{ $booking->unit == 'kg' ? 'selected' : ' ' }}>KG</option>
                                    <option value="pcs" {{ $booking->unit == 'pcs' ? 'selected' : ' ' }}>Pcs</option>
                                </x-admin.select-option>
                                <x-admin.input-error for="unit" class="mt-2"></x-admin.input-error>
                            </x-admin.input-group-div>
                        </div>

                        <div class="input-group">
                            <x-admin.input-group-div style="width: calc( 50% - 10px )">
                                <x-admin.label for="status">Select Status</x-admin.label>
                                <x-admin.select-option name="status" id="status">
                                    <option selected disabled>Select Status</option>
                                    <option value="1" {{$booking->status == '1' ? 'selected': ''}}>pending</option>
                                    <option value="2" {{$booking->status == '2' ? 'selected': ''}}>warehouse</option>
                                    <option value="3" {{$booking->status == '3' ? 'selected': ''}}>shipping</option>
                                    <option value="4" {{$booking->status == '4' ? 'selected': ''}}>customs</option>
                                    <option value="5"{{$booking->status == '5' ? 'selected': ''}}>BD warehouse</option>
                                    <option value="6"{{$booking->status == '6' ? 'selected': ''}}>Delivered</option>
                                </x-admin.select-option>
                                <x-admin.input-error for="status" class="mt-2"></x-admin.input-error>
                            </x-admin.input-group-div>
                        </div>

                        <div class="input-group">
                            <x-admin.input-group-div style="width: calc( 100% - 10px ); margin-right: 10px;">
                                <x-admin.label for="product_description">Parcel details</x-admin.label>
                                <x-admin.textarea name="product_description" id="product_description" rows="5" placeholder="Enter Parcel details">{{ $booking->product_description ?? old('product_description') }}</x-admin.textarea>
                                <x-admin.input-error for="product_description" class="mt-2"></x-admin.input-error>
                            </x-admin.input-group-div>
                        </div>
                        <x-admin.submit-button class="mt-2"><i class="fas fa-plus-circle"></i> Update</x-admin.submit-button>
                    </div>
                </form>
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>
@endsection
