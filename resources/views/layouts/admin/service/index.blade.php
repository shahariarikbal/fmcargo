@extends('layouts.admin.master')

@section('title')
    Admin | Service List
@endsection

@section('content')
    <h1 class="mt-4">Service List</h1>
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Service List Table
            <x-admin.action-button href="{{ route('service.add') }}" class="btn-success float-end"><i class="fas fa-plus-circle"></i> Add</x-admin.action-button>
        </div>
        <div class="card-body">
            <table id="datatablesSimple">
                <thead>
                <tr>
                    <th>SL</th>
                    <th>Title</th>
                    <th>Image</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($services as $service)
                    <tr>
                        <td>{{ $loop->index+1 }}</td>
                        <td>{{ ucfirst($service?->title) }}</td>
                        <td>
                            <img src="{{ asset('/service/'.$service?->image) }}" height="70" width="100" />
                        </td>
                        <td>
                            <x-admin.action-button href="{{ route('service.edit', $service?->id) }}" title="Edit" class="btn-info"><i class="fas fa-pen-to-square"></i></x-admin.action-button>
                            <x-admin.action-button href="{{ route('service.delete', $service?->id) }}" title="Delete" onclick="return confirm('Are you sure delete this info ?')" class="btn-danger"><i class="fas fa-trash-alt"></i></x-admin.action-button>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
