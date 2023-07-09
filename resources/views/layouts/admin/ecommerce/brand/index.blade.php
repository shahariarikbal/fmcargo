@extends('layouts.admin.master')

@section('title')
    Admin | Brand List
@endsection

@section('content')
    <h1 class="mt-4">Brand List</h1>
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Brand List Table
            <x-admin.action-button href="{{ route('brand.create') }}" class="btn-success float-end"><i class="fas fa-plus-circle"></i> Add</x-admin.action-button>
        </div>
        <div class="card-body">
            <table id="datatablesSimple">
                <thead>
                <tr>
                    <th>SL</th>
                    <th>Name</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($brands as $brand)
                    <tr>
                        <td>{{ $loop->index+1 }}</td>
                        <td>{{ ucfirst($brand->name_en) }}</td>
                        <td>
                            @if($brand->status == 1)
                                <span>Active</span>
                            @else
                                <span>Inactive</span>
                            @endif
                        </td>
                        <td>
                            @if($brand->status == 1)
                                <x-admin.action-button href="{{ route('brand.active', $brand->id) }}" title="Click to inactive" class="btn-success"><i class="fa-solid fa-circle-up"></i></x-admin.action-button>
                            @else
                                <x-admin.action-button href="{{ route('brand.inactive', $brand->id) }}" title="Click to active" class="btn-primary"><i class="fa-solid fa-circle-down"></i></x-admin.action-button>
                            @endif
                            <x-admin.action-button href="{{ route('brand.edit', $brand->id) }}" title="Edit" class="btn-info"><i class="fas fa-pen-to-square"></i></x-admin.action-button>
                            <x-admin.action-button href="{{ route('brand.delete', $brand->id) }}" title="Delete" onclick="return confirm('Are you sure delete this info ?')" class="btn-danger"><i class="fas fa-trash-alt"></i></x-admin.action-button>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
