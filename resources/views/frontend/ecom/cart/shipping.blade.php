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
                        <div class="shipping-method-box">
                            <div class="shipping-method-text">Shipping Method</div>
                            <div class="shipping-method-type-box p-3">
                                <div class="row">
                                    <div class="col-md-10">
                                        <div class="form-check">
                                            <input class="form-check-input email-check-field" type="radio" name="flatRate" id="flatRate" checked>
                                            <label class="form-check-label email-check-text flat-rate-text" for="flatRate">
                                                Flat Rate &nbsp;&nbsp; [ Manual- 5-8 days - [ <span class="shipping-flat-rate-text">Flat Rate</span> ] ]
                                            </label>
                                        </div>
                                        <div class="shipping-method-delivery-text">Minimum shopping amount (without shipping cost): $ 0.00</div>
                                    </div>
                                    <div class="col-md-2 mt-2 mt-lg-0 text-start text-lg-end">
                                        <div class="shipping-amount">$ 00.00</div>
                                    </div>
                                </div>
                            </div>
                            <div class="shipping-method-type-box p-3">
                                <div class="row">
                                    <div class="col-md-10">
                                        <div class="form-check">
                                            <input class="form-check-input email-check-field" type="radio" name="flatRate" id="freeShipping" >
                                            <label class="form-check-label email-check-text flat-rate-text" for="freeShipping">
                                                Free Shipping &nbsp;&nbsp; [ Manual- 8-12 days - [ <span class="shipping-flat-rate-text">Flat Rate</span> ] ]
                                            </label>
                                        </div>
                                        <div class="shipping-method-delivery-text">Minimum shopping amount (without shipping cost): $ 0.00</div>
                                    </div>
                                    <div class="col-md-2 mt-2 mt-lg-0 text-start text-lg-end">
                                        <div class="shipping-amount">$ 00.00</div>
                                    </div>
                                </div>
                            </div>
                            <div class="shipping-method-type-box p-3">
                                <div class="row">
                                    <div class="col-md-10">
                                        <div class="form-check">
                                            <input class="form-check-input email-check-field" type="radio" name="flatRate" id="asdasd" >
                                            <label class="form-check-label email-check-text flat-rate-text" for="asdasd">
                                                asdasd &nbsp;&nbsp; [ Manual- 3-5 days - [ <span class="shipping-flat-rate-text">Per Hundred</span> ] ]
                                            </label>
                                        </div>
                                        <div class="shipping-method-delivery-text">Minimum shopping amount (without shipping cost): $ 0.00</div>
                                    </div>
                                    <div class="col-md-2 mt-2 mt-lg-0 text-start text-lg-end">
                                        <div class="shipping-amount">$ 00.00</div>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="d-flex flex-row align-items-center">
                                <div><a href="{{route('user.paymentOption')}}" class="continue-to-payment-btn">continue to payment</a></div>
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <div><a href="{{route('user.checkout')}}" class="return-to-information-btn">return to information</a></div>
                            </div>
                        </div>

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
                        $total += $price * $cartValue->product_qty;
                        $totalDiscount += $discount * $cartValue->product_qty;
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



