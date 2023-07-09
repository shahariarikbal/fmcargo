@extends('layouts.admin.master')

@section('content')
    <h1 class="mt-4">Slider Settings</h1>
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Slider Settings
        </div>
        @if($page == 'index')
            <div class="col-md-12">
                <div class="card-body">
                    <x-admin.action-button href="{{ route('slider.create') }}" class="btn-success float-end"><i class="fas fa-plus-circle"></i> Add</x-admin.action-button>

                    <table class="table table-hover table-bordered">
                        <tr>
                            <td>SL</td>
                            <td>Title</td>
                            <td>Image</td>
                            <td>Action</td>
                        </tr>
                        @foreach($data as $info)
                            <tr>
                                <td>{{ $loop->index+1 }}</td>
                                <td>{{ $info?->title_en }}</td>
                                <td>
                                    <img src="{{ asset('slider/'.$info->image) }}" height="50" width="100" />
                                </td>
                                <td>
                                    <x-admin.action-button href="{{ route('slider.edit', $info->id) }}" title="Slider Edit" class="btn-info"><i class="fas fa-eye"></i></x-admin.action-button>
                                    <x-admin.action-button href="{{ route('slider.delete', $info->id) }}" title="Delete" onclick="return confirm('Are you sure delete this info ?')" class="btn-danger"><i class="fas fa-trash-alt"></i></x-admin.action-button>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        @endif
        @if($page == 'create')
        <div class="row" style="padding: 30px;">
            <div class="col-md-2"></div>
            <div class="col-md-8" style="box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;">
                <div class="card-body">
                    <x-admin.action-button href="{{ route('sliders') }}" class="btn-primary float-end"> <i class="fas fa-arrow-alt-circle-left"></i> Manage</x-admin.action-button>
                    <form action="{{ route('slider.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <x-admin.input-group-div style="width: calc( 100% - 10px ); margin-top: 20px;">
                            <x-admin.label for="title_en">Title</x-admin.label>
                            <x-admin.input type="text" id="title_en" name="title_en" value="{{ old('title_en') }}" placeholder="Enter slider title..."></x-admin.input>
                            <x-admin.input-error for="title_en" class="mt-2"></x-admin.input-error>

                            <x-admin.label for="title_bn">Title</x-admin.label>
                            <x-admin.input type="text" id="title_bn" name="title_bn" value="{{ old('title_bn') }}" placeholder="Enter slider title..."></x-admin.input>
                            <x-admin.input-error for="title_bn" class="mt-2"></x-admin.input-error>

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
        @endif

        @if($page == 'edit')
            <div class="row" style="padding: 30px;">
                <div class="col-md-2"></div>
                <div class="col-md-8" style="box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;">
                    <div class="card-body">
                        <x-admin.action-button href="{{ route('sliders') }}" class="btn-primary float-end"> <i class="fas fa-arrow-alt-circle-left"></i> Manage</x-admin.action-button>
                        <form action="{{ route('slider.update', $slider->id) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <x-admin.input-group-div style="width: calc( 100% - 10px ); margin-top: 20px;">
                                <x-admin.label for="title_en">Title</x-admin.label>
                                <x-admin.input type="text" id="title_en" name="title_en" value="{{ $slider->title_en ?? old('title_en') }}" placeholder="Enter slider title..."></x-admin.input>
                                <x-admin.input-error for="title_en" class="mt-2"></x-admin.input-error>

                                <x-admin.label for="title_bn">Title</x-admin.label>
                                <x-admin.input type="text" id="title_bn" name="title_bn" value="{{ $slider->title_bn ?? old('title_bn') }}" placeholder="Enter slider title..."></x-admin.input>
                                <x-admin.input-error for="title_bn" class="mt-2"></x-admin.input-error>

                                <x-admin.label for="image">Image</x-admin.label>
                                <x-admin.input type="file" id="image" name="image"></x-admin.input>
                                <img src="{{ asset('/slider/'.$slider->image) }}" height="80" width="80" />
                                <x-admin.input-error for="image" class="mt-2"></x-admin.input-error>
                            </x-admin.input-group-div>
                            <x-admin.submit-button class="mt-2"><i class="fas fa-plus-circle"></i> Update</x-admin.submit-button>
                        </form>
                    </div>
                </div>
                <div class="col-md-2"></div>
            </div>
        @endif
    </div>
@endsection
