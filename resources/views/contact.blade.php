<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Codeaffil | Contact</title>
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
        <!-- contact area start -->
        <div class="contact-area mtb-60px">
            <div class="container">
                <div class="custom-row-2">
                    <div class="col-lg-4 col-md-5">
                        <div class="contact-info-wrap">
                            <div class="single-contact-info">
                                <div class="contact-icon">
                                    <i class="fa fa-phone"></i>
                                </div>
                                <div class="contact-info-dec">
                                    <p>+012 345 678 102</p>
                                    <p>+012 345 678 102</p>
                                </div>
                            </div>
                            <div class="single-contact-info">
                                <div class="contact-icon">
                                    <i class="fa fa-globe"></i>
                                </div>
                                <div class="contact-info-dec">
                                    <p><a href="#">urname@email.com</a></p>
                                    <p><a href="#">urwebsitenaem.com</a></p>
                                </div>
                            </div>
                            <div class="single-contact-info">
                                <div class="contact-icon">
                                    <i class="fa fa-map-marker"></i>
                                </div>
                                <div class="contact-info-dec">
                                    <p>Address goes here,</p>
                                    <p>street, Crossroad 123.</p>
                                </div>
                            </div>
                            <div class="contact-social">
                                <h3>Follow Us</h3>
                                <div class="social-info">
                                    <ul>
                                        <li>
                                            <a href="#"><i class="ion-social-facebook"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="ion-social-twitter"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="ion-social-youtube"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="ion-social-google"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="ion-social-instagram"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-7">
                        <div class="contact-form">
                            <div class="contact-title mb-30">
                                <h2>Get In Touch</h2>
                            </div>
                            <form class="contact-form-style" id="contact-form" action="{{url('sendemail/send')}}" method="post">
                                {{ csrf_field() }}
                                <div class="row">
                                    <div class="col-lg-6">
                                        @if(session('user'))
                                        <input name="name" placeholder="Name*" value="{{session('user')}}" type="text" />
                                        @else
                                        <input name="name" placeholder="Name*" type="text" />
                                        @endif
                                    </div>

                                    <div class="col-lg-6">
                                        @if(session('email'))
                                        <input name="email" placeholder="Email*" value="{{session('email')}}" type="text" />
                                        @else
                                        <input name="email" placeholder="Email*" type="text" />
                                        @endif
                                    </div>

                                    <div class="col-lg-12">
                                        <input name="subject" placeholder="Subject*" type="text" />
                                    </div>
                                    <div class="col-lg-12">
                                        <textarea name="message" placeholder="Your Message*"></textarea>
                                        @if (count($errors) > 0)
                                        <div class="alert alert-danger">
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                        @endif
                                        @if ($message = Session::get('success'))
                                        <div class="alert alert-success alert-block">
                                            <strong>{{ $message }}</strong>
                                        </div>
                                        @endif
                                        <button class="submit" name="send" type="submit" value="Send">SEND</button>
                                    </div>

                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- contact area end -->
        <!-- Footer Area start -->
        @include('footer')
        <!--  Footer Area End -->
    </div>

    <!-- Scripts to be loaded  -->
    <!-- JS
============================================ -->

    <!--====== Vendors js ======-->
    <script src="assets/js/vendor/jquery-3.6.0.min.js"></script>
    <script src="assets/js/vendor/bootstrap.min.js"></script>
    <script src="assets/js/vendor/jquery-migrate-3.3.2.min.js"></script>
    <script src="assets/js/vendor/modernizr-3.11.2.min.js"></script>
    <script src="assets/js/vendor/popper.min.js"></script>

    <!--====== Plugins js ======-->

    <script src="assets/js/plugins/meanmenu.js"></script>
    <script src="assets/js/plugins/owl-carousel.js"></script>
    <script src="assets/js/plugins/jquery.nice-select.js"></script>
    <script src="assets/js/plugins/countdown.js"></script>
    <script src="assets/js/plugins/elevateZoom.js"></script>
    <script src="assets/js/plugins/jquery-ui.min.js"></script>
    <script src="assets/js/plugins/slick.js"></script>
    <script src="assets/js/plugins/scrollup.js"></script>
    <script src="assets/js/plugins/range-script.js"></script>

    <!--====== Use the minified version files listed below for better performance and remove the files listed above ======-->

    <!-- <script src="assets/js/vendor/vendor.min.js"></script>
        <script src="assets/js/plugins/plugins.min.js"></script> -->

    <!-- Main Activation JS -->
    <script src="assets/js/main.js"></script>
</body>

</html>