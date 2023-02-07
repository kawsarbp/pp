@extends('frontend.ecom.inc.layouts')
@section('head')
    <title>Blog Page</title>
@endsection

@section('content')
    <div id="blog">
        <div class="container-fluid">
            <div class="row py-5">
                <div class="col-md-9">
                    <div class="row">
                        <div class="col-lg-4 col-md-12 mb-3">
                            <div class="card rounded-0 blog-box" >
                                <div class="blog-img">
                                    <a href="">
                                        <img src="{{asset('src/img/blog/1.png')}}" class="card-img-top rounded-0" alt="...">
                                    </a>
                                </div>
                                <div class="card-body">
                                    <p class="blog-date">23rd Nov, 2021</p>
                                    <a href="" class="blog-title">Nature Connection Exercise – Perceive and Receive</a>
                                    <p class="blog-description">For this exercise find a place, any place, with some nature present which, let’s face it, is anyw...</p>
                                    <a href="" class="blog-btn mb-4">+ Read more</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12 mb-4">
                            <div class="card rounded-0 blog-box" >
                                <div class="blog-img">
                                    <a href="">
                                        <img src="{{asset('src/img/blog/2.png')}}" class="card-img-top rounded-0" alt="...">
                                    </a>
                                </div>
                                <div class="card-body">
                                    <p class="blog-date">23rd Nov, 2021</p>
                                    <a href="" class="blog-title">Nature Connection Exercise – Perceive and Receive</a>
                                    <p class="blog-description">For this exercise find a place, any place, with some nature present which, let’s face it, is anyw...</p>
                                    <a href="" class="blog-btn mb-4">+ Read more</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12 mb-4">
                            <div class="card rounded-0 blog-box" >
                                <div class="blog-img">
                                    <a href="">
                                        <img src="{{asset('src/img/blog/3.png')}}" class="card-img-top rounded-0" alt="...">
                                    </a>
                                </div>
                                <div class="card-body">
                                    <p class="blog-date">23rd Nov, 2021</p>
                                    <a href="" class="blog-title">Nature Connection Exercise – Perceive and Receive</a>
                                    <p class="blog-description">For this exercise find a place, any place, with some nature present which, let’s face it, is anyw...</p>
                                    <a href="" class="blog-btn mb-4">+ Read more</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12 mb-4">
                            <div class="card rounded-0 blog-box" >
                                <div class="blog-img">
                                    <a href="">
                                        <img src="{{asset('src/img/blog/4.png')}}" class="card-img-top rounded-0" alt="...">
                                    </a>
                                </div>
                                <div class="card-body">
                                    <p class="blog-date">23rd Nov, 2021</p>
                                    <a href="" class="blog-title">Nature Connection Exercise – Perceive and Receive</a>
                                    <p class="blog-description">For this exercise find a place, any place, with some nature present which, let’s face it, is anyw...</p>
                                    <a href="" class="blog-btn mb-4">+ Read more</a>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
                <div class="col-md-3">
                    <div class="blog_search_box d-flex flex-row align-items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                            <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                        </svg>

                        <input type="text" placeholder="Search Post">
                    </div>
                    <div class="blog-category-box my-4">
                        <div class="blog-category-text">
                            Category
                        </div>
                        <hr>
                        <li><a href="">Jasper Scott (0)</a></li>
                        <li><a href="">Nature (1)</a></li>
                        <li><a href="">River (2)</a></li>
                        <li><a href="">Car (1)</a></li>
                        <li><a href="">Technology (0)</a></li>
                    </div>
                    <div class="blog-popular-posts">
                        <div class="blog-popular-post-text">
                            Popular Posts
                        </div>
                        <hr>
                        <div class="blog-post-heading"><a href="">Connecting to Care</a></div>
                        <div class="blog-post-date">23rd Nov, 2021</div>

                        <hr>
                        <div class="blog-post-heading"><a href="">Nature is a teacher – What happens when you allow...</a></div>
                        <div class="blog-post-date">23rd Nov, 2021</div>

                        <hr>
                        <div class="blog-post-heading"><a href="">Society – The soil in which we grow</a></div>
                        <div class="blog-post-date">23rd Nov, 2021</div>

                        <hr>
                        <div class="blog-post-heading"><a href="">Nature Connection Exercise – Perceive and Receive</a></div>
                        <div class="blog-post-date">23rd Nov, 2021</div>

                    </div>
                    <div class="blog-keywords mt-4">
                        <div class="blog-keywords-text">Keywords</div>
                        <hr>
                        <a href="">programming</a>
                        <a href="">blog</a>
                        <a href="">medical</a>
                        <a href="">medium</a>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
