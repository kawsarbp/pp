@extends('frontend.ecom.inc.layouts')
@section('head')
    <title>User Dashboard</title>
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
                        <div class="profile_info_box p-3">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus animi aspernatur at blanditiis, dolore dolorum et eum ipsa ipsam natus neque nihil nostrum obcaecati officiis porro quam rem, sint sit.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
