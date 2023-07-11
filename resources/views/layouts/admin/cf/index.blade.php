@extends('layouts.admin.master')

@section('content')
    <h1 class="mt-4">Settings</h1>
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Settings
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

                        {{--  <x-admin.input-group-div style="width: calc( 100% - 10px ); margin-top: 20px;">
                            <x-admin.label for="phone">Phone</x-admin.label>
                            <x-admin.input type="text" id="phone" name="phone" value="{{ $setting?->phone ?? old('phone') }}" placeholder="Enter phone..."></x-admin.input>
                            <x-admin.input-error for="phone" class="mt-2"></x-admin.input-error>
                        </x-admin.input-group-div>

                        <x-admin.input-group-div style="width: calc( 100% - 10px ); margin-top: 20px;">
                            <x-admin.label for="facebook">Facebook Link</x-admin.label>
                            <x-admin.input type="url" id="facebook" name="facebook" value="{{ $setting?->facebook }}" placeholder="Enter Facebook Link..."></x-admin.input>
                            <x-admin.input-error for="facebook" class="mt-2"></x-admin.input-error>
                        </x-admin.input-group-div>

                        <x-admin.input-group-div style="width: calc( 100% - 10px ); margin-top: 20px;">
                            <x-admin.label for="whatsapp">WhatsApp Number</x-admin.label>
                            <x-admin.input type="text" id="whatsapp" name="whatsapp" value="{{ $setting?->whatsapp }}" placeholder="Enter whatsapp..."></x-admin.input>
                            <x-admin.input-error for="whatsapp" class="mt-2"></x-admin.input-error>
                        </x-admin.input-group-div>

                        <x-admin.input-group-div style="width: calc( 100% - 10px ); margin-top: 20px;">
                            <x-admin.label for="wechat">Youtube Link</x-admin.label>
                            <x-admin.input type="url" id="wechat" name="wechat" value="{{ $setting?->wechat }}" placeholder="Enter wechat..."></x-admin.input>
                            <x-admin.input-error for="wechat" class="mt-2"></x-admin.input-error>
                        </x-admin.input-group-div>

                        <x-admin.input-group-div style="width: calc( 100% - 10px ); margin-top: 20px;">
                            <x-admin.label for="address">Address</x-admin.label>
                            <x-admin.textarea id="address" rows="8" name="address" placeholder="Enter Address...">{{ strip_tags($setting->address) }}</x-admin.textarea>
                            <x-admin.input-error for="address" class="mt-2"></x-admin.input-error>
                        </x-admin.input-group-div>

                        <x-admin.input-group-div style="width: calc( 100% - 10px ); margin-top: 20px;">
                            <x-admin.label for="logo">Logo</x-admin.label>
                            <x-admin.input type="file" id="logo" name="logo"></x-admin.input>
                            <img src="{{ asset('setting/'.$setting->logo) }}" alt="logo" height="100px">
                            <x-admin.input-error for="logo" class="mt-2"></x-admin.input-error>
                        </x-admin.input-group-div>  --}}

                        <x-admin.submit-button class="mt-2"><i class="fas fa-plus-circle"></i> Update</x-admin.submit-button>
                    </form>
                </div>
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>
@endsection
