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
                        <div class="customer-details-area">
                            <div class="customer-details-box">
                                <div class="d-flex flex-row align-items-center">
                                    <div class="customer-order-img">
                                        <img src="{{asset('src/img/profile.png')}}" alt="">
                                    </div>
                                    &nbsp;&nbsp;&nbsp;
                                    <div class="customer-order-details">
                                        <div class="customer-details-name">Customer</div>
                                        <div class="customer-details-email">customer@gmail.com</div>
                                    </div>
                                </div>
                                <div class="order-details-edit-btn">
                                    <a href="">edit</a>
                                </div>
                            </div>
                            <div class="order-total-balance">
                                <div class="total-balance-text text-center"> Total Balance </div>
                                <div class="total-balance-amount text-center">$ 52,336.96</div>
                                <button type="submit" class="w-100">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-currency-dollar" viewBox="0 0 16 16">
                                        <path d="M4 10.781c.148 1.667 1.513 2.85 3.591 3.003V15h1.043v-1.216c2.27-.179 3.678-1.438 3.678-3.3 0-1.59-.947-2.51-2.956-3.028l-.722-.187V3.467c1.122.11 1.879.714 2.07 1.616h1.47c-.166-1.6-1.54-2.748-3.54-2.875V1H7.591v1.233c-1.939.23-3.27 1.472-3.27 3.156 0 1.454.966 2.483 2.661 2.917l.61.162v4.031c-1.149-.17-1.94-.8-2.131-1.718H4zm3.391-3.836c-1.043-.263-1.6-.825-1.6-1.616 0-.944.704-1.641 1.8-1.828v3.495l-.2-.05zm1.591 1.872c1.287.323 1.852.859 1.852 1.769 0 1.097-.826 1.828-2.2 1.939V8.73l.348.086z"/>
                                    </svg>
                                    Recharge Wallet
                                </button>
                            </div>
                            <div class="last-transaction-area">
                                <div class="d-flex flex-row justify-content-between align-items-center">
                                    <div class="last-transaction-text">Last transaction</div>
                                    <div class="last-transaction-view-all"><a href="">View All</a></div>
                                </div>

                                <div class="d-flex flex-row py-2 justify-content-between">
                                    <div class="transaction-date">11th Feb, 2023</div>
                                    <div class="transaction-recharge-text">Recharge</div>
                                    <div class="transaction-recharge-amount">$ 250.00</div>
                                </div>
                                <div class="d-flex flex-row py-2 justify-content-between">
                                    <div class="transaction-date">11th Feb, 2023</div>
                                    <div class="transaction-recharge-text">Recharge</div>
                                    <div class="transaction-recharge-amount">$ 250.00</div>
                                </div>
                                <div class="d-flex flex-row py-2 justify-content-between">
                                    <div class="transaction-date">11th Feb, 2023</div>
                                    <div class="transaction-recharge-text">Recharge</div>
                                    <div class="transaction-recharge-amount">$ 250.00</div>
                                </div>


                            </div>

                        </div>
                        <div class="dashboard-history-area my-4 ">
                            <a href="" class="dashboard-control-box">
                                <div class="d-flex flex-row align-items-center">
                                    <div class="dashboard-control-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-speedometer2" viewBox="0 0 16 16">
                                            <path d="M8 4a.5.5 0 0 1 .5.5V6a.5.5 0 0 1-1 0V4.5A.5.5 0 0 1 8 4zM3.732 5.732a.5.5 0 0 1 .707 0l.915.914a.5.5 0 1 1-.708.708l-.914-.915a.5.5 0 0 1 0-.707zM2 10a.5.5 0 0 1 .5-.5h1.586a.5.5 0 0 1 0 1H2.5A.5.5 0 0 1 2 10zm9.5 0a.5.5 0 0 1 .5-.5h1.5a.5.5 0 0 1 0 1H12a.5.5 0 0 1-.5-.5zm.754-4.246a.389.389 0 0 0-.527-.02L7.547 9.31a.91.91 0 1 0 1.302 1.258l3.434-4.297a.389.389 0 0 0-.029-.518z"/>
                                            <path fill-rule="evenodd" d="M0 10a8 8 0 1 1 15.547 2.661c-.442 1.253-1.845 1.602-2.932 1.25C11.309 13.488 9.475 13 8 13c-1.474 0-3.31.488-4.615.911-1.087.352-2.49.003-2.932-1.25A7.988 7.988 0 0 1 0 10zm8-7a7 7 0 0 0-6.603 9.329c.203.575.923.876 1.68.63C4.397 12.533 6.358 12 8 12s3.604.532 4.923.96c.757.245 1.477-.056 1.68-.631A7 7 0 0 0 8 3z"/>
                                        </svg>
                                    </div>
                                    &nbsp;&nbsp;&nbsp;
                                    <div class="dashboard-control-text">Dashboard</div>
                                </div>
                            </a>
                            <a href="" class="dashboard-control-box">
                                <div class="d-flex flex-row align-items-center">
                                    <div class="dashboard-control-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clock-history" viewBox="0 0 16 16">
                                            <path d="M8.515 1.019A7 7 0 0 0 8 1V0a8 8 0 0 1 .589.022l-.074.997zm2.004.45a7.003 7.003 0 0 0-.985-.299l.219-.976c.383.086.76.2 1.126.342l-.36.933zm1.37.71a7.01 7.01 0 0 0-.439-.27l.493-.87a8.025 8.025 0 0 1 .979.654l-.615.789a6.996 6.996 0 0 0-.418-.302zm1.834 1.79a6.99 6.99 0 0 0-.653-.796l.724-.69c.27.285.52.59.747.91l-.818.576zm.744 1.352a7.08 7.08 0 0 0-.214-.468l.893-.45a7.976 7.976 0 0 1 .45 1.088l-.95.313a7.023 7.023 0 0 0-.179-.483zm.53 2.507a6.991 6.991 0 0 0-.1-1.025l.985-.17c.067.386.106.778.116 1.17l-1 .025zm-.131 1.538c.033-.17.06-.339.081-.51l.993.123a7.957 7.957 0 0 1-.23 1.155l-.964-.267c.046-.165.086-.332.12-.501zm-.952 2.379c.184-.29.346-.594.486-.908l.914.405c-.16.36-.345.706-.555 1.038l-.845-.535zm-.964 1.205c.122-.122.239-.248.35-.378l.758.653a8.073 8.073 0 0 1-.401.432l-.707-.707z"/>
                                            <path d="M8 1a7 7 0 1 0 4.95 11.95l.707.707A8.001 8.001 0 1 1 8 0v1z"/>
                                            <path d="M7.5 3a.5.5 0 0 1 .5.5v5.21l3.248 1.856a.5.5 0 0 1-.496.868l-3.5-2A.5.5 0 0 1 7 9V3.5a.5.5 0 0 1 .5-.5z"/>
                                        </svg>
                                    </div>
                                    &nbsp;&nbsp;&nbsp;
                                    <div class="dashboard-control-text">Purchase History</div>
                                </div>
                            </a>
                            <a href="" class="dashboard-control-box">
                                <div class="d-flex flex-row align-items-center">
                                    <div class="dashboard-control-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-suit-heart-fill" viewBox="0 0 16 16">
                                            <path d="M4 1c2.21 0 4 1.755 4 3.92C8 2.755 9.79 1 12 1s4 1.755 4 3.92c0 3.263-3.234 4.414-7.608 9.608a.513.513 0 0 1-.784 0C3.234 9.334 0 8.183 0 4.92 0 2.755 1.79 1 4 1z"/>
                                        </svg>
                                    </div>
                                    &nbsp;&nbsp;&nbsp;
                                    <div class="dashboard-control-text">My Wishlist</div>
                                </div>
                            </a>
                            <a href="" class="dashboard-control-box">
                                <div class="d-flex flex-row align-items-center">
                                    <div class="dashboard-control-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-border-style" viewBox="0 0 16 16">
                                            <path d="M1 3.5a.5.5 0 0 1 .5-.5h13a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-1zm0 4a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-5a.5.5 0 0 1-.5-.5v-1zm0 4a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm8 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm-4 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm8 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm-4-4a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-5a.5.5 0 0 1-.5-.5v-1z"/>
                                        </svg>
                                    </div>
                                    &nbsp;&nbsp;&nbsp;
                                    <div class="dashboard-control-text">My Order</div>
                                </div>
                            </a>
                            <a href="" class="dashboard-control-box">
                                <div class="d-flex flex-row align-items-center">
                                    <div class="dashboard-control-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-gift" viewBox="0 0 16 16">
                                            <path d="M3 2.5a2.5 2.5 0 0 1 5 0 2.5 2.5 0 0 1 5 0v.006c0 .07 0 .27-.038.494H15a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1v7.5a1.5 1.5 0 0 1-1.5 1.5h-11A1.5 1.5 0 0 1 1 14.5V7a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h2.038A2.968 2.968 0 0 1 3 2.506V2.5zm1.068.5H7v-.5a1.5 1.5 0 1 0-3 0c0 .085.002.274.045.43a.522.522 0 0 0 .023.07zM9 3h2.932a.56.56 0 0 0 .023-.07c.043-.156.045-.345.045-.43a1.5 1.5 0 0 0-3 0V3zM1 4v2h6V4H1zm8 0v2h6V4H9zm5 3H9v8h4.5a.5.5 0 0 0 .5-.5V7zm-7 8V7H2v7.5a.5.5 0 0 0 .5.5H7z"/>
                                        </svg>
                                    </div>
                                    &nbsp;&nbsp;&nbsp;
                                    <div class="dashboard-control-text">Giftcard</div>
                                </div>
                            </a>
                            <a href="" class="dashboard-control-box">
                                <div class="d-flex flex-row align-items-center">
                                    <div class="dashboard-control-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-wallet2" viewBox="0 0 16 16">
                                            <path d="M12.136.326A1.5 1.5 0 0 1 14 1.78V3h.5A1.5 1.5 0 0 1 16 4.5v9a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 13.5v-9a1.5 1.5 0 0 1 1.432-1.499L12.136.326zM5.562 3H13V1.78a.5.5 0 0 0-.621-.484L5.562 3zM1.5 4a.5.5 0 0 0-.5.5v9a.5.5 0 0 0 .5.5h13a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-13z"/>
                                        </svg>
                                    </div>
                                    &nbsp;&nbsp;&nbsp;
                                    <div class="dashboard-control-text">My Wallet</div>
                                </div>
                            </a>
                            <a href="" class="dashboard-control-box">
                                <div class="d-flex flex-row align-items-center">
                                    <div class="dashboard-control-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-counterclockwise" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd" d="M8 3a5 5 0 1 1-4.546 2.914.5.5 0 0 0-.908-.417A6 6 0 1 0 8 2v1z"/>
                                            <path d="M8 4.466V.534a.25.25 0 0 0-.41-.192L5.23 2.308a.25.25 0 0 0 0 .384l2.36 1.966A.25.25 0 0 0 8 4.466z"/>
                                        </svg>
                                    </div>
                                    &nbsp;&nbsp;&nbsp;
                                    <div class="dashboard-control-text">My Coupons</div>
                                </div>
                            </a>
                            <a href="" class="dashboard-control-box">
                                <div class="d-flex flex-row align-items-center">
                                    <div class="dashboard-control-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-wallet" viewBox="0 0 16 16">
                                            <path d="M0 3a2 2 0 0 1 2-2h13.5a.5.5 0 0 1 0 1H15v2a1 1 0 0 1 1 1v8.5a1.5 1.5 0 0 1-1.5 1.5h-12A2.5 2.5 0 0 1 0 12.5V3zm1 1.732V12.5A1.5 1.5 0 0 0 2.5 14h12a.5.5 0 0 0 .5-.5V5H2a1.99 1.99 0 0 1-1-.268zM1 3a1 1 0 0 0 1 1h12V2H2a1 1 0 0 0-1 1z"/>
                                        </svg>
                                    </div>
                                    &nbsp;&nbsp;&nbsp;
                                    <div class="dashboard-control-text">Refund & Dispute</div>
                                </div>
                            </a>
                            <a href="" class="dashboard-control-box">
                                <div class="d-flex flex-row align-items-center">
                                    <div class="dashboard-control-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-bounding-box" viewBox="0 0 16 16">
                                            <path d="M1.5 1a.5.5 0 0 0-.5.5v3a.5.5 0 0 1-1 0v-3A1.5 1.5 0 0 1 1.5 0h3a.5.5 0 0 1 0 1h-3zM11 .5a.5.5 0 0 1 .5-.5h3A1.5 1.5 0 0 1 16 1.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 1-.5-.5zM.5 11a.5.5 0 0 1 .5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 1 0 1h-3A1.5 1.5 0 0 1 0 14.5v-3a.5.5 0 0 1 .5-.5zm15 0a.5.5 0 0 1 .5.5v3a1.5 1.5 0 0 1-1.5 1.5h-3a.5.5 0 0 1 0-1h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 1 .5-.5z"/>
                                            <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm8-9a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                                        </svg>
                                    </div>
                                    &nbsp;&nbsp;&nbsp;
                                    <div class="dashboard-control-text">My Account</div>
                                </div>
                            </a>
                            <a href="" class="dashboard-control-box">
                                <div class="d-flex flex-row align-items-center">
                                    <div class="dashboard-control-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-terminal" viewBox="0 0 16 16">
                                            <path d="M6 9a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 0 1h-3A.5.5 0 0 1 6 9zM3.854 4.146a.5.5 0 1 0-.708.708L4.793 6.5 3.146 8.146a.5.5 0 1 0 .708.708l2-2a.5.5 0 0 0 0-.708l-2-2z"/>
                                            <path d="M2 1a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2H2zm12 1a1 1 0 0 1 1 1v10a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V3a1 1 0 0 1 1-1h12z"/>
                                        </svg>
                                    </div>
                                    &nbsp;&nbsp;&nbsp;
                                    <div class="dashboard-control-text">Digital Products</div>
                                </div>
                            </a>
                            <a href="" class="dashboard-control-box">
                                <div class="d-flex flex-row align-items-center">
                                    <div class="dashboard-control-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-people-fill" viewBox="0 0 16 16">
                                            <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7Zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm-5.784 6A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216ZM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5Z"/>
                                        </svg>
                                    </div>
                                    &nbsp;&nbsp;&nbsp;
                                    <div class="dashboard-control-text">Referral</div>
                                </div>
                            </a>
                            <a href="" class="dashboard-control-box">
                                <div class="d-flex flex-row align-items-center">
                                    <div class="dashboard-control-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-ticket" viewBox="0 0 16 16">
                                            <path d="M0 4.5A1.5 1.5 0 0 1 1.5 3h13A1.5 1.5 0 0 1 16 4.5V6a.5.5 0 0 1-.5.5 1.5 1.5 0 0 0 0 3 .5.5 0 0 1 .5.5v1.5a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 11.5V10a.5.5 0 0 1 .5-.5 1.5 1.5 0 1 0 0-3A.5.5 0 0 1 0 6V4.5ZM1.5 4a.5.5 0 0 0-.5.5v1.05a2.5 2.5 0 0 1 0 4.9v1.05a.5.5 0 0 0 .5.5h13a.5.5 0 0 0 .5-.5v-1.05a2.5 2.5 0 0 1 0-4.9V4.5a.5.5 0 0 0-.5-.5h-13Z"/>
                                        </svg>
                                    </div>
                                    &nbsp;&nbsp;&nbsp;
                                    <div class="dashboard-control-text">Support Ticket</div>
                                </div>
                            </a>
                            <hr>
                            <a href="" class="dashboard-control-box">
                                <div class="d-flex flex-row align-items-center">
                                    <div class="dashboard-control-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bell" viewBox="0 0 16 16">
                                            <path d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2zM8 1.918l-.797.161A4.002 4.002 0 0 0 4 6c0 .628-.134 2.197-.459 3.742-.16.767-.376 1.566-.663 2.258h10.244c-.287-.692-.502-1.49-.663-2.258C12.134 8.197 12 6.628 12 6a4.002 4.002 0 0 0-3.203-3.92L8 1.917zM14.22 12c.223.447.481.801.78 1H1c.299-.199.557-.553.78-1C2.68 10.2 3 6.88 3 6c0-2.42 1.72-4.44 4.005-4.901a1 1 0 1 1 1.99 0A5.002 5.002 0 0 1 13 6c0 .88.32 4.2 1.22 6z"/>
                                        </svg>
                                    </div>
                                    &nbsp;&nbsp;&nbsp;
                                    <div class="dashboard-control-text">Notification</div>
                                </div>
                            </a>
                            <a href="" class="dashboard-control-box">
                                <div class="d-flex flex-row align-items-center">
                                    <div class="dashboard-control-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-left" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd" d="M6 12.5a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v2a.5.5 0 0 1-1 0v-2A1.5 1.5 0 0 1 6.5 2h8A1.5 1.5 0 0 1 16 3.5v9a1.5 1.5 0 0 1-1.5 1.5h-8A1.5 1.5 0 0 1 5 12.5v-2a.5.5 0 0 1 1 0v2z"/>
                                            <path fill-rule="evenodd" d="M.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L1.707 7.5H10.5a.5.5 0 0 1 0 1H1.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3z"/>
                                        </svg>
                                    </div>
                                    &nbsp;&nbsp;&nbsp;
                                    <div class="dashboard-control-text">Logout</div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="order-box">
                                    <div class="order-box-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bag-check" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd" d="M10.854 8.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708L7.5 10.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>
                                            <path d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V5z"/>
                                        </svg>
                                    </div>
                                    <div class="order-box-text">total order</div>
                                    <div class="order-box-amount">414</div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="order-box">
                                    <div class="order-box-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bag-check" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd" d="M10.854 8.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708L7.5 10.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>
                                            <path d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V5z"/>
                                        </svg>
                                    </div>
                                    <div class="order-box-text">total order</div>
                                    <div class="order-box-amount">414</div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="order-box">
                                    <div class="order-box-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bag-check" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd" d="M10.854 8.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708L7.5 10.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>
                                            <path d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V5z"/>
                                        </svg>
                                    </div>
                                    <div class="order-box-text">total order</div>
                                    <div class="order-box-amount">414</div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="order-box">
                                    <div class="order-box-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bag-check" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd" d="M10.854 8.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708L7.5 10.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>
                                            <path d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V5z"/>
                                        </svg>
                                    </div>
                                    <div class="order-box-text">total order</div>
                                    <div class="order-box-amount">414</div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="order-box">
                                    <div class="order-box-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bag-check" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd" d="M10.854 8.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708L7.5 10.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>
                                            <path d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V5z"/>
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
                                        <div class="purchase-history-see-all"><a href="">see all</a></div>
                                    </div>
                                    <div class="d-flex flex-row justify-content-between purchase-history-text-box px-4 py-3 my-3">
                                        <div class="purchase-history-text-word">Details</div>
                                        <div class="purchase-history-text-word">Amount</div>
                                        <div class="purchase-history-text-word">Status</div>
                                    </div>
                                    <div class="d-flex flex-row purchase-history-box justify-content-between align-items-center">
                                        <div class="">
                                            <div class="purchase-history-number">Order: 69230211013643</div>
                                            <div class="purchase-history-date">11th Feb, 2023</div>
                                        </div>
                                        <div class="purchase-history-amount">$ 75.00</div>
                                        <div class="purchase-history-processing">Processing</div>
                                    </div>
                                    <hr>

                                    <div class="d-flex flex-row purchase-history-box justify-content-between align-items-center">
                                        <div class="">
                                            <div class="purchase-history-number">Order: 69230211013643</div>
                                            <div class="purchase-history-date">11th Feb, 2023</div>
                                        </div>
                                        <div class="purchase-history-amount">$ 75.00</div>
                                        <div class="purchase-history-delivered">Delivered</div>
                                    </div>
                                    <hr>

                                    <div class="d-flex flex-row purchase-history-box justify-content-between align-items-center">
                                        <div class="">
                                            <div class="purchase-history-number">Order: 69230211013643</div>
                                            <div class="purchase-history-date">11th Feb, 2023</div>
                                        </div>
                                        <div class="purchase-history-amount">$ 75.00</div>
                                        <div class="purchase-history-delivered">Delivered</div>
                                    </div>
                                    <hr>

                                    <div class="d-flex flex-row purchase-history-box justify-content-between align-items-center">
                                        <div class="">
                                            <div class="purchase-history-number">Order: 69230211013643</div>
                                            <div class="purchase-history-date">11th Feb, 2023</div>
                                        </div>
                                        <div class="purchase-history-amount">$ 75.00</div>
                                        <div class="purchase-history-delivered">Delivered</div>
                                    </div>
                                    <hr>

                                    <div class="d-flex flex-row purchase-history-box justify-content-between align-items-center">
                                        <div class="">
                                            <div class="purchase-history-number">Order: 69230211013643</div>
                                            <div class="purchase-history-date">11th Feb, 2023</div>
                                        </div>
                                        <div class="purchase-history-amount">$ 75.00</div>
                                        <div class="purchase-history-delivered">Delivered</div>
                                    </div>
                                    <hr>


                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="purchase-history">
                                    <div class="d-flex flex-row justify-content-between align-items-center">
                                        <div class="purchase-history-text">My Wishlist</div>
                                        <div class="purchase-history-see-all"><a href="">see all</a></div>
                                    </div>
                                    <hr>
                                    <a href="" class="my-wishlist-box mb-3">
                                        <div class="d-flex flex-row align-items-center">
                                            <div class="my-wishlist-box-img"><img src="{{asset('src/img/product/6.png')}}" alt=""></div>
                                            &nbsp;&nbsp;&nbsp;
                                            <div>
                                                <div class="my-wishlist-box-product-name"> Exclsive Bag 2  </div>
                                                <div class="my-wishlist-box-product-price">$ 22.00 </div>
                                            </div>
                                        </div>
                                    </a>

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

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
