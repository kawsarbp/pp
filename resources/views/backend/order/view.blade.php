@extends('backend.inc.layouts')
@section('title','Orders')

@section('content')
    <div class="row pt-4">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Single Order</h4>
                    <div class="overflow-x-auto overflow-y-hidden">
                        <table class="table table-bordered">
                            <tr class="bg-success text-white">
                                <th>Customer Name</th>
                                <th>Customer Email</th>
                                <th>Customer Address</th>
                                <th>Customer Phone</th>
                            </tr>
                            <tr>
                                <td>{{ $order->name }}</td>
                                <td>{{ $order->email }}</td>
                                <td>{{ $order->address }}</td>
                                <td>{{ $order->phone }}</td>
                            </tr>
                        </table>
                        <table class="table table-bordered">
                            <tr class="bg-success text-white">
                                <th>Product Name</th>
                                <th>Product Price</th>
                                <th>Product Discount</th>
                                <th>Product Qty</th>
                            </tr>
                            <tr>
                                <td>{{ $order->product_name }}</td>
                                <td>{{ $order->product_price }}</td>
                                <td>@if($order->product_discount == null) NO DISCOUNT @else {{ $order->product_discount }}@endif</td>
                                <td>{{ $order->product_qty }}</td>
                            </tr>
                        </table>
                        <table class="table table-bordered ">
                            <tr class="bg-success text-white">
                                <th class="text-center">Product Image</th>
                            </tr>
                            <tr>
                                <td class="text-center"><img class="w-25" src="/uploads/product/{{ $order->product_photo }}" alt=""></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection



@section('script')

@endsection
