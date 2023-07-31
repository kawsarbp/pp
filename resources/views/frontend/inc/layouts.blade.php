<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    @include('frontend.inc.css')
    <link rel="shortcut icon" href="{{asset('src/img/logo/favicon.png')}}" type="image/x-icon">
</head>
<body>

<nav class="navbar navbar-expand-lg fixed-top">
    <div class="container">
        <a class="navbar-brand" href="{{route('homePage')}}">
{{--            <img src="{{asset('src/img/infixmart-logo.png')}}" alt="">--}}
            <div>Faz Group</div>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">

                <li class="nav-item">
                    <a class="nav-link " aria-current="page" href="{{route('homePage')}}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " aria-current="page" href="#package-section">Modules</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " aria-current="page" href="#amazing-section">Features</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " aria-current="page" href="#application-section">Support</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " aria-current="page" href="javascript:void (0)">Faz</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " aria-current="page" href="javascript:void (0)">Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " aria-current="page" href="{{ route('contactPage') }}">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>


{{--home-section--}}
@yield('home-section')
{{--home-section--}}

{{--features-section--}}
@yield('features-section')
{{--features-section--}}

{{--package-section--}}
@yield('package-section')
{{--package-section--}}

{{--modules-section--}}
@yield('modules-section')
{{--modules-section--}}

{{--amazing-section--}}
@yield('amazing-section')
{{--amazing-section--}}

{{--application-section--}}
@yield('application-section')
{{--application-section--}}

{{--footer-section--}}
@yield('footer-section')
{{--footer-section--}}









@include('frontend.inc.script')
</body>
</html>
