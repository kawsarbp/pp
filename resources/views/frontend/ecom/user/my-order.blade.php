@extends('frontend.ecom.inc.layouts')
@section('head')
    <title>User Profile</title>
@endsection

@section('content')

    <div id="product" >
        <div class="my-wishlist pt-5 pb-4">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-3">
                        @include('frontend.ecom.user.sidebar')
                    </div>
                    <div class="col-lg-9">
                        <div id="order-details" class="py-5">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="order-details-box">
                                            <div class="row mx-0 border px-1 py-2 align-items-center">
                                                <div class="col-md-4 mb-2 mb-xl-0">
                                                    <?php use App\Models\Order;$subtotal = 0; $total = 0; $totalDiscount = 0; ?>
                                                    @if(count($orderDetails) > 0)
                                                        @foreach($orderDetails as $orderDtls)
                                                            @php
                                                                $discount = $orderDtls->product_price * ($orderDtls->product_discount / 100);
                                                                $discountedPrice = $orderDtls->product_price - $discount;
                                                            @endphp
                                                            <?php
                                                            if ($orderDtls->product_discount > 0) {
                                                                $price = $discountedPrice;
                                                            } else {
                                                                $price = $orderDtls->product_price;
                                                            }
                                                            if ($orderDtls->product_discount > 0) {
                                                                $discount = $orderDtls->product_discount;
                                                            } else {
                                                                $discount = 0;
                                                            }
                                                            $total += $price * $orderDtls->product_qty;
                                                            $totalDiscount += $discount * $orderDtls->product_qty;
                                                            $subtotal += $orderDtls->product_price * $orderDtls->product_qty;

                                                            $sdate = date('d-m-y', strtotime($orderDtls->created_at));
                                                            // get the current date
                                                            $date = now();
                                                            // add 7 days to the date
                                                            $futureDate = $date->addDays(7);
                                                            $edate = date('d-m-y', strtotime($futureDate));

                                                            ?>
                                                        @endforeach
                                                    @else
                                                        <?php
                                                        return redirect()->route('user.home')->with(['type' => 'success', 'message' => 'Please Added product in cart!.']);;
                                                        ?>
                                                    @endif
                                                    <div class="">
                                                        <span class="order-id-text">Order ID:</span>
                                                        <span class="order-number">{{ auth()->id() }}</span>
                                                    </div>
                                                    <div class="">
                                                        <span class="order-id-text">Order date : </span>
                                                        <span class="order-number">{{ $sdate }}  {{$edate}}</span>
                                                    </div>
                                                </div>
                                                <div class="col-md-2 mb-2 mb-xl-0">
                                                    <div class="">
                                                        <span class="order-id-text">Status: </span>
                                                        <span class="order-number">{{ $orderDtls->delivery_status }}</span>
                                                    </div>
                                                </div>
                                                <div class="col-md-3 mb-2 mb-xl-0">
                                                    <div class="">
                                                        <span class="order-id-text">Order amount:  </span>
                                                        <span class="order-number">$ {{ $total }}</span>
                                                    </div>
                                                </div>
                                                <div class="col-md-3 mb-2 mb-xl-0">
                                                    <a href="{{ route('user.downloadInvoice',auth()->id()) }}" class="download-invoice-btn">+
                                                        Download Invoice</a>
                                                </div>

                                            </div>
                                            <br><br>

                                            <div class="row mx-0 border px-1 py-3 align-items-center mb-3" style="background:#FCFDFD;">

                                                <div class="col-md-4 mb-2 mb-xl-0">
                                                    <div class="">
                                                        <span class="order-id-text">Package Code: </span>
                                                        <span class="order-number"> {{ auth()->id() }}</span>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 mb-2 mb-xl-0 text-start text-lg-center">
                                                    <div class="">
                                                        <span class="order-id-text">Order amount:  </span>
                                                        <span class="order-number"> $ 37.05</span>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 mb-2 mb-xl-0 text-start text-lg-end">
                                                    <div class="">
                                                        <span class="order-id-text">TAX Amount: </span>
                                                        <span class="order-number"> $ 0.00</span>
                                                    </div>
                                                </div>

                                            </div>

                                            <div class="row mx-0 border px-1 py-3 align-items-center mb-3">
                                                <?php $subtotal = 0; $total = 0; $totalDiscount = 0; ?>
                                                @if(count($orderDetails) > 0)
                                                    @foreach($orderDetails as $orderDtls)
                                                        @php
                                                            $discount = $orderDtls->product_price * ($orderDtls->product_discount / 100);
                                                            $discountedPrice = $orderDtls->product_price - $discount;
                                                        @endphp
                                                        <?php
                                                        if ($orderDtls->product_discount > 0) {
                                                            $price = $discountedPrice;
                                                        } else {
                                                            $price = $orderDtls->product_price;
                                                        }
                                                        if ($orderDtls->product_discount > 0) {
                                                            $discount = $orderDtls->product_discount;
                                                        } else {
                                                            $discount = 0;
                                                        }
                                                        $total += $price * $orderDtls->product_qty;
                                                        $totalDiscount += $discount * $orderDtls->product_qty;
                                                        $subtotal += $orderDtls->product_price * $orderDtls->product_qty;

                                                        $sdate = date('d-m-y', strtotime($orderDtls->created_at));
                                                        // get the current date
                                                        $date = now();
                                                        // add 7 days to the date
                                                        $futureDate = $date->addDays(7);
                                                        $edate = date('d-m-y', strtotime($futureDate));
                                                        ?>
                                                        <div class="col-md-8 mb-2 mb-xl-0">
                                                            <div class="d-flex flex-row align-items-center">
                                                                <div class="order-details-img"><img
                                                                        src="/uploads/product/{{$orderDtls->product_photo}}" alt=""></div>
                                                                &nbsp;&nbsp;&nbsp;&nbsp;
                                                                <div class="order-details-product-name"><a
                                                                        href="{{ route('user.productDetails',$orderDtls->product_id) }}">{{ $orderDtls->product_name }}</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-2 mb-2 mb-xl-0">
                                                            <div class="order-details-qty">
                                                                qty: {{ $orderDtls->product_qty }}
                                                            </div>
                                                        </div>
                                                        <div class="col-md-2 mb-2 mb-xl-0 text-start text-lg-end">
                                                            <div class="order-details-qty">
                                                                $ {{ $orderDtls->product_price }}
                                                            </div>
                                                        </div>
                                                    @endforeach
                                                @else
                                                    <div class="d-flex flex-row align-items-center py-2">
                                                        <h3 class="text-center text-warning">No product Available</h3>
                                                    </div>
                                                @endif
                                            </div>

                                            <div class="text-end p-3"><a onclick="return confirm('Are you sure?')" href="{{ route('user.cancelOrder',auth()->id()) }}"
                                                                         class="order-cancel-btn">cancel order</a></div>
                                            <div class="row mx-0  px-1 py-3 justify-content-between">
                                                <div class="col-md-5 mb-3 ">
                                                    <div class="order-info-text-box">
                                                        <div class="order-info-text">Shipping Info</div>
                                                        <div class="d-flex flex-row justify-content-between my-2">
                                                            <div class="order-info-name"><span>Name</span> :</div>
                                                            <div class="order-info-addr"> {{ auth()->user()->name }}</div>
                                                        </div>
                                                        <div class="d-flex flex-row justify-content-between my-2">
                                                            <div class="order-info-name"><span>Email</span> :</div>
                                                            <div class="order-info-addr"> {{ auth()->user()->email }} </div>
                                                        </div>
                                                        <div class="d-flex flex-row justify-content-between my-2">
                                                            <div class="order-info-name"><span>Phone Number</span> :</div>
                                                            <div class="order-info-addr"> {{ auth()->user()->phone }}</div>
                                                        </div>
                                                        <div class="d-flex flex-row justify-content-between my-2">
                                                            <div class="order-info-name"><span>Address</span> :</div>
                                                            <div
                                                                class="order-info-addr"> {{ auth()->user()->address ? auth()->user()->address:'-' }}</div>
                                                        </div>
                                                        <div class="d-flex flex-row justify-content-between my-2">
                                                            <div class="order-info-name"><span>City</span> :</div>
                                                            <div
                                                                class="order-info-addr"> {{ auth()->user()->city ? auth()->user()->city:'-' }}</div>
                                                        </div>
                                                        <div class="d-flex flex-row justify-content-between my-2">
                                                            <div class="order-info-name"><span>State</span> :</div>
                                                            <div
                                                                class="order-info-addr"> {{ auth()->user()->state ? auth()->user()->state:'-' }}</div>
                                                        </div>
                                                        <div class="d-flex flex-row justify-content-between my-2">
                                                            <div class="order-info-name"><span>Country</span> :</div>
                                                            <div
                                                                class="order-info-addr"> {{ auth()->user()->country ? auth()->user()->country:'-' }}</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-5 mb-3 me-5 ">
                                                    <div class="order-info-text-box">
                                                        <div class="order-info-text">Billing Info</div>
                                                        <div class="d-flex flex-row justify-content-between my-2">
                                                            <div class="order-info-name"><span>Name</span> :</div>
                                                            <div class="order-info-addr"> {{ auth()->user()->name }}</div>
                                                        </div>
                                                        <div class="d-flex flex-row justify-content-between my-2">
                                                            <div class="order-info-name"><span>Email</span> :</div>
                                                            <div class="order-info-addr"> {{ auth()->user()->email }}</div>
                                                        </div>
                                                        <div class="d-flex flex-row justify-content-between my-2">
                                                            <div class="order-info-name"><span>Phone Number</span> :</div>
                                                            <div class="order-info-addr"> {{ auth()->user()->phone }}</div>
                                                        </div>
                                                        <div class="d-flex flex-row justify-content-between my-2">
                                                            <div class="order-info-name"><span>Address</span> :</div>
                                                            <div
                                                                class="order-info-addr"> {{ auth()->user()->address ? auth()->user()->address:'-' }}</div>
                                                        </div>
                                                        <div class="d-flex flex-row justify-content-between my-2">
                                                            <div class="order-info-name"><span>City</span> :</div>
                                                            <div
                                                                class="order-info-addr"> {{ auth()->user()->city ? auth()->user()->city:'-' }}</div>
                                                        </div>
                                                        <div class="d-flex flex-row justify-content-between my-2">
                                                            <div class="order-info-name"><span>State</span> :</div>
                                                            <div
                                                                class="order-info-addr"> {{ auth()->user()->state ? auth()->user()->state:'-' }}</div>
                                                        </div>
                                                        <div class="d-flex flex-row justify-content-between my-2">
                                                            <div class="order-info-name"><span>Country</span> :</div>
                                                            <div
                                                                class="order-info-addr"> {{ auth()->user()->country ? auth()->user()->country:'-' }}</div>
                                                        </div>
                                                    </div>
                                                    <br>
                                                    <div class="order-info-text-box">
                                                        <div class="order-info-text">Payment Info</div>
                                                        <div class="d-flex flex-row justify-content-between my-2">
                                                            <div class="order-info-name"><span>Subtotal</span> :</div>
                                                            <div class="order-info-addr"> $ {{ $subtotal }}</div>
                                                        </div>
                                                        <div class="d-flex flex-row justify-content-between my-2">
                                                            <div class="order-info-name"><span>Discount</span> :</div>
                                                            <div class="order-info-addr"> - $ {{ $totalDiscount }}</div>
                                                        </div>
                                                        <div class="d-flex flex-row justify-content-between my-2">
                                                            <div class="order-info-name"><span>TAX Amount</span> :</div>
                                                            <div class="order-info-addr"> $ {{ $subtotal }}</div>
                                                        </div>
                                                        <div class="d-flex flex-row justify-content-between my-2">
                                                            <div class="order-info-name"><span>Shipping Charge</span> :</div>
                                                            <div class="order-info-addr"> $ 00.00</div>
                                                        </div>
                                                        <div class="d-flex flex-row justify-content-between my-2">
                                                            <div class="order-info-name"><span>Grand total</span> :</div>
                                                            <div class="order-info-addr"> $ {{ $total }}</div>
                                                        </div>
                                                        <div class="d-flex flex-row justify-content-between my-2">
                                                            <div class="order-info-name"><span>Paid By</span> :</div>
                                                            <div class="order-info-addr"> Cash On Delivery</div>
                                                        </div>
                                                        <div class="d-flex flex-row justify-content-between my-2">
                                                            <div class="order-info-name"><span>TXN ID</span> :</div>
                                                            <div class="order-info-addr"> -</div>
                                                        </div>
                                                        <div class="d-flex flex-row justify-content-between my-2">
                                                            <div class="order-info-name"><span>Payment Status</span> :</div>
                                                            <div class="order-info-addr">{{ $orderDtls->delivery_status }}</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <br><br>
                                <div class="row">
                                    <div class="col-xl-4">
                                        <div class="order-protocol-box p-4 mb-4">
                                            <div class="order-pending-text mb-3">Pending</div>
                                            <div class="order-pending-des">
                                                Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece
                                                of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock,
                                                a Latin professor at Hampden-Sydney College.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="order-protocol-box p-4 mb-4">
                                            <div class="order-pending-text mb-3">Processing</div>
                                            <div class="order-pending-des">
                                                Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece
                                                of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock,
                                                a Latin professor at Hampden-Sydney College.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">

                                        <div class="order-protocol-box p-4 mb-4">
                                            <div class="order-pending-text mb-3">Recieved</div>
                                            <div class="order-pending-des">
                                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                                                been the industrys standard dummy text ever since the 1500s,
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">

                                        <div class="order-protocol-box p-4 mb-4">
                                            <div class="order-pending-text mb-3">Delivered</div>
                                            <div class="order-pending-des">
                                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                                                been the industrys standard dummy text ever since the 1500s,
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
