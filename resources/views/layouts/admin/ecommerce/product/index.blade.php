@extends('layouts.admin.master')

@section('title')
    Admin | Product List
@endsection

@section('content')
    <h1 class="mt-4">Product List</h1>
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Product List Table
            <x-admin.action-button href="{{ route('product.create') }}" class="btn-success float-end"><i class="fas fa-plus-circle"></i> Add</x-admin.action-button>
        </div>
        <div class="card-body">
            <table id="datatablesSimple">
                <thead>
                <tr>
                    <th>SL</th>
                    <th>Name</th>
                    <th>Category</th>
                    <th>Brand</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Image</th>
                    {{--  <th>Status</th>  --}}
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
               @foreach($products as $product)
                   <tr>
                       <td>{{ $loop->index+1 }}</td>
                       <td>{{ ucfirst($product->name_en) }}</td>
                       <td>{{ $product->category->name_en }}</td>
                       <td>{{ $product->brand->name_en }}</td>
                       <td>{{ $product->price_en }}</td>
                       <td>{{ $product->qty_en }}</td>
                       <td>
                        @if (substr($product->image, 0, 5) == 'https')
                            <img src="https://via.placeholder.com/640x480.png/00bbbb?text=commodi" alt="" height="20px" width="40px">
                        @else
                            <img src="{{ asset('product/'.$product->image) }}" alt="" height="20px" width="40px">
                        @endif
                       </td>
                       {{--  <td>
                           @if($product->status == 1)
                               <span>Active</span>
                           @else
                               <span>Inactive</span>
                           @endif
                       </td>  --}}
                       <td>
                           {{--  @if($product->status == 1)
                               <x-admin.action-button href="{{ route('category.active', $product->id) }}" title="Click to inactive" class="btn-success"><i class="fa-solid fa-circle-up"></i></x-admin.action-button>
                           @else
                               <x-admin.action-button href="{{ route('category.inactive', $product->id) }}" title="Click to active" class="btn-primary"><i class="fa-solid fa-circle-down"></i></x-admin.action-button>
                           @endif  --}}
                           <x-admin.action-button href="{{ route('product.edit', $product->id) }}" title="Edit" class="btn-info"><i class="fas fa-pen-to-square"></i></x-admin.action-button>
                           <x-admin.action-button href="{{ route('product.delete', $product->id) }}" title="Delete" onclick="return confirm('Are you sure delete this info ?')" class="btn-danger"><i class="fas fa-trash-alt"></i></x-admin.action-button>
                       </td>
                   </tr>
               @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
