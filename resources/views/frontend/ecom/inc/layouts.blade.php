<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    @include('frontend.ecom.inc.css')
</head>
<body>

{{--header part start--}}
@include('frontend.ecom.inc.header')
{{--header part end--}}

{{--carousel slider start--}}
@yield('carousel')
{{--carousel slider start--}}

{{--add to cart products start--}}
@yield('product')
{{--add to cart products start--}}

{{--categories--}}
@yield('categories')
{{--categories--}}






@include('frontend.ecom.inc.script')
</body>
</html>