@extends('backend.inc.layouts')
@section('title','Dahboard')

@section('content')
    <div class="row mt-4">
        <div class="col-lg-12">
            <h1 class="text-center">Admin Panel</h1>
        </div>
    </div>
@endsection


@section('script')
    <script>
        $.toast({
            @if(session('message'))
            heading: '{{"Faz Group Ltd"}}'
            , text: '{{ session('message') }}'
            @else
            , text: '{{"thank you for you, Visite this site."}}'
            @endif
            , position: 'top-right'
            , loaderBg: '#ff6849'

            @if(session('message'))
            , icon: '{{ session('type') }}'
            @endif
            , hideAfter: 2500
            , stack: 6
        })
    </script>
@endsection
