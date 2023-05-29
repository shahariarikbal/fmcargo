@extends('layouts.admin.master')

@section('title')
    Admin | Booking Create
@endsection

@section('content')
    <h1 class="mt-4">Customer Booking Create</h1>
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Customer Booking Create
        </div>
        <div class="row" style="padding: 30px;">
            <div class="col-md-2"></div>
            <div class="col-md-8" style="box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;">
                <form action="{{ url('/customer/booking/store') }}" method="post">
                    @csrf
                    <div class="card-body">
                        <x-admin.action-button href="{{ route('customer.booking.list') }}" class="btn-primary float-end"> <i class="fas fa-arrow-alt-circle-left"></i> Manage</x-admin.action-button>
                        <div class="input-group">
                            <x-admin.input-group-div style="width: calc( 33.33% - 10px ); margin-right: 10px;">
                                <x-admin.label for="name">Name</x-admin.label>
                                <x-admin.input type="text" id="name" name="name" value="{{ old('name') }}" placeholder="Enter your full name..."></x-admin.input>
                                <x-admin.input-error for="name" class="mt-2"></x-admin.input-error>
                            </x-admin.input-group-div>

                            <x-admin.input-group-div style="width: calc( 33.33% - 10px ); margin-right: 10px;">
                                <x-admin.label for="phone">Phone</x-admin.label>
                                <x-admin.input type="tel" id="phone" name="phone" value="{{ old('phone') }}" placeholder="Enter your phone number..."></x-admin.input>
                                <x-admin.input-error for="phone" class="mt-2"></x-admin.input-error>
                            </x-admin.input-group-div>

                            <x-admin.input-group-div style="width: calc( 33.33% - 10px ); margin-right: 10px;">
                                <x-admin.label for="email">Email</x-admin.label>
                                <x-admin.input type="email" id="email" name="email" value="{{ old('email') }}" placeholder="Enter your email..."></x-admin.input>
                                <x-admin.input-error for="email" class="mt-2"></x-admin.input-error>
                            </x-admin.input-group-div>
                        </div>

                        <div class="input-group">
                            <x-admin.input-group-div style="width: calc( 50% - 10px ); margin-right: 10px;">
                                <x-admin.label for="pick_up_address">Pick up address</x-admin.label>
                                <x-admin.textarea name="pick_up_address" id="pick_up_address" rows="5" placeholder="Enter Pick up address"></x-admin.textarea>
                                <x-admin.input-error for="pick_up_address" class="mt-2"></x-admin.input-error>
                            </x-admin.input-group-div>

                            <x-admin.input-group-div style="width: calc( 50% - 10px ); margin-right: 10px;">
                                <x-admin.label for="drop_of_address">Drop of address</x-admin.label>
                                <x-admin.textarea name="drop_of_address" id="drop_of_address" rows="5" placeholder="Enter Drop of address"></x-admin.textarea>
                                <x-admin.input-error for="drop_of_address" class="mt-2"></x-admin.input-error>
                            </x-admin.input-group-div>
                        </div>

                        <div class="input-group">
                            <x-admin.input-group-div style="width: calc( 50% - 10px ); margin-right: 10px;">
                                <x-admin.label for="weight_pcs">Weight / Pcs</x-admin.label>
                                <x-admin.input name="weight_pcs" id="weight_pcs" placeholder="Enter Product weight or pcs"></x-admin.input>
                                <x-admin.input-error for="weight_pcs" class="mt-2"></x-admin.input-error>
                            </x-admin.input-group-div>

                            <x-admin.input-group-div style="width: calc( 50% - 10px )">
                                <x-admin.label for="unit">Unit</x-admin.label>
                                <x-admin.select-option name="unit" id="unit">
                                    <option selected disabled>Select A Unit</option>
                                    <option value="kg">KG</option>
                                    <option value="pcs">Pcs</option>
                                </x-admin.select-option>
                                <x-admin.input-error for="unit" class="mt-2"></x-admin.input-error>
                            </x-admin.input-group-div>
                        </div>

                        <div class="input-group">
                            <x-admin.input-group-div style="width: calc( 100% - 10px ); margin-right: 10px;">
                                <x-admin.label for="product_description">Parcel details</x-admin.label>
                                <x-admin.textarea name="product_description" id="product_description" rows="5" placeholder="Enter Parcel details"></x-admin.textarea>
                                <x-admin.input-error for="product_description" class="mt-2"></x-admin.input-error>
                            </x-admin.input-group-div>
                        </div>
                        <x-admin.submit-button class="mt-2"><i class="fas fa-plus-circle"></i> Create</x-admin.submit-button>
                    </div>
                </form>
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>
@endsection
