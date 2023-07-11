@extends('layouts.admin.master')

@section('content')
    <h1 class="mt-4">Testimonial Edit</h1>
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Testimonial Edit
        </div>
        <div class="row" style="padding: 30px;">
            <div class="col-md-2"></div>
            <div class="col-md-8" style="box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;">
                    <div class="card-body">
                        <x-admin.action-button href="{{ route('testimonial.list') }}" class="btn-primary float-end"> <i class="fas fa-arrow-alt-circle-left"></i> Manage</x-admin.action-button>
                        <form action="{{ route('testimonial.update', $testimonial->id) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <x-admin.input-group-div style="width: calc( 100% - 10px ); margin-top: 20px;">
                                <x-admin.label for="reviewer_name_en">Reviewer Name</x-admin.label>
                                <x-admin.input type="text" id="reviewer_name_en" name="reviewer_name_en" value="{{ $testimonial?->reviewer_name_en }}" placeholder="Enter reviewer name..."></x-admin.input>
                                <x-admin.input-error for="reviewer_name_en" class="mt-2"></x-admin.input-error>
                            </x-admin.input-group-div>

                            <x-admin.input-group-div style="width: calc( 100% - 10px ); margin-top: 20px;">
                                <x-admin.label for="reviewer_name_bn">Bangla Reviewer Name</x-admin.label>
                                <x-admin.input type="text" id="reviewer_name_bn" name="reviewer_name_bn" value="{{ $testimonial?->reviewer_name_bn }}" placeholder="Enter reviewer name..."></x-admin.input>
                                <x-admin.input-error for="reviewer_name_bn" class="mt-2"></x-admin.input-error>
                            </x-admin.input-group-div>

                            <x-admin.input-group-div style="width: calc( 100% - 10px ); margin-top: 20px;">
                                <x-admin.label for="reviewer_designation_en">Reviewer Designation</x-admin.label>
                                <x-admin.input type="text" id="reviewer_designation_en" name="reviewer_designation_en" value="{{ $testimonial?->reviewer_designation_en }}" placeholder="Enter reviewer designation..."></x-admin.input>
                                <x-admin.input-error for="reviewer_designation_en" class="mt-2"></x-admin.input-error>
                            </x-admin.input-group-div>

                            <x-admin.input-group-div style="width: calc( 100% - 10px ); margin-top: 20px;">
                                <x-admin.label for="reviewer_designation_bn">Bangla Reviewer Designation</x-admin.label>
                                <x-admin.input type="text" id="reviewer_designation_bn" name="reviewer_designation_bn" value="{{ $testimonial?->reviewer_designation_bn }}" placeholder="Enter reviewer designation..."></x-admin.input>
                                <x-admin.input-error for="reviewer_designation_bn" class="mt-2"></x-admin.input-error>
                            </x-admin.input-group-div>

                            <x-admin.input-group-div style="width: calc( 100% - 10px ); margin-top: 20px;">
                                <x-admin.label for="short_comment_en">Short Comment</x-admin.label>
                                <x-admin.input type="text" id="short_comment_en" name="short_comment_en" value="{{ $testimonial?->short_comment_en }}" placeholder="Enter short comment..."></x-admin.input>
                                <x-admin.input-error for="short_comment_en" class="mt-2"></x-admin.input-error>
                            </x-admin.input-group-div>

                            <x-admin.input-group-div style="width: calc( 100% - 10px ); margin-top: 20px;">
                                <x-admin.label for="short_comment_bn">Bangla Short Comment</x-admin.label>
                                <x-admin.input type="text" id="short_comment_bn" name="short_comment_bn" value="{{ $testimonial?->short_comment_bn }}" placeholder="Enter short comment..."></x-admin.input>
                                <x-admin.input-error for="short_comment_bn" class="mt-2"></x-admin.input-error>
                            </x-admin.input-group-div>

                            <x-admin.input-group-div style="width: calc( 100% - 10px ); margin-top: 20px;">
                                <x-admin.label for="long_comment_en">Long Comment</x-admin.label>
                                <x-admin.textarea id="long_comment_en" class="ckeditor" rows="8" name="long_comment_en" value="{{ $testimonial?->long_comment_en }}" placeholder="Enter long description..."></x-admin.textarea>
                                <x-admin.input-error for="long_comment_en" class="mt-2"></x-admin.input-error>
                            </x-admin.input-group-div>

                            <x-admin.input-group-div style="width: calc( 100% - 10px ); margin-top: 20px;">
                                <x-admin.label for="long_comment_bn">Bangla Long Comment</x-admin.label>
                                <x-admin.textarea id="long_comment_bn" class="ckeditor" rows="8" name="long_comment_bn" value="{{ $testimonial?->long_comment_bn }}" placeholder="Enter long description..."></x-admin.textarea>
                                <x-admin.input-error for="long_comment_bn" class="mt-2"></x-admin.input-error>
                            </x-admin.input-group-div>

                            <x-admin.input-group-div style="width: calc( 100% - 10px ); margin-top: 20px;">
                                <x-admin.label for="reviewer_image">Reviewer reviewer_image</x-admin.label>
                                <x-admin.input type="file" id="reviewer_image" name="reviewer_image"></x-admin.input>
                                <x-admin.input-error for="reviewer_image" class="mt-2"></x-admin.input-error>
                                <img src="{{ asset('testimonial/'.$testimonial->reviewer_image) }}" height="50px" width="50px" alt="image">
                            </x-admin.input-group-div>

                            <x-admin.submit-button class="mt-2"><i class="fas fa-plus-circle"></i> Create</x-admin.submit-button>
                        </form>
                    </div>
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>
@endsection
