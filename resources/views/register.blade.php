<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Codeaffil | Login</title>
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/images/favicon/favicon.png')}}" />

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800&display=swap" rel="stylesheet" />
    <!-- All CSS Flies   -->
    <!--===== Vendor CSS (Bootstrap & Icon Font) =====-->
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/bootstrap.min.css')}}" />
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/font-awesome.min.css')}}" />
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/ionicons.min.css')}}" />
    <!--===== Plugins CSS (All Plugins Files) =====-->
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/jquery-ui.min.css')}}" />
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/meanmenu.css')}}" />
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/nice-select.css')}}" />
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/owl-carousel.css')}}" />
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/slick.css')}}" />

    <!--====== Use the minified version files listed below for better performance and remove the files listed above ======-->

    <!-- <link rel="stylesheet" href="assets/css/vendor/vendor.min.css">
        <link rel="stylesheet" href="assets/css/plugins/plugins.min.css">
        <link rel="stylesheet" href="assets/css/style.min.css">
        <link rel="stylesheet" href="assets/css/responsive.min.css"> -->

    <!--===== Main Css Files =====-->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css')}}" />
    <!-- ===== Responsive Css Files ===== -->
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css')}}" />
</head>

<body>
    <!-- main layout start from here -->
    <!--====== PRELOADER PART START ======-->

    <div id="preloader">
        <div class="preloader">
            <span></span>
            <span></span>
        </div>
    </div>

    <!--====== PRELOADER PART ENDS ======-->
    <div id="main">
        <!-- Header Start -->
        @include('header')
        <!-- Header End -->
        <!-- login area start -->
        <div class="login-register-area mb-60px mt-53px back">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 mx-auto">
                        <img src="{{asset('assets/images/banner-image/3255317.jpg')}}" alt="" class="backx">
                    </div>

                    <div class="col-md-6 mx-auto">
                        <div class="login-register-wrapper">
                            <div class="login-register-tab-list nav">
                                <a href="/login">
                                    <h4>login</h4>
                                </a>
                                <a class="active" href="/register">
                                    <h4>register</h4>
                                </a>
                            </div>
                            <div class="tab-content">
                                <div id="lg2" class="tab-pane active">
                                    <div class="login-form-container">
                                        <div class="login-register-form">
                                            <form action="/_register" method="post">
                                                @csrf
                                                @if(isset($redirect))
                                                <input type="hidden" name="redirect" value="{{$redirect}}" />
                                                @endif
                                                <input type="text" name="name" placeholder="Username" required />
                                                <input id="password" type="password" name="password" placeholder="Password" minlength="8" required />
                                                <input id="confirm_password" type="password" name="password" placeholder="Confirm Password" minlength="8" required />
                                                <input name="email" placeholder="Email" type="email" required />
                                                <div style="color:#ef1e1e">{{session('msg')}}</div><br />
                                                <div class="button-box">
                                                    <button type="submit"><span>Register</span></button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- login area end -->
        <!-- Footer Area start -->
        @include('footer')
        <!--  Footer Area End -->
    </div>

    <!-- Scripts to be loaded  -->
    <!-- JS
============================================ -->

    <!--====== Vendors js ======-->
    <!--====== Vendors js ======-->
    <script src="{{ asset('assets/js/vendor/jquery-3.6.0.min.js')}}"></script>
    <script src="{{ asset('assets/js/vendor/bootstrap.min.js')}}"></script>
    <script src="{{ asset('assets/js/vendor/jquery-migrate-3.3.2.min.js')}}"></script>
    <script src="{{ asset('assets/js/vendor/modernizr-3.11.2.min.js')}}"></script>
    <script src="{{ asset('assets/js/vendor/popper.min.js')}}"></script>

    <!--====== Plugins js ======-->

    <script src="{{ asset('assets/js/plugins/meanmenu.js')}}"></script>
    <script src="{{ asset('assets/js/plugins/owl-carousel.js')}}"></script>
    <script src="{{ asset('assets/js/plugins/jquery.nice-select.js')}}"></script>
    <script src="{{ asset('assets/js/plugins/countdown.js')}}"></script>
    <script src="{{ asset('assets/js/plugins/elevateZoom.js')}}"></script>
    <script src="{{ asset('assets/js/plugins/jquery-ui.min.js')}}"></script>
    <script src="{{ asset('assets/js/plugins/slick.js')}}"></script>
    <script src="{{ asset('assets/js/plugins/scrollup.js')}}"></script>
    <script src="{{ asset('assets/js/plugins/range-script.js')}}"></script>

    <!--====== Use the minified version files listed below for better performance and remove the files listed above ======-->

    <!-- <script src="assets/js/vendor/vendor.min.js"></script>
        <script src="assets/js/plugins/plugins.min.js"></script> -->

    <!-- Main Activation JS -->
    <script src="{{ asset('assets/js/main.js')}}"></script>

    <script>
        var password = document.getElementById("password"),
            confirm_password = document.getElementById("confirm_password");

        function validatePassword() {
            if (password.value != confirm_password.value) {
                confirm_password.setCustomValidity("Passwords Don't Match");
            } else {
                confirm_password.setCustomValidity('');
            }
        }

        password.onchange = validatePassword;
        confirm_password.onkeyup = validatePassword;
    </script>
</body>

</html>