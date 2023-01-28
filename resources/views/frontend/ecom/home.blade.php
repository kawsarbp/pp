@extends('frontend.ecom.inc.layouts')
@section('title','Shopping')


@section('carousel')
    <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="10000">
                <img src="{{asset('src/img/slider/1.jpeg')}}" class="d-block w-100 img-fluid" alt="...">
            </div>
            <div class="carousel-item" data-bs-interval="2000">
                <img src="{{asset('src/img/slider/2.jpeg')}}" class="d-block w-100 img-fluid" alt="...">
            </div>
            <div class="carousel-item">
                <img src="{{asset('src/img/slider/3.jpeg')}}" class="d-block w-100 img-fluid" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
@endsection
