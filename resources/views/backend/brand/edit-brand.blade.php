@extends('backend.inc.layouts')
@section('title','Brand Update')

@section('content')
    <div class="row pt-4">
        <div class="col-lg-12">
            <div class="card card-outline-info">
                <div class="card-header">
                    <h4 class="m-b-0 text-white">Brand Update form</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('brand.update',$brand->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-body">
                            <h3 class="card-title">Brand Update Info</h3>
                            <hr>
                            <div class="row p-t-20">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Brand Name</label>
                                        <input type="text" id="brand_name" value="{{ $brand->brand_name }}" name="brand_name" class="form-control" placeholder="Brand Name">
                                        @error('brand_name') <span class="text-danger font-italic">{{ $message }}</span> @enderror
                                    </div>
                                </div>
                                <!--/span-->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Brand Photo</label>
                                        <input type="file" id="brand_photo" name="brand_photo" class="form-control">
                                    </div>
                                </div>
                                <!--/span-->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Status</label>
                                        <div class="form-check">
                                            <label class="custom-control custom-radio">
                                                <input id="active" name="status" value="active" type="radio"@if($brand->status == 'active') checked="" @endif class="custom-control-input">
                                                <span class="custom-control-indicator"></span>
                                                <span class="custom-control-description">Active</span>
                                            </label>
                                            <label class="custom-control custom-radio">
                                                <input id="inactive" name="status" value="inactive" @if($brand->status == 'inactive') checked="" @endif type="radio" class="custom-control-input">
                                                <span class="custom-control-indicator"></span>
                                                <span class="custom-control-description">Inactive</span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                {{--brand image--}}
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <img  style="height: 50px; width: 150px;" src="/uploads/brand/{{ $brand->brand_photo }}" alt="...">
                                    </div>
                                </div>
                                {{--brand image--}}
                            </div>
                        </div>
                        <div class="form-actions">
                            <button type="submit" class="btn btn-success"><i class="fa fa-check"></i> Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection



@section('script')
    <script>

    </script>
@endsection
