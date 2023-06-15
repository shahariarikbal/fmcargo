@extends('layouts.admin.master')

@section('title')
    Admin | Testimonial List
@endsection

@section('content')
    <h1 class="mt-4">Testimonial List</h1>
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Testimonial List Table
            <x-admin.action-button href="{{ route('testimonial.add') }}" class="btn-success float-end"><i class="fas fa-plus-circle"></i> Add</x-admin.action-button>
        </div>
        <div class="card-body">
            <table id="datatablesSimple">
                <thead>
                <tr>
                    <th>SL</th>
                    <th>Name</th>
                    <th>Designation</th>
                    <th>Short Comment</th>
                    <th>Long Comment</th>
                    <th>Image</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($testimonials as $testimonial)
                    <tr>
                        <td>{{ $loop->index+1 }}</td>
                        <td>{{ $testimonial?->reviewer_name }}</td>
                        <td>{{ $testimonial?->reviewer_designation }}</td>
                        <td>{{ $testimonial?->short_comment }}</td>
                        <td>{{ $testimonial?->long_comment }}</td>
                        <td>
                            <img src="{{ asset('/testimonial/'.$testimonial?->reviewer_image) }}" height="70" width="100" />
                        </td>
                        <td>
                            <x-admin.action-button href="{{ route('testimonial.edit', $testimonial?->id) }}" title="Edit" class="btn-info"><i class="fas fa-pen-to-square"></i></x-admin.action-button>
                            <x-admin.action-button href="{{ route('testimonial.delete', $testimonial?->id) }}" title="Delete" onclick="return confirm('Are you sure delete this info ?')" class="btn-danger"><i class="fas fa-trash-alt"></i></x-admin.action-button>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
