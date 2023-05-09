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
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                             fill="currentColor" class="bi bi-bag-check" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd"
                                                  d="M10.854 8.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708L7.5 10.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>
                                            <path
                                                d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V5z"/>
                                        </svg>
                                    </div>
                                    <div class="order-box-text">total order</div>
                                    <div class="order-box-amount">414</div>
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
                                    <div class="order-box-text">total order</div>
                                    <div class="order-box-amount">414</div>
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
                                    <div class="order-box-text">total order</div>
                                    <div class="order-box-amount">414</div>
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
                                    <div class="order-box-text">total order</div>
                                    <div class="order-box-amount">414</div>
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
                                    <div class="order-box-text">total order</div>
                                    <div class="order-box-amount">414</div>
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
                                    @foreach($orders as $order)
                                    <div
                                        class="d-flex flex-row purchase-history-box justify-content-between align-items-center">
                                        <div class="">
                                            <div class="purchase-history-number">Order ID: {{ auth()->id() }}</div>
                                            <div class="purchase-history-date">{{ date('d-M-Y',strtotime($order->created_at)) }}</div>
                                        </div>
                                        <div class="purchase-history-amount">$ {{$order->product_price}}</div>
                                        @if($order->delivery_status == 'processing')
                                        <div class="purchase-history-processing">Processing</div>
                                        @elseif($order->delivery_status == 'delivered')
                                            <div class="purchase-history-delivered">Delivered</div>
                                        @endif
                                    </div>
                                    <hr>
                                    @endforeach


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
                                        <div class="purchase-history-see-all"><a href="">see all</a></div>
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
                                        <div class="purchase-history-see-all"><a href="{{route('user.addToCart')}}">see
                                                all</a></div>
                                    </div>
                                    <hr>
                                    @if(empty($cartValues))
                                        <h2 class="text-warning">This Cart is Empty</h2>
                                    @else
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
