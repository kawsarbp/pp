@extends('backend.inc.layouts')
@section('title','Update Blog')

@section('content')
    <div class="row mt-4">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header bg-info">
                    <h4 class="m-b-0 text-white">This is blog form</h4>
                </div>
                <div class="card-body">
                    <form action="{{route('blog.update',$blog->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-body">
                            <h3 class="card-title">Blog Info</h3>
                            <hr>
                            <div class="row p-t-20">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label" for="title">Blog Title</label>
                                        <input type="text" name="title" value="{{ $blog->title }}" id="title"
                                               class="form-control" placeholder="blog Title">
                                        @error('title') <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label" for="blogDate">Blog Date</label>
                                        <input type="date" value="{{ $blog->date }}" name="date" id="blogDate"
                                               class="form-control" placeholder="dd/mm/yyyy">
                                        {{--                                        @error('date') <span class="text-danger">{{ $message }}</span> @enderror--}}
                                    </div>
                                </div>

                            </div>
                            <!--/row-->
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label" id="photo">Blog Image</label>
                                        <input type="file" name="photo" id="photo" class="form-control">
                                        <img style="width: 120px;" src="/uploads/blog/{{$blog->photo}}" alt="">
                                        {{--                                        @error('photo') <span class="text-danger">{{ $message }}</span> @enderror--}}
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Status</label>
                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="active" checked="" value="active" name="status"
                                                   class="custom-control-input">
                                            <label class="custom-control-label" for="active">Active</label>
                                        </div>
                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="inactive" value="inactive" name="status"
                                                   class="custom-control-input">
                                            <label class="custom-control-label" for="inactive">Inactive</label>
                                        </div>
                                        @error('status') <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label" for="description">Description</label>
                                        <textarea name="description" id="description" class="form-control"
                                                  placeholder="Description " cols="30" rows="10">
                                            {{$blog->description}}
                                        </textarea>
                                        @error('description') <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>
                                </div>
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

{{--@if(session()->has('message'))--}}
{{--    {{ session()->get('message') }}--}}
{{--@endif--}}

@section('script')
    <script>
        $(document).ready(function () {
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
