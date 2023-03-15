@extends('backend.inc.layouts')
@section('title','Dashboard')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad aut debitis exercitationem impedit magni modi unde voluptatem? Adipisci autem enim fuga fugit hic minus numquam odit officiis omnis, pariatur reprehenderit?
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
