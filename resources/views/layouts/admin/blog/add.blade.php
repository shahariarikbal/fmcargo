@extends('layouts.admin.master')

@section('content')
    <h1 class="mt-4">Blog Create</h1>
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Blog Create
        </div>
        <div class="row" style="padding: 30px;">
            <div class="col-md-2"></div>
            <div class="col-md-8" style="box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;">
                    <div class="card-body">
                        <x-admin.action-button href="{{ route('blog.list') }}" class="btn-primary float-end"> <i class="fas fa-arrow-alt-circle-left"></i> Manage</x-admin.action-button>
                        <form action="{{ route('blog.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <x-admin.input-group-div style="width: calc( 100% - 10px ); margin-top: 20px;">
                                <x-admin.label for="title">Title</x-admin.label>
                                <x-admin.input type="text" id="title" name="title" value="{{ old('title') }}" placeholder="Enter service title..."></x-admin.input>
                                <x-admin.input-error for="title" class="mt-2"></x-admin.input-error>
                            </x-admin.input-group-div>

                            <x-admin.input-group-div style="width: calc( 100% - 10px ); margin-top: 20px;">
                                <x-admin.label for="title_bn">Bangla Title</x-admin.label>
                                <x-admin.input type="text" id="title_bn" name="title_bn" value="{{ old('title_bn') }}" placeholder="Enter service title..."></x-admin.input>
                                <x-admin.input-error for="title_bn" class="mt-2"></x-admin.input-error>
                            </x-admin.input-group-div>

                            <x-admin.input-group-div style="width: calc( 100% - 10px ); margin-top: 20px;">
                                <x-admin.label for="description">Description</x-admin.label>
                                <x-admin.textarea id="description" class="ckeditor" name="description" placeholder="Enter service description..."></x-admin.textarea>
                                <x-admin.input-error for="description" class="mt-2"></x-admin.input-error>
                            </x-admin.input-group-div>

                            <x-admin.input-group-div style="width: calc( 100% - 10px ); margin-top: 20px;">
                                <x-admin.label for="description_bn">Bangla Description</x-admin.label>
                                <x-admin.textarea id="description_bn" class="ckeditor" name="description_bn" placeholder="Enter service description..."></x-admin.textarea>
                                <x-admin.input-error for="description_bn" class="mt-2"></x-admin.input-error>
                            </x-admin.input-group-div>

                            <x-admin.input-group-div style="width: calc( 100% - 10px ); margin-top: 20px;">
                                <x-admin.label for="image">Image</x-admin.label>
                                <x-admin.input type="file" id="image" name="image"></x-admin.input>
                                <x-admin.input-error for="image" class="mt-2"></x-admin.input-error>
                            </x-admin.input-group-div>

                            <x-admin.submit-button class="mt-2"><i class="fas fa-plus-circle"></i> Create</x-admin.submit-button>
                        </form>
                    </div>
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>
@endsection

@push('script')
    <script src="//cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $('.ckeditor').ckeditor();
        });
    </script>
@endpush
