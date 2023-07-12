@extends('layouts.admin.master')

@section('content')
    <h1 class="mt-4">C & F</h1>
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            C & F
        </div>
        <div class="row" style="padding: 30px;">
            <div class="col-md-2"></div>
            <div class="col-md-8" style="box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;">
                <div class="card-body">
                    <form action="{{ route('c_&_f.update', $clear_forwarding->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <x-admin.input-group-div style="width: calc( 100% - 10px ); margin-top: 20px;">
                            <x-admin.label for="header_title_en">Header Title En</x-admin.label>
                            <x-admin.input type="text" id="header_title_en" name="header_title_en" value="{{ $clear_forwarding?->header_title_en ?? old('header_title_en') }}" placeholder="Enter header_title_en..."></x-admin.input>
                            <x-admin.input-error for="header_title_en" class="mt-2"></x-admin.input-error>
                        </x-admin.input-group-div>

                        <x-admin.input-group-div style="width: calc( 100% - 10px ); margin-top: 20px;">
                            <x-admin.label for="header_title_bn">Header Title Bn</x-admin.label>
                            <x-admin.input type="text" id="header_title_bn" name="header_title_bn" value="{{ $clear_forwarding?->header_title_bn ?? old('header_title_bn') }}" placeholder="Enter header_title_en..."></x-admin.input>
                            <x-admin.input-error for="header_title_bn" class="mt-2"></x-admin.input-error>
                        </x-admin.input-group-div>

                        <x-admin.input-group-div style="width: calc( 100% - 10px ); margin-top: 20px;">
                            <x-admin.label for="header_desc_en"> Header Description En</x-admin.label>
                            <x-admin.textarea id="header_desc_en" rows="8" name="header_desc_en" value="{{ $clear_forwarding?->header_desc_en ?? old('header_desc_en') }}" placeholder="Enter product short description..."></x-admin.textarea>
                            <x-admin.input-error for="header_desc_en" class="mt-2"></x-admin.input-error>
                        </x-admin.input-group-div>

                        <x-admin.input-group-div style="width: calc( 100% - 10px ); margin-top: 20px;">
                            <x-admin.label for="header_desc_bn"> Header Description Bn</x-admin.label>
                            <x-admin.textarea id="header_desc_bn" rows="8" name="header_desc_bn" value="{{  $clear_forwarding?->header_desc_bn ?? old('header_desc_bn') }}" placeholder="Enter product short description..."></x-admin.textarea>
                            <x-admin.input-error for="header_desc_bn" class="mt-2"></x-admin.input-error>
                        </x-admin.input-group-div>

                        <x-admin.input-group-div style="width: calc( 100% - 10px ); margin-top: 20px;">
                            <x-admin.label for="pro_sourcing_title_en">Pro Sourcing Title En</x-admin.label>
                            <x-admin.input type="text" id="pro_sourcing_title_en" name="pro_sourcing_title_en" value="{{ $clear_forwarding?->pro_sourcing_title_en ?? old('pro_sourcing_title_en') }}" placeholder="Enter pro_sourcing_title_en..."></x-admin.input>
                            <x-admin.input-error for="pro_sourcing_title_en" class="mt-2"></x-admin.input-error>
                        </x-admin.input-group-div>

                        <x-admin.input-group-div style="width: calc( 100% - 10px ); margin-top: 20px;">
                            <x-admin.label for="pro_sourcing_title_bn">Pro Sourcing Title Bn</x-admin.label>
                            <x-admin.input type="text" id="pro_sourcing_title_bn" name="pro_sourcing_title_bn" value="{{ $clear_forwarding?->pro_sourcing_title_bn ?? old('pro_sourcing_title_bn') }}" placeholder="Enter pro_sourcing_title_bn..."></x-admin.input>
                            <x-admin.input-error for="pro_sourcing_title_bn" class="mt-2"></x-admin.input-error>
                        </x-admin.input-group-div>

                        <x-admin.input-group-div style="width: calc( 100% - 10px ); margin-top: 20px;">
                            <x-admin.label for="pro_sourcing_desc_en"> Pro Sourcing Description En</x-admin.label>
                            <x-admin.textarea id="pro_sourcing_desc_en" rows="8" name="pro_sourcing_desc_en" value="{{  $clear_forwarding?->pro_sourcing_desc_en ?? old('pro_sourcing_desc_en') }}" placeholder="Enter Pro Sourcing Description En..."></x-admin.textarea>
                            <x-admin.input-error for="pro_sourcing_desc_en" class="mt-2"></x-admin.input-error>
                        </x-admin.input-group-div>

                        <x-admin.input-group-div style="width: calc( 100% - 10px ); margin-top: 20px;">
                            <x-admin.label for="pro_sourcing_desc_bn"> Pro Sourcing Description Bn</x-admin.label>
                            <x-admin.textarea id="pro_sourcing_desc_bn" rows="8" name="pro_sourcing_desc_bn" value="{{  $clear_forwarding?->pro_sourcing_desc_bn ?? old('pro_sourcing_desc_bn') }}" placeholder="Enter Pro Sourcing Description Bn..."></x-admin.textarea>
                            <x-admin.input-error for="pro_sourcing_desc_bn" class="mt-2"></x-admin.input-error>
                        </x-admin.input-group-div>


                        <x-admin.input-group-div style="width: calc( 100% - 10px ); margin-top: 20px;">
                            <x-admin.label for="pro_sourcing_img"> Pro Sourcing Image</x-admin.label>
                            <x-admin.input type="file" id="pro_sourcing_img" name="pro_sourcing_img"></x-admin.input>
                            <img src="{{ asset('clearing_forwarding/'.$clear_forwarding->pro_sourcing_img) }}" alt="clearing_forwarding" height="100px">
                            <x-admin.input-error for="pro_sourcing_img" class="mt-2"></x-admin.input-error>
                        </x-admin.input-group-div>

                        <x-admin.input-group-div style="width: calc( 100% - 10px ); margin-top: 20px;">
                            <x-admin.label for="free_warehousing_title_en">Free warehousing Title En</x-admin.label>
                            <x-admin.input type="text" id="free_warehousing_title_en" name="free_warehousing_title_en" value="{{ $clear_forwarding?->free_warehousing_title_en  ?? old('free_warehousing_title_en ') }}" placeholder="Enter free_warehousing_title_en ..."></x-admin.input>
                            <x-admin.input-error for="free_warehousing_title_en" class="mt-2"></x-admin.input-error>
                        </x-admin.input-group-div>

                        <x-admin.input-group-div style="width: calc( 100% - 10px ); margin-top: 20px;">
                            <x-admin.label for="free_warehousing_title_bn">Free warehousing Title Bn</x-admin.label>
                            <x-admin.input type="text" id="free_warehousing_title_bn" name="free_warehousing_title_bn" value="{{ $clear_forwarding?->free_warehousing_title_bn ?? old('free_warehousing_title_bn') }}" placeholder="Enter free_warehousing_title_bn..."></x-admin.input>
                            <x-admin.input-error for="free_warehousing_title_bn" class="mt-2"></x-admin.input-error>
                        </x-admin.input-group-div>

                        <x-admin.input-group-div style="width: calc( 100% - 10px ); margin-top: 20px;">
                            <x-admin.label for="free_warehousing_desc_en"> Free warehousing Description En</x-admin.label>
                            <x-admin.textarea id="free_warehousing_desc_en" rows="8" name="free_warehousing_desc_en" value="{{$clear_forwarding?->free_warehousing_desc_en ?? old('free_warehousing_desc_en') }}" placeholder="Enter Pro Sourcing Description En..."></x-admin.textarea>
                            <x-admin.input-error for="free_warehousing_desc_en" class="mt-2"></x-admin.input-error>
                        </x-admin.input-group-div>

                        <x-admin.input-group-div style="width: calc( 100% - 10px ); margin-top: 20px;">
                            <x-admin.label for="free_warehousing_desc_bn"> Free warehousing Description Bn</x-admin.label>
                            <x-admin.textarea id="free_warehousing_desc_bn" rows="8" name="free_warehousing_desc_bn" value="{{ $clear_forwarding?->free_warehousing_desc_bn ?? old('free_warehousing_desc_bn') }}" placeholder="Enter Pro Sourcing Description Bn..."></x-admin.textarea>
                            <x-admin.input-error for="free_warehousing_desc_bn" class="mt-2"></x-admin.input-error>
                        </x-admin.input-group-div>


                        <x-admin.input-group-div style="width: calc( 100% - 10px ); margin-top: 20px;">
                            <x-admin.label for="free_warehousing_img">  Free warehousing Image</x-admin.label>
                            <x-admin.input type="file" id="free_warehousing_img" name="free_warehousing_img"></x-admin.input>
                            <img src="{{ asset('clearing_forwarding/'.$clear_forwarding->free_warehousing_img) }}" alt="clearing_forwarding" height="100px">
                            <x-admin.input-error for="free_warehousing_img" class="mt-2"></x-admin.input-error>
                        </x-admin.input-group-div>

                        <x-admin.input-group-div style="width: calc( 100% - 10px ); margin-top: 20px;">
                            <x-admin.label for="inspection_title_en">Inspection Title En</x-admin.label>
                            <x-admin.input type="text" id="inspection_title_en" name="inspection_title_en" value="{{ $clear_forwarding?->inspection_title_en ?? old('inspection_title_en') }}" placeholder="Enter inspection title en  ..."></x-admin.input>
                            <x-admin.input-error for="inspection_title_en" class="mt-2"></x-admin.input-error>
                        </x-admin.input-group-div>

                        <x-admin.input-group-div style="width: calc( 100% - 10px ); margin-top: 20px;">
                            <x-admin.label for="inspection_title_bn">Inspection Title Bn</x-admin.label>
                            <x-admin.input type="text" id="inspection_title_bn" name="inspection_title_bn" value="{{ $clear_forwarding?->inspection_title_bn ?? old('inspection_title_bn') }}" placeholder="Enter inspection_title_bn..."></x-admin.input>
                            <x-admin.input-error for="inspection_title_bn" class="mt-2"></x-admin.input-error>
                        </x-admin.input-group-div>

                        <x-admin.input-group-div style="width: calc( 100% - 10px ); margin-top: 20px;">
                            <x-admin.label for="inspection_desc_en">Inspection Description En</x-admin.label>
                            <x-admin.textarea id="inspection_desc_en" rows="8" name="inspection_desc_en" value="{{ $clear_forwarding?->inspection_desc_en ?? old('inspection_desc_en') }}" placeholder="Enter Pro Sourcing Description En..."></x-admin.textarea>
                            <x-admin.input-error for="inspection_desc_en" class="mt-2"></x-admin.input-error>
                        </x-admin.input-group-div>

                        <x-admin.input-group-div style="width: calc( 100% - 10px ); margin-top: 20px;">
                            <x-admin.label for="inspection_desc_bn">Inspection Description Bn</x-admin.label>
                            <x-admin.textarea id="inspection_desc_bn" rows="8" name="inspection_desc_bn" value="{{ $clear_forwarding?->inspection_desc_bn ?? old('inspection_desc_bn') }}" placeholder="Enter Pro Sourcing Description Bn..."></x-admin.textarea>
                            <x-admin.input-error for="inspection_desc_bn" class="mt-2"></x-admin.input-error>
                        </x-admin.input-group-div>


                        <x-admin.input-group-div style="width: calc( 100% - 10px ); margin-top: 20px;">
                            <x-admin.label for="inspection_img">Inspection Image</x-admin.label>
                            <x-admin.input type="file" id="inspection_img" name="inspection_img"></x-admin.input><img src="{{ asset('clearing_forwarding/'.$clear_forwarding->inspection_img) }}" alt="clearing_forwarding" height="100px">
                            <x-admin.input-error for="inspection_img" class="mt-2"></x-admin.input-error>
                        </x-admin.input-group-div>

                        <x-admin.input-group-div style="width: calc( 100% - 10px ); margin-top: 20px;">
                            <x-admin.label for="repacking_title_en">Repacking Title En</x-admin.label>
                            <x-admin.input type="text" id="repacking_title_en " name="repacking_title_en" value="{{ $clear_forwarding?->repacking_title_en ?? old('repacking_title_en ') }}" placeholder="Enter inspection title en  ..."></x-admin.input>
                            <x-admin.input-error for="repacking_title_en" class="mt-2"></x-admin.input-error>
                        </x-admin.input-group-div>

                        <x-admin.input-group-div style="width: calc( 100% - 10px ); margin-top: 20px;">
                            <x-admin.label for="repacking_title_bn">Repacking Title Bn</x-admin.label>
                            <x-admin.input type="text" id="repacking_title_bn" name="repacking_title_bn" value="{{ $clear_forwarding?->repacking_title_bn ?? old('repacking_title_bn') }}" placeholder="Enter repacking_title_bn..."></x-admin.input>
                            <x-admin.input-error for="repacking_title_bn" class="mt-2"></x-admin.input-error>
                        </x-admin.input-group-div>

                        <x-admin.input-group-div style="width: calc( 100% - 10px ); margin-top: 20px;">
                            <x-admin.label for="repacking_desc_en">Repacking Description En</x-admin.label>
                            <x-admin.textarea id="repacking_desc_en" rows="8" name="repacking_desc_en" value="{{ $clear_forwarding?->repacking_desc_en ?? old('repacking_desc_en') }}" placeholder="Enter Pro Sourcing Description En..."></x-admin.textarea>
                            <x-admin.input-error for="repacking_desc_en" class="mt-2"></x-admin.input-error>
                        </x-admin.input-group-div>

                        <x-admin.input-group-div style="width: calc( 100% - 10px ); margin-top: 20px;">
                            <x-admin.label for="repacking_desc_bn">Repacking Description Bn</x-admin.label>
                            <x-admin.textarea id="repacking_desc_bn" rows="8" name="repacking_desc_bn" value="{{ $clear_forwarding?->repacking_desc_bn ?? old('repacking_desc_bn') }}" placeholder="Enter Pro Sourcing Description Bn..."></x-admin.textarea>
                            <x-admin.input-error for="repacking_desc_bn" class="mt-2"></x-admin.input-error>
                        </x-admin.input-group-div>


                        <x-admin.input-group-div style="width: calc( 100% - 10px ); margin-top: 20px;">
                            <x-admin.label for="repacking_img">Repacking Image</x-admin.label>
                            <x-admin.input type="file" id="repacking_img" name="repacking_img"></x-admin.input><img src="{{ asset('clearing_forwarding/'.$clear_forwarding->repacking_img) }}" alt="clearing_forwarding" height="100px">
                            <x-admin.input-error for="repacking_img" class="mt-2"></x-admin.input-error>
                        </x-admin.input-group-div>

                        <x-admin.input-group-div style="width: calc( 100% - 10px ); margin-top: 20px;">
                            <x-admin.label for="custom_clr_title_en">Custom Clr Title En</x-admin.label>
                            <x-admin.input type="text" id="custom_clr_title_en " name="custom_clr_title_en" value="{{ $clear_forwarding?->custom_clr_title_en ?? old('custom_clr_title_en ') }}" placeholder="Enter inspection title en  ..."></x-admin.input>
                            <x-admin.input-error for="custom_clr_title_en" class="mt-2"></x-admin.input-error>
                        </x-admin.input-group-div>

                        <x-admin.input-group-div style="width: calc( 100% - 10px ); margin-top: 20px;">
                            <x-admin.label for="custom_clr_title_bn">Custom Clr Title Bn</x-admin.label>
                            <x-admin.input type="text" id="custom_clr_title_bn" name="custom_clr_title_bn" value="{{ $clear_forwarding?->custom_clr_title_bn ?? old('custom_clr_title_bn') }}" placeholder="Enter custom_clr_title_bn..."></x-admin.input>
                            <x-admin.input-error for="custom_clr_title_bn" class="mt-2"></x-admin.input-error>
                        </x-admin.input-group-div>

                        <x-admin.input-group-div style="width: calc( 100% - 10px ); margin-top: 20px;">
                            <x-admin.label for="custom_clr_desc_en">Custom Clr Description En</x-admin.label>
                            <x-admin.textarea id="custom_clr_desc_en" rows="8" name="custom_clr_desc_en" value="{{ $clear_forwarding?->custom_clr_desc_en ?? old ('custom_clr_desc_en') }}" placeholder="Enter Pro Sourcing Description En..."></x-admin.textarea>
                            <x-admin.input-error for="custom_clr_desc_en" class="mt-2"></x-admin.input-error>
                        </x-admin.input-group-div>

                        <x-admin.input-group-div style="width: calc( 100% - 10px ); margin-top: 20px;">
                            <x-admin.label for="custom_clr_desc_bn">Custom Clr Description Bn</x-admin.label>
                            <x-admin.textarea id="custom_clr_desc_bn" rows="8" name="custom_clr_desc_bn" value="{{ $clear_forwarding?->custom_clr_desc_bn ??old('custom_clr_desc_bn') }}" placeholder="Enter Pro Sourcing Description Bn..."></x-admin.textarea>
                            <x-admin.input-error for="custom_clr_desc_en" class="mt-2"></x-admin.input-error>
                        </x-admin.input-group-div>


                        <x-admin.input-group-div style="width: calc( 100% - 10px ); margin-top: 20px;">
                            <x-admin.label for="custom_clr_img">Custom Clr Image</x-admin.label>
                            <x-admin.input type="file" id="custom_clr_img" name="custom_clr_img"></x-admin.input><img src="{{ asset('clearing_forwarding/'.$clear_forwarding->custom_clr_img) }}" alt="clearing_forwarding" height="100px">
                            <x-admin.input-error for="custom_clr_img" class="mt-2"></x-admin.input-error>
                        </x-admin.input-group-div>


                        <x-admin.input-group-div style="width: calc( 100% - 10px ); margin-top: 20px;">
                            <x-admin.label for="d_step_delivery_title_en">Door Step Delivery Title En</x-admin.label>
                            <x-admin.input type="text" id="d_step_delivery_title_en " name="d_step_delivery_title_en" value="{{ $clear_forwarding?->d_step_delivery_title_en ?? old('d_step_delivery_title_en ') }}" placeholder="Enter inspection title en  ..."></x-admin.input>
                            <x-admin.input-error for="d_step_delivery_title_en" class="mt-2"></x-admin.input-error>
                        </x-admin.input-group-div>

                        <x-admin.input-group-div style="width: calc( 100% - 10px ); margin-top: 20px;">
                            <x-admin.label for="d_step_delivery_title_bn">Door Step Delivery Title Bn</x-admin.label>
                            <x-admin.input type="text" id="d_step_delivery_title_bn" name="d_step_delivery_title_bn" value="{{ $clear_forwarding?->d_step_delivery_title_bn ?? old('d_step_delivery_title_bn') }}" placeholder="Enter d_step_delivery_title_bn..."></x-admin.input>
                            <x-admin.input-error for="d_step_delivery_title_en" class="mt-2"></x-admin.input-error>
                        </x-admin.input-group-div>

                        <x-admin.input-group-div style="width: calc( 100% - 10px ); margin-top: 20px;">
                            <x-admin.label for="d_step_delivery_desc_en">Door Step Delivery Description En</x-admin.label>
                            <x-admin.textarea id="d_step_delivery_desc_en" rows="8" name="d_step_delivery_desc_en" value="{{ $clear_forwarding?->d_step_delivery_desc_en ??old('d_step_delivery_desc_en') }}" placeholder="Enter Pro Sourcing Description En..."></x-admin.textarea>
                            <x-admin.input-error for="d_step_delivery_desc_en" class="mt-2"></x-admin.input-error>
                        </x-admin.input-group-div>

                        <x-admin.input-group-div style="width: calc( 100% - 10px ); margin-top: 20px;">
                            <x-admin.label for="d_step_delivery_desc_bn">Door Step Delivery Description Bn</x-admin.label>
                            <x-admin.textarea id="d_step_delivery_desc_bn" rows="8" name="d_step_delivery_desc_bn" value="{{ $clear_forwarding?->d_step_delivery_desc_bn ??old('d_step_delivery_desc_bn') }}" placeholder="Enter Pro Sourcing Description Bn..."></x-admin.textarea>
                            <x-admin.input-error for="custom_clr_desc_en" class="mt-2"></x-admin.input-error>
                        </x-admin.input-group-div>


                        <x-admin.input-group-div style="width: calc( 100% - 10px ); margin-top: 20px;">
                            <x-admin.label for="d_step_delivery_img ">Door Step Delivery Image</x-admin.label>
                            <x-admin.input type="file" id="d_step_delivery_img " name="d_step_delivery_img "></x-admin.input><img src="{{ asset('clearing_forwarding/'.$clear_forwarding->d_step_delivery_img) }}" alt="clearing_forwarding" height="100px">
                            <x-admin.input-error for="d_step_delivery_img " class="mt-2"></x-admin.input-error>
                        </x-admin.input-group-div>

                        <x-admin.input-group-div style="width: calc( 100% - 10px ); margin-top: 20px;">
                            <x-admin.label for="footer_desc_en">Footer Description En</x-admin.label>
                            <x-admin.textarea id="footer_desc_en" rows="8" name="footer_desc_en" value="{{ $clear_forwarding?->footer_desc_en ??old('footer_desc_en') }}" placeholder="Enter Pro Sourcing Description En..."></x-admin.textarea>
                            <x-admin.input-error for="footer_desc_en" class="mt-2"></x-admin.input-error>
                        </x-admin.input-group-div>

                        <x-admin.input-group-div style="width: calc( 100% - 10px ); margin-top: 20px;">
                            <x-admin.label for="footer_desc_bn">Footer  Description Bn</x-admin.label>
                            <x-admin.textarea id="footer_desc_bn" rows="8" name="footer_desc_bn" value="{{ $clear_forwarding?->footer_desc_bn ??old('footer_desc_bn') }}" placeholder="Enter Pro Sourcing Description Bn..."></x-admin.textarea>
                            <x-admin.input-error for="custom_clr_desc_en" class="mt-2"></x-admin.input-error>
                        </x-admin.input-group-div>

                        <x-admin.submit-button class="mt-2"><i class="fas fa-plus-circle"></i> Update</x-admin.submit-button>
                    </form>
                </div>
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>
@endsection
