<!DOCTYPE html>
<html lang="zxx">
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

        <!-- <div id="preloader">
        <div class="preloader">
            <span></span>
            <span></span>
        </div>
    </div> -->

        <!--====== PRELOADER PART ENDS ======-->
        <div id="main">
            <!-- Header Start -->
            @include('header')
            <!-- Header End -->
            <!-- Breadcrumb Area start -->
            <section class="breadcrumb-area" style="background-image: url(assets/images/banner-image/about.jpg);">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="breadcrumb-content">
                                <h1 class="breadcrumb-hrading">About Page</h1>
                                <ul class="breadcrumb-links">
                                    <li><a href="index.html">Home</a></li>
                                    <li>About</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Breadcrumb Area End -->

            <!-- About Area Start -->
            <section class="about-area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 mb-res-sm-50px">
                            <div class="about-left-image">
                                <img src="assets/images/feature-bg/1.jpg" alt="" class="img-responsive" />
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="about-content">
                                <div class="about-title">
                                    <h2>Welcome To Ecolife</h2>
                                </div>
                                <p class="mb-30px">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore aperiam fugit consequuntur voluptatibus ex sint iure in, distinctio sed dolorem aspernatur veritatis repellendus dolorum voluptate, animi
                                    libero officiis eveniet accusamus recusandae. Temporibus amet ducimus sapiente voluptatibus autem dolorem magnam quas, porro suscipit. Quibusdam culpa asperiores exercitationem architecto quo, temporibus
                                    vel! porro suscipit. Quibusdam culpa asperiores exercitationem architecto quo, temporibus vel!
                                </p>
                                <p>
                                    Sint voluptatum beatae necessitatibus quos mollitia vero, optio asperiores aut tempora iusto eum rerum, possimus, minus quidem ut saepe laboriosam. Praesentium aperiam accusantium minus repellendus
                                    accusamus neque iusto pariatur laudantium provident quod recusandae exercitationem natus dignissimos, molestias quibusdam doloremque eaque fugit molestiae modi quam unde. Error est dolor facere.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-60px">
                        <div class="col-md-4 mb-res-sm-30px">
                            <div class="single-about">
                                <h4>Our Company</h4>
                                <p>
                                    Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam. Lorem ipsum dolor sit amet conse ctetur adipisicing
                                    elit.
                                </p>
                            </div>
                        </div>
                        <div class="col-md-4 mb-res-sm-30px">
                            <div class="single-about">
                                <h4>Our Team</h4>
                                <p>
                                    Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam. Lorem ipsum dolor sit amet conse ctetur adipisicing
                                    elit.
                                </p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="single-about">
                                <h4>Testimonial</h4>
                                <p>
                                    Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam. Lorem ipsum dolor sit amet conse ctetur adipisicing
                                    elit.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- About Area End -->

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
    </body>
</html>
