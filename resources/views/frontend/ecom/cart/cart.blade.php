@extends('frontend.ecom.inc.layouts')
@section('head')
    <title>Cart</title>
@endsection
@section('content')
    <div id="cart-products">
        <div class="container-fluid py-5">
            <div class="shipping-charge-text mb-4">Shipping charge free from <span>$ 0.00</span></div>
            <div class="none768 cart-items-bg px-4 py-3 mb-4">
                <div class="row">
                    <div class="col-md-4">
                        <div class="cart-item-header-text">Products</div>
                    </div>
                    <div class="col-md-2">
                        <div class="cart-item-header-text">Price</div>
                    </div>
                    <div class="col-md-2">
                        <div class="cart-item-header-text">Quantity</div>
                    </div>
                    <div class="col-md-2 text-center">
                        <div class="cart-item-header-text">Subtotal</div>
                    </div>
                    <div class="col-md-2 text-end">
                        <div class="cart-item-header-text">Remove</div>
                    </div>
                </div>
            </div>


            <div class="cart-items-bg px-4 py-2 mb-3">
                <div class="row align-items-center">
                    <div class="col-lg-4 col-md-12 ">
                        <a href="{{route('user.productDetails')}}" class="cart-item-img">
                            <div class="d-flex flex-row align-items-center">
                                <img src="{{asset('src/img/product/6.png')}}" alt=""> &nbsp;&nbsp;
                                <div class="cart-product-name">Nikon dslr camera</div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-2  col-md-12 ">
                        <div class="cart-product-discount"> <span>-6%</span> </div>
                        <div class="cart-product-amount">$ 700.00</div>
                    </div>
                    <div class="col-lg-2  col-md-12 ">
                        <div class="cart-items-qty">
                            <form action="">
                                <div class="d-flex flex-row">
                                    <button type="submit" class="card-items-ind-btn">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-dash-lg" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd" d="M2 8a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11A.5.5 0 0 1 2 8Z"/>
                                        </svg>
                                    </button>
                                    <input type="text" class="cart-qty-field " value="1" min="1" readonly>
                                    <button type="submit" class="card-items-ind-btn">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-lg" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd" d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2Z"/>
                                        </svg>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-2  col-md-12 ">
                        <div class="cart-product-amount-original  "> $ 123.00 </div>
                    </div>
                    <div class="col-lg-2  col-md-12 ">
                        <div class="cart-product-remove-icon">
                            <a href="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                    <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                                    <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>


            <div class="cart-items-bg px-4 py-2 mb-3">
                <div class="row align-items-center">
                    <div class="col-lg-4 col-md-12 ">
                        <a href="" class="cart-item-img">
                            <div class="d-flex flex-row align-items-center">
                                <img src="{{asset('src/img/product/7.png')}}" alt=""> &nbsp;&nbsp;
                                <div class="cart-product-name">Nikon dslr camera</div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-2  col-md-12 ">
                        <div class="cart-product-discount"> <span>-6%</span> </div>
                        <div class="cart-product-amount">$ 700.00</div>
                    </div>
                    <div class="col-lg-2  col-md-12 ">
                        <div class="cart-items-qty">
                            <form action="">
                                <div class="d-flex flex-row">
                                    <button type="submit" class="card-items-ind-btn">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-dash-lg" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd" d="M2 8a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11A.5.5 0 0 1 2 8Z"/>
                                        </svg>
                                    </button>
                                    <input type="text" class="cart-qty-field " value="1" min="1" readonly>
                                    <button type="submit" class="card-items-ind-btn">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-lg" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd" d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2Z"/>
                                        </svg>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-2  col-md-12 ">
                        <div class="cart-product-amount-original  "> $ 123.00 </div>
                    </div>
                    <div class="col-lg-2  col-md-12 ">
                        <div class="cart-product-remove-icon">
                            <a href="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                    <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                                    <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>


            <div class="cart-items-bg px-4 py-2 mb-3">
                <div class="row align-items-center">
                    <div class="col-lg-4 col-md-12 ">
                        <a href="" class="cart-item-img">
                            <div class="d-flex flex-row align-items-center">
                                <img src="{{asset('src/img/product/8.png')}}" alt=""> &nbsp;&nbsp;
                                <div class="cart-product-name">Nikon dslr camera</div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-2  col-md-12 ">
                        <div class="cart-product-discount"> <span>-6%</span> </div>
                        <div class="cart-product-amount">$ 700.00</div>
                    </div>
                    <div class="col-lg-2  col-md-12 ">
                        <div class="cart-items-qty">
                            <form action="">
                                <div class="d-flex flex-row">
                                    <button type="submit" class="card-items-ind-btn">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-dash-lg" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd" d="M2 8a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11A.5.5 0 0 1 2 8Z"/>
                                        </svg>
                                    </button>
                                    <input type="text" class="cart-qty-field " value="1" min="1" readonly>
                                    <button type="submit" class="card-items-ind-btn">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-lg" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd" d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2Z"/>
                                        </svg>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-2  col-md-12 ">
                        <div class="cart-product-amount-original  "> $ 123.00 </div>
                    </div>
                    <div class="col-lg-2  col-md-12 ">
                        <div class="cart-product-remove-icon">
                            <a href="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                    <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                                    <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="d-flex flex-row justify-content-between mt-4">
                <div class="continue-shopping-btn"><a href="{{route('user.home')}}">Continue Shopping</a></div>
                <div class="proceed-to-checkout-btn"><a href="{{route('user.checkout')}}">Proceed to checkout</a></div>
            </div>
        </div>

        <div class="order-summary-area py-5">
            <div class="container">
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
