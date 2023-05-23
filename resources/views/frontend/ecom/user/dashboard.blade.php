@extends('frontend.ecom.inc.layouts')
@section('head')
    <title>User Dashboard</title>
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
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="order-box">
                                    <div class="order-box-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-basket2" viewBox="0 0 16 16">
                                            <path d="M4 10a1 1 0 0 1 2 0v2a1 1 0 0 1-2 0v-2zm3 0a1 1 0 0 1 2 0v2a1 1 0 0 1-2 0v-2zm3 0a1 1 0 1 1 2 0v2a1 1 0 0 1-2 0v-2z"/>
                                            <path d="M5.757 1.071a.5.5 0 0 1 .172.686L3.383 6h9.234L10.07 1.757a.5.5 0 1 1 .858-.514L13.783 6H15.5a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-.623l-1.844 6.456a.75.75 0 0 1-.722.544H3.69a.75.75 0 0 1-.722-.544L1.123 8H.5a.5.5 0 0 1-.5-.5v-1A.5.5 0 0 1 .5 6h1.717L5.07 1.243a.5.5 0 0 1 .686-.172zM2.163 8l1.714 6h8.246l1.714-6H2.163z"/>
                                        </svg>
                                    </div>
                                    <div class="order-box-text">total order</div>
                                    <div class="order-box-amount">{{ count($totalOrders) }}</div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="order-box">
                                    <div class="order-box-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star" viewBox="0 0 16 16">
                                            <path d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z"/>
                                        </svg>
                                    </div>
                                    <div class="order-box-text">My Wishlist</div>
                                    <div class="order-box-amount">{{ count($wishlistValues) }}</div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="order-box">
                                    <div class="order-box-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                             fill="currentColor" class="bi bi-bag-check" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd"
                                                  d="M10.854 8.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708L7.5 10.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>
                                            <path
                                                d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V5z"/>
                                        </svg>
                                    </div>
                                    <div class="order-box-text">Product in Cart</div>
                                    <div class="order-box-amount">{{ count($cartValues) }}</div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="order-box">
                                    <div class="order-box-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-disc" viewBox="0 0 16 16">
                                            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                            <path d="M10 8a2 2 0 1 1-4 0 2 2 0 0 1 4 0zM8 4a4 4 0 0 0-4 4 .5.5 0 0 1-1 0 5 5 0 0 1 5-5 .5.5 0 0 1 0 1zm4.5 3.5a.5.5 0 0 1 .5.5 5 5 0 0 1-5 5 .5.5 0 0 1 0-1 4 4 0 0 0 4-4 .5.5 0 0 1 .5-.5z"/>
                                        </svg>
                                    </div>
                                    <div class="order-box-text">Coupon Used</div>
                                    <div class="order-box-amount">0</div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="order-box">
                                    <div class="order-box-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-basket2" viewBox="0 0 16 16">
                                            <path d="M4 10a1 1 0 0 1 2 0v2a1 1 0 0 1-2 0v-2zm3 0a1 1 0 0 1 2 0v2a1 1 0 0 1-2 0v-2zm3 0a1 1 0 1 1 2 0v2a1 1 0 0 1-2 0v-2z"/>
                                            <path d="M5.757 1.071a.5.5 0 0 1 .172.686L3.383 6h9.234L10.07 1.757a.5.5 0 1 1 .858-.514L13.783 6H15.5a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-.623l-1.844 6.456a.75.75 0 0 1-.722.544H3.69a.75.75 0 0 1-.722-.544L1.123 8H.5a.5.5 0 0 1-.5-.5v-1A.5.5 0 0 1 .5 6h1.717L5.07 1.243a.5.5 0 0 1 .686-.172zM2.163 8l1.714 6h8.246l1.714-6H2.163z"/>
                                        </svg>
                                    </div>
                                    <div class="order-box-text">Completed Order</div>
                                    <div class="order-box-amount">{{ count($compliteOrders) }}</div>
                                </div>
                            </div>

                        </div>

                        <div class="row my-4">
                            <div class="col-lg-6">
                                <div class="purchase-history">
                                    <div class="d-flex flex-row justify-content-between align-items-center">
                                        <div class="purchase-history-text">Purchase History</div>
                                        <div class="purchase-history-see-all"><a href="{{route('user.myHistories')}}">see
                                                all</a></div>
                                    </div>
                                    <div
                                        class="d-flex flex-row justify-content-between purchase-history-text-box px-4 py-3 my-3">
                                        <div class="purchase-history-text-word">Details</div>
                                        <div class="purchase-history-text-word">Amount</div>
                                        <div class="purchase-history-text-word">Status</div>
                                    </div>
                                    @if(count($orders) > 0)
                                    @foreach($orders as $order)
                                    <div
                                        class="d-flex flex-row purchase-history-box justify-content-between align-items-center">
                                        <div class="">
                                            <div class="purchase-history-number">Order ID: {{ $order->order_id }}</div>
                                            <div class="purchase-history-date">{{ date('d-M-Y',strtotime($order->created_at)) }}</div>
                                        </div>
                                        <div class="purchase-history-amount">$ {{$order->total_price}}</div>
                                        @if($order->delivery_status == 'processing')
                                        <div class="purchase-history-processing">Processing</div>
                                        @elseif($order->delivery_status == 'received')
                                            <div class="purchase-history-delivered">Received</div>
                                        @elseif($order->delivery_status == 'delivered')
                                            <div class="purchase-history-delivered">Delivered</div>
                                        @endif
                                    </div>
                                    <hr>
                                    @endforeach
                                    @else
                                    <h5 class="text-info text-center">No Product Available</h5>
                                    @endif
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="purchase-history">
                                    <div class="d-flex flex-row justify-content-between align-items-center">
                                        <div class="purchase-history-text">My Wishlist</div>
                                        <div class="purchase-history-see-all"><a href="{{route('user.myWishlist')}}">see
                                                all</a></div>
                                    </div>
                                    <hr>
                                    @if(count($wishlistValues) > 0)
                                        @foreach($wishlistValues as $wishlist)
                                            <a href="{{ route('user.productDetails',$wishlist->product_id) }}"
                                               class="my-wishlist-box mb-3">
                                                <div class="d-flex flex-row align-items-center">
                                                    <div class="my-wishlist-box-img"><img
                                                            src="/uploads/product/{{ $wishlist->product_photo }}"
                                                            alt="..."></div>
                                                    &nbsp;&nbsp;&nbsp;
                                                    <div>
                                                        <div
                                                            class="my-wishlist-box-product-name"> {{ $wishlist->product_name }}  </div>
                                                        <div class="my-wishlist-box-product-price">
                                                            $ {{ $wishlist->product_price }} </div>
                                                    </div>
                                                </div>
                                            </a>
                                        @endforeach
                                    @else
                                        <div class="text-primary text-center">There are no product in wishlist.</div>
                                    @endif

                                </div>
                            </div>
                        </div>

                        <div class="row my-4">
                            <div class="col-md-12">
                                <a href="" class="d-block">
                                    <img src="{{asset('src/img/brand.jpeg')}}" class="img-fluid" alt="">
                                </a>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-6">
                                <div class="purchase-history">
                                    <div class="d-flex flex-row justify-content-between align-items-center">
                                        <div class="purchase-history-text">My Wishlist</div>
                                        <div class="purchase-history-see-all"><a href="{{route('user.myWishlist')}}">see all</a></div>
                                    </div>
                                    @if(count($wishlistValues)>0)
                                        @foreach($wishlistValues as $wishlist)
                                            <hr>
                                            <a href="{{ route('user.productDetails',$wishlist->product_id) }}" class="my-wishlist-box mb-3">
                                                <div class="d-flex flex-row align-items-center">
                                                    <div class="my-wishlist-box-img"><img
                                                            src="/uploads/product/{{ $wishlist->product_photo }}" alt="..."></div>
                                                    &nbsp;&nbsp;&nbsp;
                                                    <div>
                                                        <div class="my-wishlist-box-product-name">{{ $wishlist->product_name }}</div>
                                                        <div class="d-flex flex-row">
                                                            <div class="my-wishlist-box-original-amount">$ {{ $wishlist->product_price }}</div>
                                                            &nbsp;&nbsp;&nbsp;
                                                            @if($wishlist->product_discount)
                                                            <div class="my-wishlist-box-discount-amount">$ {{ $wishlist->product_discount }}</div>
                                                            @endif


                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        @endforeach
                                    @else
                                        <h5 class="text-primary mt-2">There are no product in wishlist.</h5>
                                    @endif


                                </div>

                            </div>

                            <div class="col-lg-6">
                                <div class="purchase-history">
                                    <div class="d-flex flex-row justify-content-between align-items-center">
                                        <div class="purchase-history-text">Product in Cart</div>
                                        <div class="purchase-history-see-all"><a href="{{route('user.Cart')}}">see
                                                all</a></div>
                                    </div>
                                    <hr>
                                    @if(count($cartValues)>0)
                                        @foreach($cartValues as $cartValue)
                                            <a href="{{ route('user.productDetails',$cartValue->product_id) }}" class="my-wishlist-box mb-3">
                                                <div class="d-flex flex-row align-items-center">
                                                    <div class="my-wishlist-box-img"><img
                                                            src="/uploads/product/{{$cartValue->product_photo}}" alt="">
                                                    </div>
                                                    &nbsp;&nbsp;&nbsp;
                                                    <div>
                                                        <div
                                                            class="my-wishlist-box-product-name">{{ $cartValue->product->product_name }}</div>
                                                        <div class="my-wishlist-box-product-price">
                                                            $ {{ $cartValue->product_price }}
                                                            @if($cartValue->product_discount)
                                                                <span class="cart-products-payment-discount">
                                                                $ {{ $cartValue->product_discount }}%
                                                            </span>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        @endforeach
                                    @else
                                        <h5 class="text-info">This Cart is Empty</h5>
                                    @endif


                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
