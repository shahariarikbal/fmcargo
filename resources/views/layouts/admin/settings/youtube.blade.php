@extends('layouts.admin.master')

@section('content')
    @if($page == 'create')
    <h1 class="mt-4">Youtube Link Create</h1>
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Youtube Link Create
        </div>
        <div class="row" style="padding: 30px;">
            <div class="col-md-2"></div>
            <div class="col-md-8" style="box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;">
                    <div class="card-body">
                        <x-admin.action-button href="{{ route('youtube.list') }}" class="btn-primary float-end"> <i class="fas fa-arrow-alt-circle-left"></i> Manage</x-admin.action-button>
                        <form action="{{ route('youtube.store') }}" method="post">
                            @csrf
                            <x-admin.input-group-div style="width: calc( 100% - 10px ); margin-top: 20px;">
                                <x-admin.label for="youtube">Youtube Link</x-admin.label>
                                <x-admin.input type="text" id="youtube" name="youtube" value="{{ old('youtube') }}" placeholder="Enter youtube link..."></x-admin.input>
                                <x-admin.input-error for="youtube" class="mt-2"></x-admin.input-error>
                            </x-admin.input-group-div>
                            <x-admin.submit-button class="mt-2"><i class="fas fa-plus-circle"></i> Create</x-admin.submit-button>
                        </form>
                    </div>
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>
    @endif
    @if($page == 'edit')
    <h1 class="mt-4">Youtube Link Update</h1>
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Youtube Link Update
        </div>
        <div class="row" style="padding: 30px;">
            <div class="col-md-2"></div>
            <div class="col-md-8" style="box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;">
                <div class="card-body">
                    <x-admin.action-button href="{{ route('youtube.list') }}" class="btn-primary float-end"> <i class="fas fa-arrow-alt-circle-left"></i> Manage</x-admin.action-button>
                    <form action="{{ route('youtube.update', $youtube->id) }}" method="post">
                        @csrf
                        <x-admin.input-group-div style="width: calc( 100% - 10px ); margin-top: 20px;">
                            <x-admin.label for="youtube">Youtube Link</x-admin.label>
                            <x-admin.input type="text" id="youtube" name="youtube" value="{{ $youtube->youtube ? $youtube->youtube : old('youtube') }}" placeholder="Enter youtube link..."></x-admin.input>
                            <x-admin.input-error for="youtube" class="mt-2"></x-admin.input-error>
                        </x-admin.input-group-div>
                        <x-admin.submit-button class="mt-2"><i class="fas fa-plus-circle"></i> Update</x-admin.submit-button>
                    </form>
                </div>
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>
    @endif
    @if($page == 'index')
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Youtube Link Table
            <x-admin.action-button href="{{ route('youtube.create') }}" class="btn-success float-end"><i class="fas fa-plus-circle"></i> Add</x-admin.action-button>
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
                @foreach($youtubeLinks as $youtube)
                    <tr>
                        <td>{{ $loop->index+1 }}</td>
                        <td>{{ substr($youtube->youtube,0,50) }}</td>
                        <td>
                            @if($youtube->status == 1)
                                <span>Active</span>
                            @else
                                <span>Inactive</span>
                            @endif
                        </td>
                        <td>
                            <x-admin.action-button href="{{ route('youtube.edit', $youtube->id) }}" title="Edit" class="btn-info"><i class="fas fa-pen-to-square"></i></x-admin.action-button>
                            <x-admin.action-button href="{{ route('youtube.delete', $youtube->id) }}" title="Delete" onclick="return confirm('Are you sure delete this info ?')" class="btn-danger"><i class="fas fa-trash-alt"></i></x-admin.action-button>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
    @endif
@endsection
