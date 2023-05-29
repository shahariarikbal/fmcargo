@extends('layouts.admin.master')

@section('content')
    <h1 class="mt-4">Product Create</h1>
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Product Create
        </div>
        <div class="row" style="padding: 30px;">
            <div class="col-md-2"></div>
            <div class="col-md-8" style="box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;">
                    <div class="card-body">
                        <x-admin.action-button href="{{ route('product.list') }}" class="btn-primary float-end"> <i class="fas fa-arrow-alt-circle-left"></i> Manage</x-admin.action-button>
                        <form action="{{ route('product.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <x-admin.input-group-div style="width: calc( 100% - 10px ); margin-top: 20px;">
                                <x-admin.label for="name">Name</x-admin.label>
                                <x-admin.input type="text" id="name" name="name" value="{{ old('name') }}" placeholder="Enter product name..."></x-admin.input>
                                <x-admin.input-error for="name" class="mt-2"></x-admin.input-error>
                            </x-admin.input-group-div>

                            <x-admin.input-group-div style="width: calc( 100% - 10px ); margin-top: 20px;">
                                <x-admin.label for="sku">SKU</x-admin.label>
                                <x-admin.input type="text" id="sku" name="sku" value="{{ old('sku') }}" placeholder="Enter product sku..."></x-admin.input>
                                <x-admin.input-error for="sku" class="mt-2"></x-admin.input-error>
                            </x-admin.input-group-div>

                            <x-admin.input-group-div style="width: calc( 100% - 10px ); margin-top: 20px;">
                                <x-admin.label for="cat_id">Category</x-admin.label>
                                <x-admin.select-option class="form-control" name="cat_id" id="cat_id">
                                    <option selected disabled>Select A Category</option>
                                    @foreach($data['categories'] as $category)
                                    <option value="{{ $category?->id }}">{{ $category?->name }}</option>
                                    @endforeach
                                </x-admin.select-option>
                                <x-admin.input-error for="cat_id" class="mt-2"></x-admin.input-error>
                            </x-admin.input-group-div>

                            <x-admin.input-group-div style="width: calc( 100% - 10px ); margin-top: 20px;">
                                <x-admin.label for="brand_id">Brand</x-admin.label>
                                <x-admin.select-option class="form-control" name="brand_id" id="brand_id">
                                    <option selected disabled>Select A Brand</option>
                                    @foreach($data['brands'] as $brand)
                                    <option value="{{ $brand?->id }}">{{ $brand?->name }}</option>
                                    @endforeach
                                </x-admin.select-option>
                                <x-admin.input-error for="brand_id" class="mt-2"></x-admin.input-error>
                            </x-admin.input-group-div>

                            <x-admin.input-group-div style="width: calc( 100% - 10px ); margin-top: 20px;">
                                <x-admin.label for="price">Price</x-admin.label>
                                <x-admin.input type="text" id="price" name="price" value="{{ old('price') }}" placeholder="Enter product price..."></x-admin.input>
                                <x-admin.input-error for="price" class="mt-2"></x-admin.input-error>
                            </x-admin.input-group-div>

                            <x-admin.input-group-div style="width: calc( 100% - 10px ); margin-top: 20px;">
                                <x-admin.label for="qty">Qty</x-admin.label>
                                <x-admin.input type="number" id="qty" name="qty" value="{{ old('qty') }}" placeholder="Enter product qty..."></x-admin.input>
                                <x-admin.input-error for="qty" class="mt-2"></x-admin.input-error>
                            </x-admin.input-group-div>

                            <x-admin.input-group-div style="width: calc( 100% - 10px ); margin-top: 20px;">
                                <x-admin.label for="short_description">Short Description</x-admin.label>
                                <x-admin.textarea id="short_description" rows="8" name="short_description" value="{{ old('short_description') }}" placeholder="Enter product short description..."></x-admin.textarea>
                                <x-admin.input-error for="short_description" class="mt-2"></x-admin.input-error>
                            </x-admin.input-group-div>

                            <x-admin.input-group-div style="width: calc( 100% - 10px ); margin-top: 20px;">
                                <x-admin.label for="long_description">Long Description</x-admin.label>
                                <x-admin.textarea id="long_description" class="ckeditor" rows="8" name="long_description" value="{{ old('long_description') }}" placeholder="Enter product long description..."></x-admin.textarea>
                                <x-admin.input-error for="long_description" class="mt-2"></x-admin.input-error>
                            </x-admin.input-group-div>

                            <x-admin.input-group-div style="width: calc( 100% - 10px ); margin-top: 20px;">
                                <x-admin.label for="image">Image</x-admin.label>
                                <x-admin.input type="file" id="image" name="image"></x-admin.input>
                                <x-admin.input-error for="image" class="mt-2"></x-admin.input-error>
                            </x-admin.input-group-div>

                            <x-admin.input-group-div style="width: calc( 100% - 10px ); margin-top: 20px;">
                                <x-admin.label for="gallery_image">Gallery Image</x-admin.label>
                                <x-admin.input type="file" id="gallery_image" name="gallery_image" multiple></x-admin.input>
                                <x-admin.input-error for="gallery_image" class="mt-2"></x-admin.input-error>
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
