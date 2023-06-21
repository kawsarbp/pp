@extends('frontend.ecom.inc.layouts')
@section('head')
    <title>Shipping Method</title>
@endsection

@section('content')
    <div id="cart-products">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="shipping-method-area p-5">
                        <div class="shipping-contact-details-box mb-4 p-4">
                            <div class="row">
                                <div class="col-sm-10">
                                    <span class="shipping-contact-text">Contact</span>
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <span class="shipping-contact-id">{{ $user->email }}</span>
                                </div>
                                <div class="col-sm-2 text-start text-lg-end">
                                    <a href="{{route('user.checkout')}}" class="shipping-info-change-btn">Change</a>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-10">
                                    <span class="shipping-contact-text">Ship to</span>
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <span class="shipping-contact-id">{{ $user->name }}</span>
                                </div>
                                <div class="col-sm-2 text-start text-lg-end">
                                    <a href="{{route('user.checkout')}}" class="shipping-info-change-btn">Change</a>
                                </div>
                            </div>
                        </div>
                        <?php $subtotal = 0; $total = 0; $totalDiscount = 0;?>

                        @if(count($cartValues)>0)
                            @foreach($cartValues as $cartValue)
                                @php
                                    $discount = $cartValue->product_price * ($cartValue->product_discount / 100);
                                    $discountedPrice = $cartValue->product_price - $discount*$cartValue->product_qty;

                                @endphp
                                <?php
                                if ($cartValue->product_discount > 0) {
                                    $price = $discountedPrice;
                                } else {
                                    $price = $cartValue->product_price;
                                }
                                if ($cartValue->product_discount > 0) {
                                    $discount = $cartValue->product_discount;
                                } else {
                                    $discount = 0;
                                }
                                $total += $price * $cartValue->product_qty;
                                $totalDiscount += $discount * $cartValue->product_qty;
                                $subtotal += $cartValue->product_price * $cartValue->product_qty;
                                ?>
                            @endforeach
                        @endif
                        <form action="{{ route('user.payment',base64_encode($total)) }}" method="GET" class="shipping-method-box">
                            @csrf
                            <div class="shipping-method-text">Payment Method</div>
                            <div class="encrypted-text">All Transactions Are Secure And Encrypted.</div>
                            <br>

                            <div class="form-check border">
                                <div class="p-3">
                                    <input class="form-check-input" type="radio" value="cashondelivery" name="payment" id="cashondelivery" checked>
                                    <label class="form-check-label" for="cashondelivery">
                                        Cash On Delivery
                                    </label>
                                </div>
                            </div>
                            <div class="form-check border">
                                <div class="p-3">
                                    <input class="form-check-input" value="stripe" type="radio" name="payment" id="Stripe" >
                                    <label class="form-check-label" for="Stripe">
                                        Stripe
                                    </label>
                                </div>
                            </div>
                            <div class="form-check border">
                                <div class="p-3">
                                    <input class="form-check-input" value="paypal" type="radio" name="payment" id="paypal" >
                                    <label class="form-check-label" for="paypal">
                                        Paypal
                                    </label>
                                </div>
                            </div>
                            <div class="form-check border">
                                <div class="p-3">
                                    <input class="form-check-input" value="myaccount" type="radio" name="payment" id="myaccount" >
                                    <label class="form-check-label" for="myaccount">
                                        My Account
                                    </label>
                                </div>
                            </div>

                            <br>
                            <div class="d-flex flex-row align-items-center">
                                <div><button type="submit" {{--href="{{route('user.paymentMethod')}}"--}} class="continue-to-payment-btn">continue to payment</button></div>
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <div><a href="{{route('user.checkout')}}" class="return-to-information-btn">return to information</a></div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
        <br><br><br><br>

        <div class="order-summary-area py-5">
            <div class="container">

                <?php $subtotal = 0; $total = 0; $totalDiscount = 0;?>

                @if(count($cartValues)>0)
                    @foreach($cartValues as $cartValue)
                        @php
                            $discount = $cartValue->product_price * ($cartValue->product_discount / 100);
                            $discountedPrice = $cartValue->product_price - $discount*$cartValue->product_qty;
                        @endphp
                        <?php
                        if ($cartValue->product_discount > 0) {
                            $price = $discountedPrice;
                        } else {
                            $price = $cartValue->product_price;
                        }
                        if ($cartValue->product_discount > 0) {
                            $discount = $cartValue->product_discount;
                        } else {
                            $discount = 0;
                        }
                        $totalDiscount += $discount * $cartValue->product_qty;
                        $total += $price * $cartValue->product_qty;
                        $subtotal += $cartValue->product_price * $cartValue->product_qty;
                        ?>

                        <div class="row py-4">
                            <div class="col-lg-4">
                                <div class="d-flex flex-row align-items-center">
                                    <div class="order-summary-img">
                                        <img src="/uploads/product/{{ $cartValue->product_photo }}" alt="">
                                    </div>
                                    &nbsp;&nbsp;&nbsp;
                                    <div class="">
                                        <div class="order-summary-product-name"><a
                                                href="">{{ substr($cartValue->product->product_title,0,22) }}...</a>
                                        </div>
                                        <div class=""><span class="order-summary-product-qty">{{ $cartValue->product_qty }} x </span>&nbsp;&nbsp;&nbsp;<span
                                                class="order-summary-product-price">$ {{ $cartValue->product_price }}</span>
                                            &nbsp;&nbsp;&nbsp;

                                            @if($cartValue->product_discount)
                                                <span class="cart-products-payment-discount">
                                            $ {{ $cartValue->product_discount }}%
                                        </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @else
                    <h3 class="text-primary text-center my-5">Product not Available in Cart</h3>
                @endif

                <div class="row">
                    <div class="col-md-5">
                        <div class="order-summary-box">
                            <div class="order-summary-text">Order Summary</div>
                            <div class="d-flex flex-row justify-content-between align-items-center mb-3">
                                <div class="order-summary-left-text">Subtotal</div>
                                <div class="order-summary-right-text"> + $ {{ $subtotal }}</div>
                            </div>
                            <div class="d-flex flex-row justify-content-between align-items-center mb-3">
                                <div class="order-summary-left-text">Shipping Charge</div>
                                <div class="order-summary-right-text">Calculated at next step</div>
                            </div>
                            <div class="d-flex flex-row justify-content-between align-items-center mb-3">
                                <div class="order-summary-left-text">Discount</div>
                                <div class="order-summary-right-text">- $ {{ $totalDiscount }}</div>
                            </div>
                            <div class="d-flex flex-row justify-content-between align-items-center mb-3">
                                <div class="order-summary-left-text">VAT/TAX/GST</div>
                                <div class="order-summary-right-text">Calculated at next step</div>
                            </div>
                            <hr class="mb-4">
                            <div class="d-flex flex-row justify-content-between align-items-center mb-3">
                                <div class="order-summary-total-text">Total</div>
                                <div class="order-summary-total-amount">$ {{ $total }}</div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

@endsection



