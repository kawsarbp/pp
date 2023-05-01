@extends('frontend.ecom.inc.layouts')
@section('head')
    <title>Cart</title>
@endsection

@section('content')
    <div id="cart-products">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="contact-info-area">
                        <div class="contact-information-text">Contact Information</div>
                        <div class="d-flex flex-row align-items-center">
                            <div class="checkout-img"><img class="rounded-circle" src="{{asset('src/img/profile.png')}}"
                                                           alt=""></div>
                            &nbsp;&nbsp;&nbsp;&nbsp;
                            <div class="">
                                <span class="checkout-customer-name">{{ strtok( $user->name , " ") }}</span> <span
                                    class="checkout-email">({{ $user->email }})</span>
                            </div>
                        </div>

                        <div class="form-check mt-4">
                            <input class="form-check-input email-check-field" type="checkbox" value=""
                                   id="customer-email" checked>
                            <label class="form-check-label email-check-text" for="customer-email">
                                Email me with news and offers
                            </label>
                        </div>

                        <div class="d-flex flex-row my-3 align-items-center">
                            <div class="shipping-address-text">Shipping Address</div>
                            &nbsp;&nbsp;
                            <div class="shipping-address-btn">
                                <button id="edit-btn">edit</button>
                                <button id="edit-btn2" style="display:none;">edit</button>
                            </div>
                        </div>
                        <form action="{{ route('user.userUpdate',$user->id) }}" method="POST">
                            @csrf
                            <div class="contact-information-box">

                                <div class="row mb-2">
                                    <div class="col-lg-5">
                                        <div class="table-responsive">
                                            <table class="table  table-borderless overflow-y-auto overflow-x-auto">
                                                <tr>
                                                    <td>Name</td>
                                                    <td>: <input type="text" name="name" value="{{ $user->name }}"
                                                                 style="border: none; outline: none; width: 95%;"></td>
                                                </tr>
                                                <tr>
                                                    <td>Email</td>
                                                    <td>: <input type="text" name="email" value="{{ $user->email }}"
                                                                 style="border: none; outline: none; width: 95%;"></td>
                                                </tr>
                                                <tr>
                                                    <td>Address</td>
                                                    <td>: <input type="text" name="address" value="{{ $user->address }}"
                                                                 style="border: none; outline: none; width: 95%;"></td>
                                                </tr>
                                                <tr>
                                                    <td>Phone</td>
                                                    <td>: <input type="text" name="phone" value="{{ $user->phone }}"
                                                                 style="border: none; outline: none; width: 95%;"></td>
                                                </tr>
                                                <tr>
                                                    <td>Postal Code / Pin Code</td>
                                                    <td>: <input type="text" name="postcode"
                                                                 value="{{ $user->postcode }}"
                                                                 style="border: none; outline: none; width: 95%;"></td>
                                                </tr>
                                            </table>

                                        </div>
                                    </div>
                                </div>


                            </div>
                            <div class="contact-info-edit-box" style="display:none;">

                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="name" class="label-name">Name <span
                                                    class="d-inline-block text-danger">*</span></label>
                                            <input type="text" value="{{ $user->name }}" placeholder="Enter Your Name"
                                                   id="name" name="" class="form-control contact-info-field">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="address" class="label-name">Address <span
                                                    class="d-inline-block text-danger">*</span></label>
                                            <input type="text" value="{{ $user->address }}" id="address"
                                                   placeholder="Enter Your Address" name=""
                                                   class="form-control contact-info-field">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="email" class="label-name">E-mail <span
                                                    class="d-inline-block text-danger">*</span></label>
                                            <input type="email" value="{{ $user->email }} "
                                                   placeholder="Enter Your E-mail" id="email" name=""
                                                   class="form-control contact-info-field">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="phone" class="label-name">Phone <span
                                                    class="d-inline-block text-danger">*</span></label>
                                            <input type="number" value="{{ $user->phone }} " id="phone"
                                                   placeholder="Enter Your Address" name=""
                                                   class="form-control contact-info-field">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="country" class="label-name">Country <span
                                                    class="d-inline-block text-danger">*</span></label>
                                            <select name="country" id="country" class="form-select contact-info-field">
                                                <option value="" readonly="">Select</option>
                                                <option value="bangladesh"
                                                        @if($user->country == 'bangladesh') selected="" @else '' @endif
                                                >bangladesh</option>
                                                <option value="india" @if($user->country == 'india') selected="" @else
                                                    '' @endif >india</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="state" class="label-name">State <span
                                                    class="d-inline-block text-danger">*</span></label>
                                            <input type="text" value="{{ $user->state }}" id="state"
                                                   placeholder="Enter Your Address" name="state"
                                                   class="form-control contact-info-field">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="city" class="label-name">City <span
                                                    class="d-inline-block text-danger">*</span></label>
                                            <input type="text" name="city" value="{{ $user->city }}" id="city"
                                                   placeholder="City" class="form-control contact-info-field">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="p-code" class="label-name">Postal Code <span
                                                    class="d-inline-block text-danger">*</span></label>
                                            <input type="text" id="p-code" value="{{ $user->postcode }}"
                                                   placeholder="Postal Code" name="postcode"
                                                   class="form-control contact-info-field">
                                        </div>
                                    </div>
                                </div>
                                {{--<div class="row">
                                    <div class="col-lg-12">
                                        <div class="mb-3">
                                            <label for="note" class="note-text">Note</label>
                                            <textarea name="note" id="note" cols="10" rows="5" placeholder="Note" class="form-control contact-note-field">{{ $user->note }}</textarea>
                                        </div>
                                    </div>
                                </div>--}}

                            </div>
                            <div class="mb-3">
                                <label for="note" class="note-text">Note</label>
                                <textarea id="note" name="note" cols="10" rows="5" placeholder="Note"
                                          class="form-control contact-note-field"></textarea>
                            </div>

                            <div class="form-check mt-4">
                                <input class="form-check-input email-check-field" name="condition" type="checkbox"
                                       value="{{ $user->condition }}" id="agree">
                                <label class="form-check-label email-check-text" for="agree">
                                    I agree with the terms and conditions.
                                </label>
                                @error('condition')
                                <div class="text-danger font-bold font-italic">=> {{ $message }}</div>@enderror
                            </div>
                            <div class="d-flex flex-row align-items-center my-3">
                                <div class="continue-shopping">
                                    <button type="submit" {{--href="{{route('user.shippingMethod')}}"--}}>Continue To
                                        Shipping
                                    </button>
                                </div>
                                &nbsp;&nbsp;&nbsp;
                                <div class="return-to-cart-btn"><a href="{{ route('user.Cart') }}">Return To Cart</a>
                                </div>
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
                            $discountedPrice = $cartValue->product_price - $discount;
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

@section('footer')
    <script>
        $("#edit-btn").click(function () {
            $("#edit-btn").hide();
            $(".contact-information-box").hide();
            $(".contact-info-edit-box").show();
            $("#edit-btn2").show();
        });
        $("#edit-btn2").click(function () {
            $("#edit-btn").show();
            $(".contact-information-box").show();
            $(".contact-info-edit-box").hide();
            $("#edit-btn2").hide();
        });
    </script>
@endsection
