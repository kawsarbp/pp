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
                            <div class="checkout-img"><img class="rounded-circle" src="{{asset('src/img/profile.png')}}" alt=""></div>
                            &nbsp;&nbsp;&nbsp;&nbsp;
                            <div class="">
                                <span class="checkout-customer-name">{{ strtok( $user->name , " ") }}</span> <span class="checkout-email">({{ $user->email }})</span>
                            </div>
                        </div>
                        <form action="javascript:void (0)">
                            <div class="form-check mt-4">
                                <input class="form-check-input email-check-field" type="checkbox" value="" id="customer-email" checked>
                                <label class="form-check-label email-check-text" for="customer-email">
                                    Email me with news and offers
                                </label>
                            </div>

                            <div class="d-flex flex-row my-3 align-items-center">
                                <div class="shipping-address-text">Shipping Address</div>
                                &nbsp;&nbsp;
                                <div class="shipping-address-btn"><button type="submit" id="edit-btn">edit</button><button type="submit" id="edit-btn2" style="display:none;">edit</button></div>
                            </div>

                            <div class="contact-information-box">

                                <div class="row mb-2">
                                    <div class="col-lg-4">
                                        <div class="table-responsive">
                                            <table class="table  table-borderless overflow-y-auto overflow-x-auto">
                                                <tr>
                                                    <td>Name</td>
                                                    <td>: {{ $user->name }}</td>
                                                </tr>
                                                <tr>
                                                    <td>Email</td>
                                                    <td>: {{ $user->email }}</td>
                                                </tr>
                                                <tr>
                                                    <td>Address</td>
                                                    <td>: {{ $user->address }}</td>
                                                </tr>
                                                <tr>
                                                    <td>Phone</td>
                                                    <td>: {{ $user->phone }}</td>
                                                </tr>
                                                <tr>
                                                    <td>Postal Code / Pin Code 	</td>
                                                    <td>: {{ $user->postcode }}</td>
                                                </tr>
                                            </table>

                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="note" class="note-text">Note</label>
                                    <textarea name="" id="note" cols="10" rows="5" placeholder="Note" class="form-control contact-note-field"></textarea>
                                </div>

                            </div>
                            <div class="contact-info-edit-box" style="display:none;">

                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="name" class="label-name">Name <span class="d-inline-block text-danger">*</span></label>
                                            <input type="text" placeholder="Enter Your Name" id="name" name="" class="form-control contact-info-field">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="address" class="label-name">Address <span class="d-inline-block text-danger">*</span></label>
                                            <input type="text" id="address" placeholder="Enter Your Address" name="" class="form-control contact-info-field">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="email" class="label-name">E-mail <span class="d-inline-block text-danger">*</span></label>
                                            <input type="email" placeholder="Enter Your E-mail" id="email" name="" class="form-control contact-info-field">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="phone" class="label-name">Phone <span class="d-inline-block text-danger">*</span></label>
                                            <input type="number" id="phone" placeholder="Enter Your Address" name="" class="form-control contact-info-field">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="country" class="label-name">Country <span class="d-inline-block text-danger">*</span></label>
                                            <select name="" id="country" class="form-select contact-info-field">
                                                <option value="">Select</option>
                                                <option value="">bangladesh</option>
                                                <option value="">india</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="state" class="label-name">State <span class="d-inline-block text-danger">*</span></label>
                                            <input type="text" id="state" placeholder="Enter Your Address" name="" class="form-control contact-info-field">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="city" class="label-name">City <span class="d-inline-block text-danger">*</span></label>
                                            <input type="text" id="city" placeholder="City" class="form-control contact-info-field">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="p-code" class="label-name">Postal Code <span class="d-inline-block text-danger">*</span></label>
                                            <input type="text" id="p-code" placeholder="Postal Code" name="" class="form-control contact-info-field">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="mb-3">
                                            <label for="note" class="note-text">Note</label>
                                            <textarea name="" id="note" cols="10" rows="5" placeholder="Note" class="form-control contact-note-field"></textarea>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="form-check mt-4">
                                <input class="form-check-input email-check-field" type="checkbox" value="" id="agree" checked>
                                <label class="form-check-label email-check-text" for="agree">
                                    I agree with the terms and conditions.
                                </label>
                            </div>
                            <div class="d-flex flex-row align-items-center my-3">
                                <div class="continue-shopping"><a href="{{route('user.shippingMethod')}}">Continue To Shipping </a></div>
                                &nbsp;&nbsp;&nbsp;
                                <div class="return-to-cart-btn"><a href="{{ route('user.Cart') }}">Return To Cart</a></div>
                            </div>


                        </form>


                    </div>
                </div>
            </div>
        </div>
        <br><br><br><br>
        <div class="order-summary-area py-5">
            <div class="container">
                <div class="row py-4">
                    <div class="col-lg-4">
                        <div class="d-flex flex-row align-items-center">
                            <div class="order-summary-img">
                                <img src="{{asset('src/img/product/1.png')}}" alt="">
                            </div>
                            &nbsp;&nbsp;&nbsp;
                            <div class="">
                                <div class="order-summary-product-name"><a href="">Lenovo IdeaPad Slim 3i Core...</a></div>
                                <div class=""><span class="order-summary-product-qty">1 x </span>&nbsp;&nbsp;&nbsp;<span class="order-summary-product-price">$ 339.50</span></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row py-4">
                    <div class="col-lg-4">
                        <div class="d-flex flex-row align-items-center">
                            <div class="order-summary-img">
                                <img src="{{asset('src/img/product/2.png')}}" alt="">
                            </div>
                            &nbsp;&nbsp;&nbsp;
                            <div class="">
                                <div class="order-summary-product-name"><a href="">Lenovo IdeaPad Slim 3i Core...</a></div>
                                <div class=""><span class="order-summary-product-qty">1 x </span>&nbsp;&nbsp;&nbsp;<span class="order-summary-product-price">$ 339.50</span></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row py-4">
                    <div class="col-lg-4">
                        <div class="d-flex flex-row align-items-center">
                            <div class="order-summary-img">
                                <img src="{{asset('src/img/product/3.png')}}" alt="">
                            </div>
                            &nbsp;&nbsp;&nbsp;
                            <div class="">
                                <div class="order-summary-product-name"><a href="">Lenovo IdeaPad Slim 3i Core...</a></div>
                                <div class=""><span class="order-summary-product-qty">1 x </span>&nbsp;&nbsp;&nbsp;<span class="order-summary-product-price">$ 339.50</span></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-5">
                        <div class="order-summary-box">
                            <div class="order-summary-text">Order Summary</div>
                            <div class="d-flex flex-row justify-content-between align-items-center mb-3">
                                <div class="order-summary-left-text">Subtotal</div>
                                <div class="order-summary-right-text"> + $ 991.00 </div>
                            </div>
                            <div class="d-flex flex-row justify-content-between align-items-center mb-3">
                                <div class="order-summary-left-text">Shipping Charge</div>
                                <div class="order-summary-right-text">Calculated at next step </div>
                            </div>
                            <div class="d-flex flex-row justify-content-between align-items-center mb-3">
                                <div class="order-summary-left-text">Discount</div>
                                <div class="order-summary-right-text">- $ 52.95 </div>
                            </div>
                            <div class="d-flex flex-row justify-content-between align-items-center mb-3">
                                <div class="order-summary-left-text">VAT/TAX/GST</div>
                                <div class="order-summary-right-text">Calculated at next step </div>
                            </div>
                            <hr class="mb-4">
                            <div class="d-flex flex-row justify-content-between align-items-center mb-3">
                                <div class="order-summary-total-text">Total</div>
                                <div class="order-summary-total-amount">$ 938.05 </div>
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
        $("#edit-btn").click(function(){
            $("#edit-btn").hide();
            $(".contact-information-box").hide();
            $(".contact-info-edit-box").show();
            $("#edit-btn2").show();
        });
        $("#edit-btn2").click(function(){
            $("#edit-btn").show();
            $(".contact-information-box").show();
            $(".contact-info-edit-box").hide();
            $("#edit-btn2").hide();
        });
    </script>
@endsection
