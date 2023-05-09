@extends('frontend.ecom.inc.layouts')
@section('head')
    <title>User Histories</title>
@endsection

@section('content')

    <div id="product">
        <div class="my-wishlist pt-5 pb-4">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-3">
                        @include('frontend.ecom.user.sidebar')
                    </div>
                    <div class="col-lg-9">
                        <div class="purchase-history-area">
                            <div class="purchase-history-text mb-2">Purchase History</div>
                            <div class="overflow-x-auto overflow-y-auto purchase-history-table">
                                <table class="table">
                                    <tr>
                                        <th>Details</th>
                                        <th>Amount</th>
                                        <th>Delivery Status</th>
                                        <th>Payment Status</th>
                                        <th>Action</th>
                                    </tr>
                                    @foreach($orders as $order)
                                        <tr>
                                            <td>
                                                <div class="purchase-history-order-number">Order
                                                    ID: {{ auth()->id() }}</div>
                                                <div
                                                    class="purchase-history-order-date">{{ date('d-M-Y',strtotime($order->created_at)) }}</div>
                                            </td>
                                            <td>
                                                <div class="purchase-history-order-amount">
                                                    $ {{$order->product_price}}</div>
                                            </td>
                                            @if($order->delivery_status == 'processing')
                                                <td><span
                                                        class="purchase-history-order-processing-text">Processing</span>
                                                </td>
                                            @elseif($order->delivery_status == 'pending')
                                                <td><span class="purchase-history-order-pending-text"> Pending </span>
                                                </td>
                                            @elseif($order->delivery_status == 'received')
                                                <td><span class="purchase-history-order-processing-text">Received</span></td>

                                            @elseif($order->delivery_status == 'delivered')

                                                <td><span class="purchase-history-order-delivered-text">Delivered</span></td>
                                            @endif
                                            @if($order->payment_status == 'Cash On Delivery')
                                            <td><span class="purchase-history-order-pending-text"> Pending </span></td>
                                            @elseif($order->payment_status == 'paid')
                                                <td><span class="purchase-history-order-delivered-text">{{ $order->payment_status }}</span></td>
                                            @endif
                                                <td>
                                                    <a href="" class="purchase-history-download-btn">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                             fill="currentColor" class="bi bi-arrow-down"
                                                             viewBox="0 0 16 16">
                                                            <path fill-rule="evenodd"
                                                                  d="M8 1a.5.5 0 0 1 .5.5v11.793l3.146-3.147a.5.5 0 0 1 .708.708l-4 4a.5.5 0 0 1-.708 0l-4-4a.5.5 0 0 1 .708-.708L7.5 13.293V1.5A.5.5 0 0 1 8 1z"/>
                                                        </svg>
                                                    </a>
                                                </td>
                                        </tr>
                                    @endforeach

                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
