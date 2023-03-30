{{--bootstrap--}}
<script src="{{asset('src/js/bootstrap/bootstrap.bundle.min.js')}}"></script>
{{--<script src="{{asset('src/js/bootstrap/bootstrap.min.js')}}"></script>--}}
{{--<script src="{{asset('src/js/bootstrap/popper.min.js')}}"></script>--}}
{{--owl carousel--}}
<script src="{{asset('src/js/carousel/owl.carousel.min.js')}}"></script>
{{--fixed nav--}}
<script src="{{asset('src/js/fixednav/navbar-fixed.js')}}"></script>
{{--core js--}}
<script src="{{asset('src/js/script.js')}}"></script>
{{--toastr--}}
<script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

{{--@if(session()->has('message'))
    <script>
        $(document).ready(function () {
            toastr.success('{{ session()->get('message') }}','null')
        });
    </script>
@endif--}}


<script>
    $(document).ready(function () {
        toastr.success(@if(session()->has('message'))'{{ session('message') }}' @endif, @if(session()->has('message'))'{{ session('type') }}' @endif, {
            "progressBar": true,
            "positionClass": "toast-top-right",
            "showDuration": "200",
        });
    });
</script>
