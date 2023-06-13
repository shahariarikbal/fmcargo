@extends('layouts.admin.master')

@section('content')
    <h1 class="mt-4">Testimonial Create</h1>
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Testimonial Create
        </div>
        <div class="row" style="padding: 30px;">
            <div class="col-md-2"></div>
            <div class="col-md-8" style="box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;">
                    <div class="card-body">
                        <x-admin.action-button href="{{ route('testimonial.list') }}" class="btn-primary float-end"> <i class="fas fa-arrow-alt-circle-left"></i> Manage</x-admin.action-button>
                        <form action="{{ route('testimonial.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <x-admin.input-group-div style="width: calc( 100% - 10px ); margin-top: 20px;">
                                <x-admin.label for="reviewer_name">Reviewer Name</x-admin.label>
                                <x-admin.input type="text" id="reviewer_name" name="reviewer_name" value="{{ old('reviewer_name') }}" placeholder="Enter reviewer name..."></x-admin.input>
                                <x-admin.input-error for="reviewer_name" class="mt-2"></x-admin.input-error>
                            </x-admin.input-group-div>

                            <x-admin.input-group-div style="width: calc( 100% - 10px ); margin-top: 20px;">
                                <x-admin.label for="reviewer_designation">Reviewer Designation</x-admin.label>
                                <x-admin.input type="text" id="reviewer_designation" name="reviewer_designation" value="{{ old('reviewer_designation') }}" placeholder="Enter reviewer designation..."></x-admin.input>
                                <x-admin.input-error for="reviewer_designation" class="mt-2"></x-admin.input-error>
                            </x-admin.input-group-div>

                            <x-admin.input-group-div style="width: calc( 100% - 10px ); margin-top: 20px;">
                                <x-admin.label for="short_comment">Short Comment</x-admin.label>
                                <x-admin.input type="text" id="short_comment" name="short_comment" value="{{ old('short_comment') }}" placeholder="Enter short comment..."></x-admin.input>
                                <x-admin.input-error for="short_comment" class="mt-2"></x-admin.input-error>
                            </x-admin.input-group-div>

                            <x-admin.input-group-div style="width: calc( 100% - 10px ); margin-top: 20px;">
                                <x-admin.label for="long_comment">Long Comment</x-admin.label>
                                <x-admin.textarea id="long_comment" class="ckeditor" rows="8" name="long_comment" value="{{ old('long_comment') }}" placeholder="Enter long description..."></x-admin.textarea>
                                <x-admin.input-error for="long_comment" class="mt-2"></x-admin.input-error>
                            </x-admin.input-group-div>

                            <x-admin.input-group-div style="width: calc( 100% - 10px ); margin-top: 20px;">
                                <x-admin.label for="reviewer_image">Reviewer reviewer_image</x-admin.label>
                                <x-admin.input type="file" id="reviewer_image" name="reviewer_image"></x-admin.input>
                                <x-admin.input-error for="reviewer_image" class="mt-2"></x-admin.input-error>
                            </x-admin.input-group-div>

                            <x-admin.submit-button class="mt-2"><i class="fas fa-plus-circle"></i> Create</x-admin.submit-button>
                        </form>
                    </div>
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>
@endsection
