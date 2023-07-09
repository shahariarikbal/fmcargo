@extends('layouts.admin.master')

@section('content')
    <h1 class="mt-4">Product Edit</h1>
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Product Edit
        </div>
        <div class="row" style="padding: 30px;">
            <div class="col-md-2"></div>
            <div class="col-md-8" style="box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;">
                <div class="card-body">
                    <x-admin.action-button href="{{ route('product.list') }}" class="btn-primary float-end"> <i class="fas fa-arrow-alt-circle-left"></i> Manage</x-admin.action-button>
                    <form action="{{ route('product.update', $product->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <x-admin.input-group-div style="width: calc( 100% - 10px ); margin-top: 20px;">
                            <x-admin.label for="name_en">Name</x-admin.label>
                            <x-admin.input type="text" id="name_en" name="name_en" value="{{ $product?->name_en ?? old('name_en') }}" placeholder="Enter your full name..."></x-admin.input>
                            <x-admin.input-error for="name_en" class="mt-2"></x-admin.input-error>
                        </x-admin.input-group-div>
                        <x-admin.input-group-div style="width: calc( 100% - 10px ); margin-top: 20px;">
                            <x-admin.label for="name_bn">Bangla Name</x-admin.label>
                            <x-admin.input type="text" id="name_bn" name="name_bn" value="{{ $product?->name_bn ?? old('name_bn') }}" placeholder="Enter your full name..."></x-admin.input>
                            <x-admin.input-error for="name_bn" class="mt-2"></x-admin.input-error>
                        </x-admin.input-group-div>

                        <x-admin.input-group-div style="width: calc( 100% - 10px ); margin-top: 20px;">
                            <x-admin.label for="sku">SKU</x-admin.label>
                            <x-admin.input type="text" id="sku" name="sku" value="{{ $product?->sku ?? old('name') }}" placeholder="Enter product sku..."></x-admin.input>
                            <x-admin.input-error for="sku" class="mt-2"></x-admin.input-error>
                        </x-admin.input-group-div>
                        <x-admin.input-group-div style="width: calc( 100% - 10px ); margin-top: 20px;">
                            <x-admin.label for="cat_id">Category</x-admin.label>
                            <x-admin.select-option class="form-control" name="cat_id" id="cat_id">
                                <option selected disabled>Select A Category</option>
                                @foreach($data['categories'] as $category)
                                <option @if($category->id == $product->cat_id) selected  @endif value="{{ $category?->id }}">{{ $category?->name_en }}</option>
                                @endforeach
                            </x-admin.select-option>
                            <x-admin.input-error for="cat_id" class="mt-2"></x-admin.input-error>
                        </x-admin.input-group-div>

                        <x-admin.input-group-div style="width: calc( 100% - 10px ); margin-top: 20px;">
                            <x-admin.label for="brand_id">Brand</x-admin.label>
                            <x-admin.select-option class="form-control" name="brand_id" id="brand_id">
                                <option selected disabled>Select A Brand</option>
                                @foreach($data['brands'] as $brand)
                                <option @if($brand->id == $product->brand_id) selected  @endif value="{{ $brand?->id }}">{{ $brand?->name_en }}</option>
                                @endforeach
                            </x-admin.select-option>
                            <x-admin.input-error for="brand_id" class="mt-2"></x-admin.input-error>
                        </x-admin.input-group-div>

                        <x-admin.input-group-div style="width: calc( 100% - 10px ); margin-top: 20px;">
                            <x-admin.label for="price_en">Price</x-admin.label>
                            <x-admin.input type="text" id="price_en" name="price_en" value="{{ $product?->price_en }}" placeholder="Enter product price..."></x-admin.input>
                            <x-admin.input-error for="price_en" class="mt-2"></x-admin.input-error>
                        </x-admin.input-group-div>

                        <x-admin.input-group-div style="width: calc( 100% - 10px ); margin-top: 20px;">
                            <x-admin.label for="price_bn">Bangla Price</x-admin.label>
                            <x-admin.input type="text" id="price_bn" name="price_bn" value="{{ $product?->price_bn }}" placeholder="Enter product price..."></x-admin.input>
                            <x-admin.input-error for="price_bn" class="mt-2"></x-admin.input-error>
                        </x-admin.input-group-div>

                        <x-admin.input-group-div style="width: calc( 100% - 10px ); margin-top: 20px;">
                            <x-admin.label for="qty_en">Qty</x-admin.label>
                            <x-admin.input type="number" id="qty_en" name="qty_en" value="{{ $product?->qty_en }}" placeholder="Enter product qty..."></x-admin.input>
                            <x-admin.input-error for="qty_en" class="mt-2"></x-admin.input-error>
                        </x-admin.input-group-div>

                        <x-admin.input-group-div style="width: calc( 100% - 10px ); margin-top: 20px;">
                            <x-admin.label for="qty_bn">Bangla Qty</x-admin.label>
                            <x-admin.input type="text" id="qty_bn" name="qty_bn" value="{{ $product?->qty_bn }}" placeholder="Enter product qty..."></x-admin.input>
                            <x-admin.input-error for="qty" class="mt-2"></x-admin.input-error>
                        </x-admin.input-group-div>

                        <x-admin.input-group-div style="width: calc( 100% - 10px ); margin-top: 20px;">
                            <x-admin.label for="short_description_en">Short Description</x-admin.label>
                            <x-admin.textarea id="short_description_en" rows="8" name="short_description_en" placeholder="Enter product short description...">{{ strip_tags($product->short_description_en) }}</x-admin.textarea>
                            <x-admin.input-error for="short_description_en" class="mt-2"></x-admin.input-error>
                        </x-admin.input-group-div>

                        <x-admin.input-group-div style="width: calc( 100% - 10px ); margin-top: 20px;">
                            <x-admin.label for="short_description_bn">Bangla Short Description</x-admin.label>
                            <x-admin.textarea id="short_description_bn" rows="8" name="short_description_bn" placeholder="Enter product short description...">{{ strip_tags($product->short_description_bn) }}</x-admin.textarea>
                            <x-admin.input-error for="short_description_bn" class="mt-2"></x-admin.input-error>
                        </x-admin.input-group-div>

                        <x-admin.input-group-div style="width: calc( 100% - 10px ); margin-top: 20px;">
                            <x-admin.label for="long_description_en">Long Description</x-admin.label>
                            <x-admin.textarea id="long_description_en" class="ckeditor" rows="8" name="long_description_en" placeholder="Enter product long description...">{{ strip_tags($product->long_description_en) }}</x-admin.textarea>
                            <x-admin.input-error for="long_description_en" class="mt-2"></x-admin.input-error>
                        </x-admin.input-group-div>

                        <x-admin.input-group-div style="width: calc( 100% - 10px ); margin-top: 20px;">
                            <x-admin.label for="long_description_bn">Bangla Long Description</x-admin.label>
                            <x-admin.textarea id="long_description_bn" class="ckeditor" rows="8" name="long_description_bn" placeholder="Enter product long description...">{{ strip_tags($product->long_description_bn) }}</x-admin.textarea>
                            <x-admin.input-error for="long_description_bn" class="mt-2"></x-admin.input-error>
                        </x-admin.input-group-div>

                        <x-admin.input-group-div style="width: calc( 100% - 10px ); margin-top: 20px;">
                            <x-admin.label for="image">Image</x-admin.label>
                            <x-admin.input type="file" id="image" name="image"></x-admin.input>
                            <img src="{{ asset('product/'.$product->image) }}" alt="product" height="100px">
                            <x-admin.input-error for="image" class="mt-2"></x-admin.input-error>
                        </x-admin.input-group-div>

                        <x-admin.input-group-div style="width: calc( 100% - 10px ); margin-top: 20px;">
                            <x-admin.label for="gallery_image">Gallery Image</x-admin.label>
                            <x-admin.input type="file" id="gallery_image" name="gallery_image[]" multiple></x-admin.input>
                            @foreach (json_decode($product->gallery_image, true) as $image )
                            <img src="{{ asset('product/'.$image) }}" alt="product" height="50px">
                            @endforeach
                            <x-admin.input-error for="gallery_image" class="mt-2"></x-admin.input-error>
                        </x-admin.input-group-div>

                        <x-admin.submit-button class="mt-2"><i class="fas fa-plus-circle"></i> Update</x-admin.submit-button>
                    </form>
                </div>
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>
@endsection
