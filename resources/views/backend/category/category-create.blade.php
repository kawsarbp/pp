@extends('backend.inc.layouts')
@section('title','Create Category')

@section('content')
    <div class="row pt-4 justify-content-center">
        <div class="col-lg-10">
            <div class="card">
                <div class="card-header bg-info">
                    <h4 class="m-b-0 text-white">Category Create form</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('category.categoryStore') }}" method="POST" >
                        @csrf
                        <div class="form-body">
                            <div class="card-title"><a class="btn btn-outline-purple" href="{{ route('category.index') }}">categories</a></div>
                            <hr>
                            <!--/row-->
                            <div class="row align-items-end">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label" for="category_name">Category Name</label>
                                        <input type="text" value="{{ old('category_name') }}" placeholder="Category Name" name="category_name" id="category_name" class="form-control">
                                        @error('category_name') <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Status</label>
                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="active" checked="" value="active" name="status" class="custom-control-input">
                                            <label class="custom-control-label" for="active">Active</label>
                                        </div>
                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="inactive" value="inactive" name="status" class="custom-control-input">
                                            <label class="custom-control-label" for="inactive">Inactive</label>
                                        </div>
                                        @error('status') <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="form-actions">
                            <button type="submit" class="btn btn-success"> <i class="fa fa-check"></i> Save</button>
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
