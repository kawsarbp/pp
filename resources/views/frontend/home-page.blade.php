@extends('frontend.inc.layouts')
@section('title','Home Page')

@section('home-section')
    <div id="home-section">
        <div class="container" >
            <div class="row align-items-center">
                <div class="col-lg-9 col-xl-9">
                    <div class="banner_text">
                        <h1>InfixMart - Multi Vendor <br> Ecommerce</h1>
                        <p style="max-width: 65%">Manage your eCommerce self managed or multi vendor with huge features like amazon, daraz, rich vendor or merchant feature, central product management system with lots of cool features included.</p>

                        <div class="d-sm-flex align-items-end flex-row">
                            <div>
                                <a id="" class="btn_1" href="javascript:void (0)" target="&quot;_blank&quot;"> Multi vendor</a>
                            </div>
                            <div>
                                <a class="btn_2" href="javascript:void (0)" target="&quot;_blank&quot;"> <i class="fa-sharp fa-solid fa-cube"></i>  &nbsp;  Shop Demo</a>
                            </div>
                            <div>
                                <a id="" class="btn_1" href="javascript:void (0)" target="&quot;_blank&quot;"> Admin Login</a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('features-section')
    <div id="features-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="our-features text-center">
                        <h5>our features</h5>
                        <h2>Some Features that make <br> us proud</h2>
                        <p>We did the best research for the E-commerce application mostly <br> commonly used in the fast world.</p>
                    </div>
                </div>
            </div>
        </div>




        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="single_feature">
                        <span class="single_feature_icon">
                            <i class="fa-sharp fa-solid fa-cube"></i>
                        </span>
                        <h4>Faster Loading</h4>
                        <p>Best loading with minimum time, best configure more faster</p>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="single_feature">
                        <span class="single_feature_icon">
                            <i class="fa-sharp fa-solid fa-cube"></i>
                        </span>
                        <h4>Social Signup</h4>
                        <p>User can signup with social media easy to connect.</p>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="single_feature">
                        <span class="single_feature_icon">
                            <i class="fa-sharp fa-solid fa-cube"></i>
                        </span>
                        <h4>Flutter App</h4>
                        <p>Always updated framework will get good security.</p>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="single_feature">
                        <span class="single_feature_icon">
                            <i class="fa-sharp fa-solid fa-cube"></i>
                        </span>
                        <h4>14 Payment Gateway</h4>
                        <p>We have included 14 Payment Popular Gateway</p>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
