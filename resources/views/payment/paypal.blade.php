<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Paypal</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://www.paypal.com/sdk/js?client-id={{env('PAYPAL_SANDBOX_CLIENT_ID')}}"></script>
</head>
<body>

<div class="text-center mt-5">
    <a class="btn btn-primary" href="{{route('processPaypal',$totalprice)}}">Pay {{$totalprice}}$</a>
</div>

@if(\Session::has('error'))
    <div class="alert alert-danger">{{ \Session::get('error') }}</div>
    {{ \Session::forget('error') }}
@endif

@if(\Session::has('success'))
    <div class="alert alert-success">{{ \Session::get('success') }}</div>
    {{ \Session::forget('success') }}
@endif

</body>
</html>
