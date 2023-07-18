@extends('layouts.admin.master')

@section('content')
    <h1 class="mt-4">Credentials</h1>
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Credentials
        </div>
        <div class="row" style="padding: 30px;">
            <div class="col-md-2"></div>
            <div class="col-md-8" style="box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;">
                <div class="card-body">
                    <form action="{{ route('update.credential') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <x-admin.input-group-div style="width: calc( 100% - 10px ); margin-top: 20px;">
                            <x-admin.label for="email">Email</x-admin.label>
                            <x-admin.input type="email" id="email" name="email" value="{{ $credential?->email ?? old('email') }}" placeholder="Enter email..."></x-admin.input>
                            <x-admin.input-error for="email" class="mt-2"></x-admin.input-error>
                        </x-admin.input-group-div>

                        <x-admin.input-group-div style="width: calc( 100% - 10px ); margin-top: 20px;">
                            <x-admin.label for="old_password">Enter Old Password</x-admin.label>
                            <x-admin.input type="password" id="old_password" name="old_password" value="" placeholder="Enter old password..."></x-admin.input>
                            <x-admin.input-error for="old_password" class="mt-2"></x-admin.input-error>
                        </x-admin.input-group-div>

                        <x-admin.input-group-div style="width: calc( 100% - 10px ); margin-top: 20px;">
                            <x-admin.label for="new_password">Enter New Password</x-admin.label>
                            <x-admin.input type="password" id="new_password" name="new_password" value="" placeholder="Enter new password..."></x-admin.input>
                            <x-admin.input-error for="new_password" class="mt-2"></x-admin.input-error>
                        </x-admin.input-group-div>

                        <x-admin.input-group-div style="width: calc( 100% - 10px ); margin-top: 20px;">
                            <x-admin.label for="confirm_password">Confirm New Password</x-admin.label>
                            <x-admin.input type="password" id="confirm_password" name="confirm_password" value="" placeholder="Confirm new password..."></x-admin.input>
                            <x-admin.input-error for="confirm_password" class="mt-2"></x-admin.input-error>
                        </x-admin.input-group-div>

                        <x-admin.submit-button class="mt-2"><i class="fas fa-plus-circle"></i> Update</x-admin.submit-button>
                    </form>
                </div>
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>
@endsection
