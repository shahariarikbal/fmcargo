@extends('layouts.admin.master')

@section('title')
    Admin | Blog List
@endsection

@section('content')
    <h1 class="mt-4">Blog List</h1>
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Blog List Table
            <x-admin.action-button href="{{ route('blog.add') }}" class="btn-success float-end"><i class="fas fa-plus-circle"></i> Add</x-admin.action-button>
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
                @foreach($blogs as $blog)
                    <tr>
                        <td>{{ $loop->index+1 }}</td>
                        <td>{{ ucfirst($blog?->title_en) }}</td>
                        <td>
                            <img src="{{ asset('/blog/'.$blog?->image) }}" height="70" width="100" />
                        </td>
                        <td>
                            <x-admin.action-button href="{{ route('blog.edit', $blog?->id) }}" title="Edit" class="btn-info"><i class="fas fa-pen-to-square"></i></x-admin.action-button>
                            <x-admin.action-button href="{{ route('blog.delete', $blog?->id) }}" title="Delete" onclick="return confirm('Are you sure delete this info ?')" class="btn-danger"><i class="fas fa-trash-alt"></i></x-admin.action-button>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
