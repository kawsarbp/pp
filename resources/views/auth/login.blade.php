<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('admin/favicon.png') }}">
    <title>Sign In</title>
    <!-- Bootstrap Core CSS -->
    <link href="{{ asset('admin/assets/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{ asset('admin/css/style.css') }}" rel="stylesheet">
    <!-- You can change the theme colors from here -->
    <link href="{{ asset('admin/css/colors/blue.css') }}" id="theme" rel="stylesheet">
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
        <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10"/>
    </svg>
</div>
<!-- ============================================================== -->
<!-- Main wrapper - style you can find in pages.scss -->
<!-- ============================================================== -->
<section id="wrapper">
    <div class="login-register"
         style="background-image:url({{ asset('admin/assets/images/background/login-register.jpg') }});">
        <div class="login-box card">
            <div class="card-body">
                <form class="form-horizontal form-material" id="loginform" method="POST" action="{{ route('login') }}">
                    @csrf
                    <h3 class="box-title m-b-20 text-center">Sign In</h3>
                    <div class="text-danger font-14">
                        <x-validation-errors class="mb-4"/>
                    </div>

                    <div class="form-group ">
                        <div class="col-xs-12">
                            <input class="form-control" type="email" value="{{old('email')}}" name="email" required=""
                                   placeholder="E-mail">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-12">
                            <input class="form-control" type="password" name="password" required=""
                                   placeholder="Password">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
                            <div class="checkbox checkbox-primary pull-left p-t-0">
                                <input id="checkbox-signup" type="checkbox">
                                <label for="checkbox-signup"> Remember me </label>
                            </div>
                            @if (Route::has('password.request'))
                                <a href="{{ route('password.request') }}" id="to-recover" class="text-dark pull-right"><i
                                        class="fa fa-lock m-r-5"></i> Forgot pwd?</a>
                            @endif
                        </div>
                    </div>
                    <div class="form-group text-center m-t-20">
                        <div class="col-xs-12">
                            <button class="btn btn-info btn-lg btn-block text-uppercase waves-effect waves-light"
                                    type="submit">Log In
                            </button>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 m-t-10 text-center">
                            <div class="social">
                                <a href="javascript:void(0)" class="btn  btn-facebook" data-toggle="tooltip"
                                   title="Login with Facebook"> <i aria-hidden="true" class="fa fa-facebook"></i> </a>
                                <a href="javascript:void(0)" class="btn btn-googleplus" data-toggle="tooltip"
                                   title="Login with Google"> <i aria-hidden="true" class="fa fa-google-plus"></i> </a>
                            </div>
                        </div>
                    </div>
                    <div class="form-group m-b-0">
                        <div class="col-sm-12 text-center">
                            <p>Don't have an account? <a href="{{route('register')}}" class="text-info m-l-5"><b>Sign Up</b></a>
                            </p>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>

</section>


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
