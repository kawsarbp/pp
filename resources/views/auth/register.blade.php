<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta name="description" content=""/>
    <meta name="author" content=""/>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('admin/favicon.png') }}">
    <title>
        Register Page
    </title>
    <!-- Bootstrap Core CSS -->
    <link href="{{ asset('admin/assets/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" />
    <!-- Custom CSS -->
    <link href="{{ asset('admin/css/style.css') }}" rel="stylesheet"/>
    <!-- You can change the theme colors from here -->
    <link href="{{ asset('admin/css/colors/blue.css') }}" id="theme" rel="stylesheet"/>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
<!-- ============================================================== -->
<!-- Preloader - style you can find in spinners.css -->
<!-- ============================================================== -->
<div class="preloader">
    <svg class="circular" viewBox="25 25 50 50">
        <circle
            class="path"
            cx="50"
            cy="50"
            r="20"
            fill="none"
            stroke-width="2"
            stroke-miterlimit="10"
        />
    </svg>
</div>
<!-- ============================================================== -->
<!-- Main wrapper - style you can find in pages.scss -->
<!-- ============================================================== -->
<section id="wrapper">
    <div
        class="login-register"
        style="
          background-image: url({{ asset('admin/assets/images/background/login-register.jpg') }});
        "
    >
        <div class="login-box card">
            <div class="card-body">
                <form class="form-horizontal form-material" id="loginform" method="POST" action="{{ route('register') }}" >
                    @csrf
                    <h3 class="box-title m-b-20 text-center">Sign Up</h3>
                    <div class="text-danger">
                        <x-validation-errors class="mb-4"/>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <div class="col-xs-12">
                                    <input class="form-control" type="text" value="{{old('name')}}" name="name" required=""
                                           placeholder="Name">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <div class="col-xs-12">
                                    <input class="form-control" type="email" value="{{old('email')}}" name="email" required=""
                                           placeholder="E-mail">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <div class="col-xs-12">
                                    <input class="form-control" type="text" value="{{old('address')}}" name="address" required=""
                                           placeholder="Address">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <div class="col-xs-12">
                                    <input class="form-control" type="number" value="{{old('phone')}}" name="phone" required=""
                                           placeholder="Phone">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-xs-12">
                            <input class="form-control" type="text" value="{{old('postcode')}}" name="postcode"
                                   placeholder="Postcode">

                            <input type="hidden" name="country">
                            <input type="hidden" name="city">
                            <input type="hidden" name="state">
                            <input type="hidden" name="postcode">
                            <input type="hidden" name="note">

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <div class="col-xs-12">
                                    <input class="form-control" type="password" name="password" required=""
                                           placeholder="Password"></div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <div class="col-xs-12">
                                    <input class="form-control" type="password" name="password_confirmation" required=""
                                           placeholder="Confirm Password"></div>
                            </div>
                        </div>
                    </div>


                    <div class="form-group text-center">
                        <div class="col-xs-12 p-b-20">
                            <button class="btn btn-block btn-lg btn-info btn-rounded" type="submit">Sign Up</button>
                        </div>
                    </div>

                    <div class="form-group m-b-0">
                        <div class="col-sm-12 text-center">
                            Already have an account? <a href="{{route('login')}}" class="text-info m-l-5"><b>Sign In</b></a>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
</section>



<!-- ============================================================== -->
<!-- All Jquery -->
<!-- ============================================================== -->
<script src="{{ asset('admin/assets/plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap tether Core JavaScript -->
<script src="{{ asset('admin/assets/plugins/bootstrap/js/popper.min.js') }}"></script>
<script src="{{ asset('admin/assets/plugins/bootstrap/js/bootstrap.min.js') }}"></script>
<!-- slimscrollbar scrollbar JavaScript -->
<script src="{{ asset('admin/js/jquery.slimscroll.js') }}"></script>
<!--Wave Effects -->
<script src="{{ asset('admin/js/waves.js') }}"></script>
<!--Menu sidebar -->
<script src="{{ asset('admin/js/sidebarmenu.js') }}"></script>
<!--stickey kit -->
<script src="{{ asset('admin/assets/plugins/sticky-kit-master/dist/sticky-kit.min.js') }}"></script>
<script src="{{ asset('admin/assets/plugins/sparkline/jquery.sparkline.min.js') }}"></script>
<!--Custom JavaScript -->
<script src="{{ asset('admin/js/custom.min.js') }}"></script>
<!-- ============================================================== -->
<!-- Style switcher -->
<!-- ============================================================== -->
<script src="{{ asset('admin/assets/plugins/styleswitcher/jQuery.style.switcher.js') }}"></script>
</body>
</html>
