@extends('frontend.ecom.inc.layouts')
@section('head')
    <title>Payment Method</title>
@endsection

@section('content')
    <div id="order-details" class="py-5">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-8">
                    <div class="order-details-box">
                        <div class="row mx-0 border px-1 py-2 align-items-center">
                            <div class="col-md-4 mb-2 mb-xl-0">
                                <div class="">
                                    <span class="order-id-text">Order ID:</span>
                                    <span class="order-number">25230214013232</span>
                                </div>
                                <div class="">
                                    <span class="order-id-text">Order date : </span>
                                    <span class="order-number">2023-02-14 13:32:32</span>
                                </div>
                            </div>
                            <div class="col-md-2 mb-2 mb-xl-0">
                                <div class="">
                                    <span class="order-id-text">Status: </span>
                                    <span class="order-number">Confirmed</span>
                                </div>
                            </div>
                            <div class="col-md-3 mb-2 mb-xl-0">
                                <div class="">
                                    <span class="order-id-text">Order amount:  </span>
                                    <span class="order-number">$ 52.05</span>
                                </div>
                            </div>
                            <div class="col-md-3 mb-2 mb-xl-0">
                                <a href="" class="download-invoice-btn">+ Download Invoice</a>
                            </div>

                        </div>
                        <br><br>

                        <div class="row mx-0 border px-1 py-3 align-items-center mb-3" style="background:#FCFDFD;">

                            <div class="col-md-4 mb-2 mb-xl-0">
                                <div class="" >
                                    <span class="order-id-text">Package Code: </span>
                                    <span class="order-number"> 23021401323218</span>
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

                            <div class="col-md-8 mb-2 mb-xl-0">
                                <div class="d-flex flex-row align-items-center">
                                    <div class="order-details-img"><img src="{{asset('src/img/product/4.png')}}" alt=""></div>
                                    &nbsp;&nbsp;&nbsp;&nbsp;
                                    <div class="order-details-product-name"><a href="">New design women bag 2021</a></div>
                                </div>
                            </div>
                            <div class="col-md-2 mb-2 mb-xl-0">
                                <div class="order-details-qty">
                                    qty: 1
                                </div>
                            </div>
                            <div class="col-md-2 mb-2 mb-xl-0 text-start text-lg-end">
                                <div class="order-details-qty">
                                    $ 37.05
                                </div>
                            </div>

                        </div>
                        <div class="text-end p-3"><a href="" class="order-cancel-btn">cancel order</a></div>
                        <div class="row mx-0  px-1 py-3 justify-content-between">
                            <div class="col-md-5 mb-3 ">
                                <div class="order-info-text-box">
                                    <div class="order-info-text">Shipping Info </div>
                                    <div class="d-flex flex-row justify-content-between my-2">
                                        <div class="order-info-name"><span>Name</span> :</div>
                                        <div class="order-info-addr">  Customer</div>
                                    </div>
                                    <div class="d-flex flex-row justify-content-between my-2">
                                        <div class="order-info-name"><span>Email</span> :</div>
                                        <div class="order-info-addr">  customer@gmail.com</div>
                                    </div>
                                    <div class="d-flex flex-row justify-content-between my-2">
                                        <div class="order-info-name"><span>Phone Number</span>  :</div>
                                        <div class="order-info-addr">  089654787547</div>
                                    </div>
                                    <div class="d-flex flex-row justify-content-between my-2">
                                        <div class="order-info-name"><span>Address</span> :</div>
                                        <div class="order-info-addr">  jl.proklasmi</div>
                                    </div>
                                    <div class="d-flex flex-row justify-content-between my-2">
                                        <div class="order-info-name"><span>City</span> :</div>
                                        <div class="order-info-addr">  Dhaka</div>
                                    </div>
                                    <div class="d-flex flex-row justify-content-between my-2">
                                        <div class="order-info-name"><span>State</span> :</div>
                                        <div class="order-info-addr">  Dhaka</div>
                                    </div>
                                    <div class="d-flex flex-row justify-content-between my-2">
                                        <div class="order-info-name"><span>Country</span> :</div>
                                        <div class="order-info-addr">  Bangladesh</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-5 mb-3 me-5 ">
                                <div class="order-info-text-box">
                                    <div class="order-info-text">Billing Info</div>
                                    <div class="d-flex flex-row justify-content-between my-2">
                                        <div class="order-info-name"><span>Name</span> :</div>
                                        <div class="order-info-addr">  Customer</div>
                                    </div>
                                    <div class="d-flex flex-row justify-content-between my-2">
                                        <div class="order-info-name"><span>Email</span> :</div>
                                        <div class="order-info-addr">  customer@gmail.com</div>
                                    </div>
                                    <div class="d-flex flex-row justify-content-between my-2">
                                        <div class="order-info-name"><span>Phone Number</span>  :</div>
                                        <div class="order-info-addr">  089654787547</div>
                                    </div>
                                    <div class="d-flex flex-row justify-content-between my-2">
                                        <div class="order-info-name"><span>Address</span> :</div>
                                        <div class="order-info-addr">  jl.proklasmi</div>
                                    </div>
                                    <div class="d-flex flex-row justify-content-between my-2">
                                        <div class="order-info-name"><span>City</span> :</div>
                                        <div class="order-info-addr">  Dhaka</div>
                                    </div>
                                    <div class="d-flex flex-row justify-content-between my-2">
                                        <div class="order-info-name"><span>State</span> :</div>
                                        <div class="order-info-addr">  Dhaka</div>
                                    </div>
                                    <div class="d-flex flex-row justify-content-between my-2">
                                        <div class="order-info-name"><span>Country</span> :</div>
                                        <div class="order-info-addr">  Bangladesh</div>
                                    </div>
                                </div>
                                <br>
                                <div class="order-info-text-box">
                                    <div class="order-info-text">Payment Info</div>
                                    <div class="d-flex flex-row justify-content-between my-2">
                                        <div class="order-info-name"><span>Subtotal</span> :</div>
                                        <div class="order-info-addr">  $ 39.00</div>
                                    </div>
                                    <div class="d-flex flex-row justify-content-between my-2">
                                        <div class="order-info-name"><span>Discount</span> :</div>
                                        <div class="order-info-addr">  - $ 1.95</div>
                                    </div>
                                    <div class="d-flex flex-row justify-content-between my-2">
                                        <div class="order-info-name"><span>TAX Amount</span>  :</div>
                                        <div class="order-info-addr">  $ 0.00</div>
                                    </div>
                                    <div class="d-flex flex-row justify-content-between my-2">
                                        <div class="order-info-name"><span>Shipping Charge</span> :</div>
                                        <div class="order-info-addr">  $ 15.00</div>
                                    </div>
                                    <div class="d-flex flex-row justify-content-between my-2">
                                        <div class="order-info-name"><span>Grand total</span> :</div>
                                        <div class="order-info-addr">  $ 52.05</div>
                                    </div>
                                    <div class="d-flex flex-row justify-content-between my-2">
                                        <div class="order-info-name"><span>Paid By</span> :</div>
                                        <div class="order-info-addr">  Cash On Delivery</div>
                                    </div>
                                    <div class="d-flex flex-row justify-content-between my-2">
                                        <div class="order-info-name"><span>TXN ID</span> :</div>
                                        <div class="order-info-addr">  - </div>
                                    </div>
                                    <div class="d-flex flex-row justify-content-between my-2">
                                        <div class="order-info-name"><span>Payment Status</span> :</div>
                                        <div class="order-info-addr">Pending</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="order-protocol-box p-4 mb-4">
                        <div class="order-pending-text mb-3">Pending</div>
                        <div class="order-pending-des">
                            Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College.
                        </div>
                    </div>
                    <div class="order-protocol-box p-4 mb-4">
                        <div class="order-pending-text mb-3">Processing</div>
                        <div class="order-pending-des">
                            Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College.
                        </div>
                    </div>
                    <div class="order-protocol-box p-4 mb-4">
                        <div class="order-pending-text mb-3">Recieved</div>
                        <div class="order-pending-des">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s,
                        </div>
                    </div>
                    <div class="order-protocol-box p-4 mb-4">
                        <div class="order-pending-text mb-3">Delivered</div>
                        <div class="order-pending-des">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s,
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection



