@extends('layouts.admin.master')

@section('content')
    <h1 class="mt-4">C & F</h1>
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            C & F
        </div>
        <div class="row" style="padding: 30px;">
            <div class="col-md-2"></div>
            <div class="col-md-8" style="box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;">
                <div class="card-body">
                    <form action="{{ route('setting.update', $setting->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <x-admin.input-group-div style="width: calc( 100% - 10px ); margin-top: 20px;">
                            <x-admin.label for="header_title_en">Header Title En</x-admin.label>
                            <x-admin.input type="text" id="header_title_en" name="header_title_en" value="{{ $clear_forwarding?->header_title_en ?? old('header_title_en') }}" placeholder="Enter header_title_en..."></x-admin.input>
                            <x-admin.input-error for="header_title_en" class="mt-2"></x-admin.input-error>
                        </x-admin.input-group-div>

                        <x-admin.submit-button class="mt-2"><i class="fas fa-plus-circle"></i> Update</x-admin.submit-button>
                    </form>
                </div>
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>
@endsection
