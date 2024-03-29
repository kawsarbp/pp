<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="shortcut icon" href="{{asset('src/img/logo/favicon.png')}}" type="image/x-icon">
    @yield('head')
    @include('frontend.ecom.inc.css')

    @livewireStyles
</head>
<body>




{{--header part start--}}
@include('frontend.ecom.inc.header')
{{--header part end--}}

{{--carousel slider start--}}
@yield('content')
{{--carousel slider start--}}





{{--footer section--}}
@include('frontend.ecom.inc.footer')
{{--footer section--}}

@include('frontend.ecom.inc.script')

@yield('footer')

@livewireScripts
</body>
</html>
