@extends('frontend.inc.layouts')
@section('title','Home Page')

@section('home-section')
    <div id="home-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-9 col-xl-9">
                    <div class="banner_text">
                        <h1>InfixMart - Multi Vendor <br> Ecommerce</h1>
                        <p style="max-width: 65%">Manage your eCommerce self managed or multi vendor with huge features
                            like amazon, daraz, rich vendor or merchant feature, central product management system with
                            lots of cool features included.</p>

                        <div class="d-sm-flex align-items-end flex-row">
                            <div>
                                <a id="" class="btn_1" href="javascript:void (0)" target="&quot;_blank&quot;"> Multi
                                    vendor</a>
                            </div>
                            <div>
                                <a class="btn_2" href="javascript:void (0)" target="&quot;_blank&quot;"> <i
                                        class="fa-sharp fa-solid fa-cube"></i> &nbsp; Shop Demo</a>
                            </div>
                            <div>
                                <a id="" class="btn_1" href="javascript:void (0)" target="&quot;_blank&quot;"> Admin
                                    Login</a>
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
                        <p>We did the best research for the E-commerce application mostly <br> commonly used in the fast
                            world.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="single_feature">
                        <span class="single_feature_icon">
                            <i class="fa-sharp fa-solid fa-cube"></i>
                        </span>
                        <h4>Faster Loading</h4>
                        <p>Best loading with minimum time, best configure more faster</p>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="single_feature">
                        <span class="single_feature_icon">
                            <i class="fa-sharp fa-solid fa-cube"></i>
                        </span>
                        <h4>Social Signup</h4>
                        <p>User can signup with social media easy to connect.</p>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="single_feature">
                        <span class="single_feature_icon">
                            <i class="fa-sharp fa-solid fa-cube"></i>
                        </span>
                        <h4>Flutter App</h4>
                        <p>Always updated framework will get good security.</p>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
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

    {{--feature_part--}}
    <div id="feature_part_video">
        <div class="container">
            <div class="row">
                <div class=" col-sm-12 col-md-7">
                    <div class="video_section">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/nt707MLtGAY"
                                title="YouTube video player" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                allowfullscreen></iframe>
                    </div>
                </div>
                <div class=" col-sm-12 col-md-5">
                    <div class="video_section_text">
                        <h2>Take A look our Amazcart Overview in Video</h2>
                        <img
                            src="https://infixmart.com/wp-content/plugins/infixhub-companion/inc/elementor-widgets/assets/img/Line.png"
                            alt="line image">
                        <p>What’s query you have in mind? How it works? Have look a Look in our videos you’ll crystal
                            clear about it.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('package-section')
    <div id="package-section">

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-md-8">
                    <div class="section_tittle text-center">
                        <h5>Complete Package</h5>
                        <h2>Every Single Module You Want that are available</h2>
                        <p>We did the best research for the E-commerce application mostly commonly used in the fast
                            world.</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="dashboard_img">
                        <img src="https://infixmart.com/wp-content/uploads/2021/11/amarcart-dashboard.png"
                             class="attachment- size-" alt="screenshot image" loading="lazy"
                             srcset="https://infixmart.com/wp-content/uploads/2021/11/amarcart-dashboard.png 1179w, https://infixmart.com/wp-content/uploads/2021/11/amarcart-dashboard-300x177.png 300w, https://infixmart.com/wp-content/uploads/2021/11/amarcart-dashboard-768x452.png 768w, https://infixmart.com/wp-content/uploads/2021/11/amarcart-dashboard-1024x603.png 1024w"
                             sizes="(max-width: 1179px) 100vw, 1179px" width="1179" height="694">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('modules-section')
    <div id="modules-section">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-lg-3">
                    <div class="modules_feature">
                        <span class="modules_feature_icon">
                            <i class="fa-sharp fa-solid fa-cube"></i>
                        </span>
                        <h4>Dashboard</h4>
                        <p class="">26 plus widget make your all informations update always. 14 Card get most of the
                            system summery within few moment</p>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-3">
                    <div class="modules_feature">
                        <span class="modules_feature_icon">
                            <i class="fa-sharp fa-solid fa-cube"></i>
                        </span>
                        <h4>Dashboard</h4>
                        <p class="">26 plus widget make your all informations update always. 14 Card get most of the
                            system summery within few moment</p>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-3">
                    <div class="modules_feature">
                        <span class="modules_feature_icon">
                            <i class="fa-sharp fa-solid fa-cube"></i>
                        </span>
                        <h4>Dashboard</h4>
                        <p class="">26 plus widget make your all informations update always. 14 Card get most of the
                            system summery within few moment</p>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-3">
                    <div class="modules_feature">
                        <span class="modules_feature_icon">
                            <i class="fa-sharp fa-solid fa-cube"></i>
                        </span>
                        <h4>Dashboard</h4>
                        <p class="">26 plus widget make your all informations update always. 14 Card get most of the
                            system summery within few moment</p>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-3">
                    <div class="modules_feature">
                        <span class="modules_feature_icon">
                            <i class="fa-sharp fa-solid fa-cube"></i>
                        </span>
                        <h4>Dashboard</h4>
                        <p class="">26 plus widget make your all informations update always. 14 Card get most of the
                            system summery within few moment</p>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-3">
                    <div class="modules_feature">
                        <span class="modules_feature_icon">
                            <i class="fa-sharp fa-solid fa-cube"></i>
                        </span>
                        <h4>Dashboard</h4>
                        <p class="">26 plus widget make your all informations update always. 14 Card get most of the
                            system summery within few moment</p>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection

