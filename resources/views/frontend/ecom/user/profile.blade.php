@extends('frontend.ecom.inc.layouts')
@section('head')
    <title>User Profile</title>
@endsection

@section('content')

    <div id="product" >
        <div class="my-wishlist pt-5 pb-4">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-3">
                        @include('frontend.ecom.user.sidebar')
                    </div>
                    <div class="col-lg-9">
                        <div class="profile_info_box p-5">
                            <div class="row">
                                <div class="col-lg-9">
                                    <button class="basic_info_btn">Basic Info</button>
                                    <form action="{{ route('userProfileEdit',$user->id) }}" method="POST" enctype="multipart/form-data" class="mt-4">
                                        @csrf
                                        <div class="mb-3">
                                            <label for="name">Name</label>
                                            <input type="text" id="name" name="name" value="{{ $user->name }}" placeholder="Name" class="form-control profile_input_field">
                                            @error('name') <span class="text-danger">{{ $message }}</span> @enderror
                                        </div>
                                        <div class="mb-3">
                                            <label for="email">Email</label>
                                            <input type="email" id="email" value="{{ $user->email }}" name="email" placeholder="E-mail" class="form-control profile_input_field">
                                            @error('email') <span class="text-danger">{{ $message }}</span> @enderror
                                        </div>
                                        <div class="mb-3">
                                            <label for="address">Address</label>
                                            <input type="text" id="address" value="{{ $user->address }}" name="address" placeholder="Address" class="form-control profile_input_field">
                                            @error('address') <span class="text-danger">{{ $message }}</span> @enderror
                                        </div>
                                        <div class="mb-3">
                                            <label for="phone">Phone</label>
                                            <input type="number" id="phone" value="{{ $user->phone }}" placeholder="Phone" name="phone" class="form-control profile_input_field">
                                            @error('phone') <span class="text-danger">{{ $message }}</span> @enderror
                                        </div>
                                        <div class="mb-3">
                                            <label for="profile_photo">Profile Photo</label>
                                            <input type="file" id="profile_photo" name="profile_photo" class="form-control profile_input_field">
                                            @error('profile_photo') <span class="text-danger">{{ $message }}</span> @enderror
                                        </div>
                                        <div class="text-end">
                                            <button type="submit" class="profile_info_update_btn">Update Now</button>
                                        </div>
                                    </form>


                                </div>
                                <div class="col-lg-3">
                                    @if(empty($user->profile_photo))
                                        <img class="avater_photo" src="{{ asset('src/img/avater.jpg') }}" alt="profile photo">
                                    @else
                                        <img class="avater_photo" src="/uploads/user/{{$user->profile_photo}}" alt="profile photo">
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
