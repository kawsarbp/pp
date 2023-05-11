@extends('backend.inc.layouts')
@section('title','Edit Category')

@section('content')
    <div class="row pt-4 justify-content-center">
        <div class="col-lg-10">
            <div class="card">
                <div class="card-header bg-info">
                    <h4 class="m-b-0 text-white">Category Create form</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('category.categoryUpdate',$category->id) }}" method="POST" >
                        @csrf
                        @method('PUT')
                        <div class="form-body">
                            <div class="card-title"><a class="btn btn-outline-purple" href="{{ route('category.index') }}">categories</a></div>
                            <hr>
                            <!--/row-->
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label" for="category_name">Category Name</label>
                                        <input type="text" value="{{ $category->category_name }}" placeholder="Category Name" name="category_name" id="category_name" class="form-control">
                                        @error('category_name') <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label" for="category_icon">Category Icon</label>
                                        <input type="text" value="{{ old('category_icon') }}" placeholder="Category Icon" name="category_icon" id="category_icon" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Status</label>
                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="active" @if($category->status == 'active') checked="" @endif value="active" name="status" class="custom-control-input">
                                            <label class="custom-control-label" for="active">Active</label>
                                        </div>
                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="inactive" @if($category->status == 'inactive') checked="" @endif value="inactive" name="status" class="custom-control-input">
                                            <label class="custom-control-label" for="inactive">Inactive</label>
                                        </div>
                                        @error('status') <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="form-actions">
                            <button type="submit" class="btn btn-success"> <i class="fa fa-check"></i> Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

{{--@if(session()->has('message'))--}}
{{--    {{ session()->get('message') }}--}}
{{--@endif--}}

@section('script')
    <script>
        $(document).ready(function() {
            $.toast({
                @if(session('message'))
                heading: '{{"Faz Group Ltd"}}'
                , text: '{{ session('message') }}'
                @else
                , text: '{{"thank you for you, Visite this site."}}'
                @endif
                , position: 'top-right'
                , loaderBg: '#ff6849'

                @if(session('message'))
                , icon: '{{ session('type') }}'
                @endif
                , hideAfter: 2500
                , stack: 6
            })
        });
    </script>
@endsection
