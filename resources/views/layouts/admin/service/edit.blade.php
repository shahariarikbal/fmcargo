@extends('layouts.admin.master')

@section('content')
    <h1 class="mt-4">Service Edit</h1>
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Service Edit
        </div>
        <div class="row" style="padding: 30px;">
            <div class="col-md-2"></div>
            <div class="col-md-8" style="box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;">
                <div class="card-body">
                    <x-admin.action-button href="{{ route('service.list') }}" class="btn-primary float-end"> <i class="fas fa-arrow-alt-circle-left"></i> Manage</x-admin.action-button>
                    <form action="{{ route('service.update', $service?->id) }}" method="post">
                        @csrf
                        <x-admin.input-group-div style="width: calc( 100% - 10px ); margin-top: 20px;">
                            <x-admin.label for="title">Title</x-admin.label>
                            <x-admin.input type="text" id="title" name="title" value="{{ $service?->name ?? old('title') }}" placeholder="Enter service title..."></x-admin.input>
                            <x-admin.input-error for="title" class="mt-2"></x-admin.input-error>
                        </x-admin.input-group-div>
                        <x-admin.input-group-div style="width: calc( 100% - 10px ); margin-top: 20px;">
                            <x-admin.label for="image">Image</x-admin.label>
                            <x-admin.input type="file" id="image" name="image"></x-admin.input>
                            <img src="{{ asset('product/'.$service->image) }}" alt="product" height="100px">
                            <x-admin.input-error for="image" class="mt-2"></x-admin.input-error>
                        </x-admin.input-group-div>
                        <x-admin.submit-button class="mt-2"><i class="fas fa-plus-circle"></i> Update</x-admin.submit-button>
                    </form>
                </div>
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>
@endsection
