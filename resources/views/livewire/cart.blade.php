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

        <?php $subtotal = 0; $total = 0; $totalDiscount = 0;?>
        @if(session()->has('cartmsg'))
            <div class="text-center">
                <script>
                    $(document).ready(function () {
                        toastr.{{ session()->get('type') }}(@if(session()->has('cartmsg'))'{{ session('cartmsg') }}' @endif, @if(session()->has('cartmsg'))'{{ session('type') }}' @endif, {
                            "progressBar": true,
                            "positionClass": "toast-top-right",
                            "showDuration": "200",
                        });
                    });
                </script>
            </div>
        @endif
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

            $productTotal = $price * $cartValue->product_qty;

            ?>
            <div class="cart-items-bg px-4 py-2 mb-3">
                <div class="row align-items-center">
                    <div class="col-lg-4 col-md-12 ">
                        <a href="{{route('user.productDetails',$cartValue->product_id)}}" class="cart-item-img">
                            <div class="d-flex flex-row align-items-center">
                                <img src="/uploads/product/{{ $cartValue->product_photo }}" alt=""> &nbsp;&nbsp;
                                <div class="cart-product-name">  {{ $cartValue->product_name }}</div>
                            </div>
                        </a>
                    </div>

                    @php
                        $discount = $cartValue->product_price * ($cartValue->product_discount / 100);
                        $discountedPrice = $cartValue->product_price - $discount;
                    @endphp

                    <div class="col-lg-2  col-md-12 ">
                        @if($cartValue->product_discount)
                            <div class="cart-product-discount"><span>-{{ $cartValue->product_discount }}%</span></div>
                        @endif
                        <div class="cart-product-amount">$ {{ $cartValue->product_price}}</div>
                    </div>

                    <div class="col-lg-2  col-md-12 ">
                        <div class="cart-items-qty">
                            <div>

                                <div class="d-flex flex-row">
                                    <button wire:click="decQty({{ $cartValue->id }})" type="submit"
                                            class="card-items-ind-btn">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                             fill="currentColor" class="bi bi-dash-lg" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd"
                                                  d="M2 8a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11A.5.5 0 0 1 2 8Z"/>
                                        </svg>
                                    </button>
                                    <input type="text" class="cart-qty-field" value="{{ $cartValue->product_qty }}"
                                           min="1" readonly>
                                    <button wire:click="incQty({{ $cartValue->id }})" type="submit"
                                            class="card-items-ind-btn">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                             fill="currentColor" class="bi bi-plus-lg" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd"
                                                  d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2Z"/>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2  col-md-12 ">
                            <div class="cart-product-amount-original">
                                $ {{ $productTotal }}
                            </div>
                    </div>
                    <div class="col-lg-2  col-md-12 ">
                        <div class="cart-product-remove-icon">
                            <button wire:click="removeformCart({{ $cartValue->id }})">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                     class="bi bi-trash" viewBox="0 0 16 16">
                                    <path
                                        d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                                    <path fill-rule="evenodd"
                                          d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            </div>


        @endforeach
        @else
            <h3 class="text-primary text-center my-5">Product not Available in Cart</h3>
        @endif

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
                            <div class="order-summary-right-text"> + ${{ $subtotal }}</div>
                        </div>
                        <div class="d-flex flex-row justify-content-between align-items-center mb-3">
                            <div class="order-summary-left-text">Shipping Charge</div>
                            <div class="order-summary-right-text">Calculated at next step</div>
                        </div>
                        <div class="d-flex flex-row justify-content-between align-items-center mb-3">
                            <div class="order-summary-left-text">Discount</div>
                            <div class="order-summary-right-text">- $ {{ $totalDiscount }} </div>
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

