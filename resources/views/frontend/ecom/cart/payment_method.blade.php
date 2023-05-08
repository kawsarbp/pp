@extends('frontend.ecom.inc.layouts')
@section('head')
    <title>Payment Method</title>
@endsection

@section('content')
    @if(count($orders) > 0)
    <div id="payment-method">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="purchase-area">
                        <div class="py-3 text-center">
                            <div class="purchase-text">Thank you for your purchase!</div>
                            <div class="purchase-number">Your order number is {{ auth()->id() }}</div>
                            <hr>
                        </div>
                        <div class="px-4 pb-4">
                            <div class="purchase-product-box p-2">
                                <div class="row">
                                    <div class="col-lg-7">


                                        <?php $subtotal = 0; $total = 0; $totalDiscount = 0; ?>

                                            @foreach($orders as $order)
                                                @php
                                                    $discount = $order->product_price * ($order->product_discount / 100);
                                                    $discountedPrice = $order->product_price - $discount;
                                                @endphp
                                                <?php
                                                if ($order->product_discount > 0) {
                                                    $price = $discountedPrice;
                                                } else {
                                                    $price = $order->product_price;
                                                }
                                                if ($order->product_discount > 0) {
                                                    $discount = $order->product_discount;
                                                } else {
                                                    $discount = 0;
                                                }
                                                $total += $price * $order->product_qty;
                                                $totalDiscount += $discount * $order->product_qty;
                                                $subtotal += $order->product_price * $order->product_qty;


                                                $sdate = date('d-m-y', strtotime($order->created_at));
                                                // get the current date
                                                $date = now();
                                                // add 7 days to the date
                                                $futureDate = $date->addDays(7);
                                                $edate = date('d-m-y', strtotime($futureDate));
                                                ?>
                                                <div class="d-flex flex-row align-items-center py-2">
                                                    <div class="purchase-product-img"><img
                                                            src="/uploads/product/{{$order->product_photo}}" alt=""></div>
                                                    &nbsp;&nbsp;&nbsp;&nbsp;
                                                    <div class="purchase-product-name"><a
                                                            href="">{{ $order->product_name }}</a></div>
                                                </div>
                                            @endforeach

                                    </div>
                                    <div class="col-lg-5">
                                        <div class="purchase-date">Est arrival date: {{ $sdate }} - {{$edate}}</div>
                                    </div>
                                </div>
                            </div>
                            <div class="row align-items-center my-4">
                                <div class="col-xl-9">
                                    <div class="view-order-details">For more details track your delivery status order
                                        <span class="account-order-text">My Account > My Order</span></div>
                                </div>
                                <div class="col-xl-3 text-start text-xl-end mt-3 mt-xl-0"><a
                                        href="{{ route('user.orderDetails') }}" class="purchase-view-order-btn">View
                                        Order</a></div>
                            </div>
                            <div class=" confirm-email-text-box">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                     class="bi bi-envelope" viewBox="0 0 16 16">
                                    <path
                                        d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z"/>
                                </svg>
                                We have a confirmation email to <b>{{ auth()->user()->email }}</b> With the order
                                details
                            </div>
                            <div class="row order-summary align-items-center p-2 my-3 mx-0">
                                <div class="col-lg-10">
                                    <div class="order-summary-text">Order summary</div>
                                </div>
                                <div class="col-lg-2">
                                    <div class="order-summary-amount">$ {{ $total }}</div>
                                </div>
                            </div>
                            <div class="text-center"><a href="{{route('user.home')}}"
                                                        class="purchase-page-continue-shopping">Continue Shopping</a>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
    @else

        <?php
        return redirect()->route('user.home')->with(['type' => 'success', 'message' => 'Please Added product in cart!.']);;
        ?>
    @endif
@endsection



