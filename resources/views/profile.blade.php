<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Ecolife - Multipurpose eCommerce HTML Template</title>
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon/favicon.png" />

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800&display=swap" rel="stylesheet" />

    <!-- All CSS Flies   -->
    <!--===== Vendor CSS (Bootstrap & Icon Font) =====-->
    <link rel="stylesheet" href="assets/css/vendor/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/css/vendor/font-awesome.min.css" />
    <link rel="stylesheet" href="assets/css/vendor/ionicons.min.css" />
    <!--===== Plugins CSS (All Plugins Files) =====-->
    <link rel="stylesheet" href="assets/css/plugins/jquery-ui.min.css" />
    <link rel="stylesheet" href="assets/css/plugins/meanmenu.css" />
    <link rel="stylesheet" href="assets/css/plugins/nice-select.css" />
    <link rel="stylesheet" href="assets/css/plugins/owl-carousel.css" />
    <link rel="stylesheet" href="assets/css/plugins/slick.css" />

    <!--====== Use the minified version files listed below for better performance and remove the files listed above ======-->

    <!-- <link rel="stylesheet" href="assets/css/vendor/vendor.min.css">
        <link rel="stylesheet" href="assets/css/plugins/plugins.min.css">
        <link rel="stylesheet" href="assets/css/style.min.css">
        <link rel="stylesheet" href="assets/css/responsive.min.css"> -->

    <!--===== Main Css Files =====-->
    <link rel="stylesheet" href="assets/css/style.css" />
    <!-- ===== Responsive Css Files ===== -->
    <link rel="stylesheet" href="assets/css/responsive.css" />
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
        <!-- Breadcrumb Area start -->
        <section class="breadcrumb-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="breadcrumb-content">
                            <h1 class="breadcrumb-hrading">Account Page</h1>
                            <ul class="breadcrumb-links">
                                <li><a href="index.html">Home</a></li>
                                <li>My Account</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Breadcrumb Area End -->
        <!-- account area start -->
        <div class="checkout-area mtb-60px">
            <div class="container">
                <div class="row">
                    <div class="mx-auto col-lg-9">
                        <div class="checkout-wrapper">
                            <div id="faq" class="panel-group">

                                <!-- Image upload start -->
                                <form action="_profile_upload" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="profile-pic mb-2">
                                        <label class="-label" for="file">
                                            <span class="glyphicon glyphicon-camera"></span>
                                            <span>Change Image</span>
                                        </label>
                                        <input id="file" name="file" type="file" onchange="loadFile(event)" />
                                        @if($user->image === NULL)
                                        <img src="assets\images\user-profile\default.jpg" id="output" width="200" />
                                        @else
                                        <img src="{{$user->image}}" id="output" width="200" />
                                        @endif
                                    </div>
                                    <div class="xname mb-3">
                                        <input type="submit" value="Save Changes" class="btn btn-secondary btn-sm mb-3" id="save_profile">
                                        <h4>{{$user->username}}</h4>
                                        <h5>{{$email}}</h5>
                                    </div>
                                </form>
                                <!-- Image upload end  -->

                                <div class="panel panel-default single-my-account">
                                    <div class="panel-heading my-account-title">
                                        <h3 class="panel-title"><span>1 .</span> <a data-bs-toggle="collapse" data-parent="#faq" href="#my-account-1">Edit your account information </a></h3>
                                    </div>

                                    <form action="_info_update" method="post">
                                        @csrf
                                        <div id="my-account-1" class="panel-collapse collapse show">
                                            <div class="panel-body">
                                                <div class="myaccount-info-wrapper">
                                                    <div class="account-info-wrapper">
                                                        <h4>My Account Information</h4>
                                                        <h5>Your Personal Details</h5>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-6 col-md-6">
                                                            <div class="billing-info">
                                                                <label>First Name</label>
                                                                <input type="text" name="f_name" value="{{$user->f_name}}" />
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 col-md-6">
                                                            <div class="billing-info">
                                                                <label>Last Name</label>
                                                                <input type="text" name="l_name" value="{{$user->l_name}}" />
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 col-md-6">
                                                            <div class="billing-info">
                                                                <label>Telephone</label>
                                                                <input type="text" name="phone" value="{{$user->phone_no}}" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="billing-back-btn">
                                                        <div class="billing-back">
                                                            <a href="#"><i class="fa fa-arrow-up"></i> back</a>
                                                        </div>
                                                        <div class="billing-btn">
                                                            <button type="submit">Continue</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                @if (Session::has('error'))
                                <script>
                                    function wrong_password() {
                                        alert("{{ Session::get('error') }}");
                                    }
                                    wrong_password();
                                </script>
                                @endif
                                <div class="panel panel-default single-my-account">
                                    <div class="panel-heading my-account-title">
                                        <h3 class="panel-title"><span>2 .</span> <a data-bs-toggle="collapse" data-parent="#faq" href="#my-account-2">Change your password </a></h3>
                                    </div>
                                    <form action="_change_password" method="post">
                                        @csrf
                                        <div id="my-account-2" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <div class="myaccount-info-wrapper">
                                                    <div class="account-info-wrapper">
                                                        <h4>Change Password</h4>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-12 col-md-12">
                                                            <div class="billing-info">
                                                                <label>Current Password</label>
                                                                <input type="password" name="current_password" />
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-12 col-md-12">
                                                            <div class="billing-info">
                                                                <label>New Password</label>
                                                                <input type="password" name="new_password" />
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-12 col-md-12">
                                                            <div class="billing-info">
                                                                <label>New Password Confirm</label>
                                                                <input type="password" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="billing-back-btn">
                                                        <div class="billing-back">
                                                            <a href="#"><i class="fa fa-arrow-up"></i> back</a>
                                                        </div>
                                                        <div class="billing-btn">
                                                            <button type="submit">Continue</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- account area end -->
        <!-- Footer Area start -->
        @include('footer')
        <!--  Footer Area End -->
    </div>

    <!-- Scripts to be loaded  -->
    <!-- JS
============================================ -->

    <!--====== Vendors js ======-->
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

    <!-- profile pic js -->
    <script>
        var loadFile = function(event) {
            var image = document.getElementById('output');
            image.src = URL.createObjectURL(event.target.files[0]);
            document.getElementById("save_profile").style.display = "inline";
        };
    </script>
</body>

</html>