@section('amazing-section')
    <div id="amazing-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-md-8">
                    <div class="amazing_section_tittle text-center">
                        <h5>AMazing Features</h5>
                        <h2>More Features has Amazcart</h2>
                        <p>We did the best research for the E-commerce application mostly commonly used in the fast
                            world.</p>
                    </div>
                </div>

            </div>

            <div class="row justify-content-center">
                <div class="col-sm-4 col-xl-2">
                    <div class="amazing_feature">
                        <span class="single_amazing_icon"><i class="fa-sharp fa-solid fa-cube"></i></span>
                        <p>Optimized <br> Performance</p>
                    </div>
                </div>
                <div class="col-sm-4 col-xl-2">
                    <div class="amazing_feature">
                        <span class="single_amazing_icon"><i class="fa-sharp fa-solid fa-cube"></i></span>
                        <p>Optimized <br> Performance</p>
                    </div>
                </div>
                <div class="col-sm-4 col-xl-2">
                    <div class="amazing_feature">
                        <span class="single_amazing_icon"><i class="fa-sharp fa-solid fa-cube"></i></span>
                        <p>Optimized <br> Performance</p>
                    </div>
                </div>

                <div class="col-sm-4 col-xl-2">
                    <div class="amazing_feature">
                        <span class="single_amazing_icon"><i class="fa-sharp fa-solid fa-cube"></i></span>
                        <p>Optimized <br> Performance</p>
                    </div>
                </div>

                <div class="col-sm-4 col-xl-2">
                    <div class="amazing_feature">
                        <span class="single_amazing_icon"><i class="fa-sharp fa-solid fa-cube"></i></span>
                        <p>Optimized <br> Performance</p>
                    </div>
                </div>

                <div class="col-sm-4 col-xl-2">
                    <div class="amazing_feature">
                        <span class="single_amazing_icon"><i class="fa-sharp fa-solid fa-cube"></i></span>
                        <p>Optimized <br> Performance</p>
                    </div>
                </div>

                <div class="col-sm-4 col-xl-2">
                    <div class="amazing_feature">
                        <span class="single_amazing_icon"><i class="fa-sharp fa-solid fa-cube"></i></span>
                        <p>Optimized <br> Performance</p>
                    </div>
                </div>

                <div class="col-sm-4 col-xl-2">
                    <div class="amazing_feature">
                        <span class="single_amazing_icon"><i class="fa-sharp fa-solid fa-cube"></i></span>
                        <p>Optimized <br> Performance</p>
                    </div>
                </div>

                <div class="col-sm-4 col-xl-2">
                    <div class="amazing_feature">
                        <span class="single_amazing_icon"><i class="fa-sharp fa-solid fa-cube"></i></span>
                        <p>Optimized <br> Performance</p>
                    </div>
                </div>

                <div class="col-sm-4 col-xl-2">
                    <div class="amazing_feature">
                        <span class="single_amazing_icon"><i class="fa-sharp fa-solid fa-cube"></i></span>
                        <p>Optimized <br> Performance</p>
                    </div>
                </div>

                <div class="col-sm-4 col-xl-2">
                    <div class="amazing_feature">
                        <span class="single_amazing_icon"><i class="fa-sharp fa-solid fa-cube"></i></span>
                        <p>Optimized <br> Performance</p>
                    </div>
                </div>

                <div class="col-sm-4 col-xl-2">
                    <div class="amazing_feature">
                        <span class="single_amazing_icon"><i class="fa-sharp fa-solid fa-cube"></i></span>
                        <p>Optimized <br> Performance</p>
                    </div>
                </div>

                <div class="col-sm-4 col-xl-2">
                    <div class="amazing_feature">
                        <span class="single_amazing_icon"><i class="fa-sharp fa-solid fa-cube"></i></span>
                        <p>Optimized <br> Performance</p>
                    </div>
                </div>

                <div class="col-sm-4 col-xl-2">
                    <div class="amazing_feature">
                        <span class="single_amazing_icon"><i class="fa-sharp fa-solid fa-cube"></i></span>
                        <p>Optimized <br> Performance</p>
                    </div>
                </div>

                <div class="col-sm-4 col-xl-2">
                    <div class="amazing_feature">
                        <span class="single_amazing_icon"><i class="fa-sharp fa-solid fa-cube"></i></span>
                        <p>Optimized <br> Performance</p>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection

@section('application-section')
    <div id="application-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-xl-7">
                    <div class="application-text">
                        <h5>Application Support</h5>
                        <h2>INFIX Support Centre</h2>
                        <p>Need faster help? Ask your queries here. You’ll get instant help from us.</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <div class="application_feature">
                        <div class="single_application_part">
                            <span class="single_application_icon">
                                <i class="fa-sharp fa-solid fa-file-invoice"></i>
                            </span>
                            <p>
                                <a href="javascript:void(0)">Submit a Ticket</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="application_feature">
                        <div class="single_application_part">
                            <span class="single_application_icon">
                                <i class="fa-sharp fa-solid fa-file-invoice"></i>
                            </span>
                            <p>
                                <a href="javascript:void(0)">Submit a Ticket</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="application_feature">
                        <div class="single_application_part">
                            <span class="single_application_icon">
                                <i class="fa-sharp fa-solid fa-file-invoice"></i>
                            </span>
                            <p>
                                <a href="javascript:void(0)">Submit a Ticket</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
