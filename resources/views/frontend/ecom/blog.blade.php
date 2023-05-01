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
                        @if($search)
                            @if(count($search) > 0)
                                @foreach($search as $show)
                                    <div class="col-lg-4 col-md-12 mb-3">
                                        <div class="card rounded-0 blog-box">
                                            <div class="blog-img">
                                                <a href="{{ route('user.blogPost',$show->id) }}">
                                                    <img src="/uploads/blog/{{ $show->photo }}"
                                                         class="card-img-top rounded-0" alt="...">
                                                </a>
                                            </div>
                                            <div class="card-body">
                                                <p class="blog-date">{{ date('d-M-y',strtotime($show->date)) }}</p>
                                                <a href="{{ route('user.blogPost',$show->id) }}"
                                                   class="blog-title">{{ substr($show->title,0,20) }}...</a>
                                                <p class="blog-description">{{ substr($show->description,0,100) }}
                                                    ...</p>
                                                <a href="{{ route('user.blogPost',$show->id) }}" class="blog-btn mb-4">+
                                                    Read more</a>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @else
                                <h2 class="text-center text-danger">Blog Post Not Available</h2>
                            @endif
                        @else
                            @foreach($blogs as $blog)
                                <div class="col-lg-4 col-md-12 mb-3">
                                    <div class="card rounded-0 blog-box">
                                        <div class="blog-img">
                                            <a href="{{ route('user.blogPost',$blog->id) }}">
                                                <img src="/uploads/blog/{{ $blog->photo }}"
                                                     class="card-img-top rounded-0" alt="...">
                                            </a>
                                        </div>
                                        <div class="card-body">
                                            <p class="blog-date">{{ date('d-M-y',strtotime($blog->date)) }}</p>
                                            <a href="{{ route('user.blogPost',$blog->id) }}"
                                               class="blog-title">{{ substr($blog->title,0,20) }}...</a>
                                            <p class="blog-description">{{ substr($blog->description,0,100) }}...</p>
                                            <a href="{{ route('user.blogPost',$blog->id) }}" class="blog-btn mb-4">+
                                                Read more</a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @endif
                    </div>
                </div>
                <div class="col-md-3">

                    <form action="{{ route('user.blogSearch') }}" method="GET"
                          class="blog_search_box d-flex flex-row align-items-center">
                        <button type="submit">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                 class="bi bi-search" viewBox="0 0 16 16">
                                <path
                                    d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                            </svg>
                        </button>
                        <input type="text" name="search" placeholder="Search Post">
                    </form>
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
