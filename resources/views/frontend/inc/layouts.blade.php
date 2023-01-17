<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    @include('frontend.inc.css')
</head>
<body>

<nav class="navbar navbar-expand-lg sticky-top">
    <div class="container">
        <a class="navbar-brand" href="{{route('homePage')}}">
            <img src="{{asset('src/img/infixmart-logo.png')}}" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">

                <li class="nav-item">
                    <a class="nav-link " aria-current="page" href="javascript:void (0)">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " aria-current="page" href="javascript:void (0)">Modules</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " aria-current="page" href="javascript:void (0)">Features</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " aria-current="page" href="javascript:void (0)">Support</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " aria-current="page" href="javascript:void (0)">AmazCart</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " aria-current="page" href="javascript:void (0)">Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " aria-current="page" href="javascript:void (0)">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>


@yield('home-section')

@yield('features-section')





@include('frontend.inc.script')
</body>
</html>
