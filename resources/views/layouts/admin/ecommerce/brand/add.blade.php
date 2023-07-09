@extends('layouts.admin.master')

@section('content')
    <h1 class="mt-4">Brand Create</h1>
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Brand Create
        </div>
        <div class="row" style="padding: 30px;">
            <div class="col-md-2"></div>
            <div class="col-md-8" style="box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;">
                    <div class="card-body">
                        <x-admin.action-button href="{{ route('brand.list') }}" class="btn-primary float-end"> <i class="fas fa-arrow-alt-circle-left"></i> Manage</x-admin.action-button>
                        <form action="{{ route('brand.store') }}" method="post">
                            @csrf
                            <x-admin.input-group-div style="width: calc( 100% - 10px ); margin-top: 20px;">
                                <x-admin.label for="name_en">Name</x-admin.label>
                                <x-admin.input type="text" id="name_en" name="name_en" value="{{ old('name_en') }}" placeholder="Enter brand name..."></x-admin.input>
                                <x-admin.input-error for="name_en" class="mt-2"></x-admin.input-error>
                            </x-admin.input-group-div>
                            <x-admin.input-group-div style="width: calc( 100% - 10px ); margin-top: 20px;">
                                <x-admin.label for="name_bn">Bangla Name</x-admin.label>
                                <x-admin.input type="text" id="name_bn" name="name_bn" value="{{ old('name_bn') }}" placeholder="Enter brand name..."></x-admin.input>
                                <x-admin.input-error for="name_bn" class="mt-2"></x-admin.input-error>
                            </x-admin.input-group-div>
                            <x-admin.submit-button class="mt-2"><i class="fas fa-plus-circle"></i> Create</x-admin.submit-button>
                        </form>
                    </div>
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>
@endsection
