@extends('frontend.ecom.inc.layouts')
@section('head')
    <title>Blog Page</title>
@endsection

@section('content')
    <div id="blog">
        <div class="container">
            <div class="row py-5">
                <div class="col-md-8">
                    <div class="row">
                        <div class="col-lg-12">
                            <div>
                                <img style="width: 100%; height: auto;" src="/uploads/blog/{{ $blog->photo }}" alt="">
                            </div>
                            <div class="blog-date pt-4">{{ date('d-M-y',strtotime($blog->date)) }}</div>
                            <div class="blog-title">{{$blog->title }}</div>
                            <div class="blog-des">
                                {{$blog->description}}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
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
                        @foreach($blogs as $blog)
                        <hr>
                        <div class="blog-post-heading"><a href=" {{ route('user.blogPost',$blog->id)}} ">{{ substr($blog->title,0,15) }}...</a></div>
                        <div class="blog-post-date">{{ $blog->date }}</div>
                        @endforeach


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
