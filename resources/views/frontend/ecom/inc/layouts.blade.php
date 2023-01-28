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
<div id="header-top-part">
    <div class="container-fluid">
        <div class="d-flex flex-row justify-content-between">

            <div class="d-flex flex-row just">
                <div class="top-icon-text-box">
                    <span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-google-play" viewBox="0 0 16 16">
                        <path d="M14.222 9.374c1.037-.61 1.037-2.137 0-2.748L11.528 5.04 8.32 8l3.207 2.96 2.694-1.586Zm-3.595 2.116L7.583 8.68 1.03 14.73c.201 1.029 1.36 1.61 2.303 1.055l7.294-4.295ZM1 13.396V2.603L6.846 8 1 13.396ZM1.03 1.27l6.553 6.05 3.044-2.81L3.333.215C2.39-.341 1.231.24 1.03 1.27Z"/>
                        </svg>
                    </span>
                    <a href="">Play store</a>
                </div>

            </div>

            <div class="d-flex flex-row just">
                <div>f</div>
                <div>f</div>
                <div>f</div>
                <div>f</div>
                <div>f</div>
            </div>
        </div>
    </div>
</div>
{{--header part end--}}






@include('frontend.ecom.inc.script')
</body>
</html>
