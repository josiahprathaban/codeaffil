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
            <section class="breadcrumb-area">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="breadcrumb-content">
                                <h1 class="breadcrumb-hrading">Compare Page</h1>
                                <ul class="breadcrumb-links">
                                    <li><a href="index.html">Home</a></li>
                                    <li>Compare</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Breadcrumb Area End -->
            <!-- Compare area start -->
            <div class="compare-area mtb-60px">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <form action="#">
                                <!-- Compare Table -->
                                <div class="compare-table table-responsive">
                                    <table class="table mb-0">
                                        <tbody>
                                            <tr>
                                                <td class="first-column">Product</td>
                                                <td class="product-image-title">
                                                    <a href="#" class="image"><img src="assets/images/product-image/electronic/10.jpg" alt="Compare Product" /></a>
                                                    <a href="#" class="category">Camera</a>
                                                    <a href="#" class="title">Zeon Zen 4 Pro</a>
                                                </td>
                                                <td class="product-image-title">
                                                    <a href="#" class="image"><img src="assets/images/product-image/electronic/9.jpg" alt="Compare Product" /></a>
                                                    <a href="#" class="category">Doren</a>
                                                    <a href="#" class="title">Aquet Doren D 420</a>
                                                </td>
                                                <td class="product-image-title">
                                                    <a href="#" class="image"><img src="assets/images/product-image/electronic/4.jpg" alt="Compare Product" /></a>
                                                    <a href="#" class="category">Games</a>
                                                    <a href="#" class="title">Game Station X 22</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="first-column">Description</td>
                                                <td class="pro-desc">
                                                    <p>Samsome Note Book Pro 5 is the best Laptop on this budget. You can satisfy after usign this laptop. It’s performance is awesome. Designer’s love it.</p>
                                                </td>
                                                <td class="pro-desc">
                                                    <p>Samsome Note Book Pro 5 is the best Laptop on this budget. You can satisfy after usign this laptop. It’s performance is awesome. Designer’s love it.</p>
                                                </td>
                                                <td class="pro-desc">
                                                    <p>Samsome Note Book Pro 5 is the best Laptop on this budget. You can satisfy after usign this laptop. It’s performance is awesome. Designer’s love it.</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="first-column">Price</td>
                                                <td class="pro-price">$295</td>
                                                <td class="pro-price">$275</td>
                                                <td class="pro-price">$395</td>
                                            </tr>
                                            <tr>
                                                <td class="first-column">Color</td>
                                                <td class="pro-color">Black</td>
                                                <td class="pro-color">Black</td>
                                                <td class="pro-color">Black</td>
                                            </tr>
                                            <tr>
                                                <td class="first-column">Stock</td>
                                                <td class="pro-stock">In Stock</td>
                                                <td class="pro-stock">In Stock</td>
                                                <td class="pro-stock">In Stock</td>
                                            </tr>
                                            <tr>
                                                <td class="first-column">Add to cart</td>
                                                <td class="pro-addtocart">
                                                    <a href="#" class="add-to-cart" tabindex="0"><span>ADD TO CART</span></a>
                                                </td>
                                                <td class="pro-addtocart">
                                                    <a href="#" class="add-to-cart" tabindex="0"><span>ADD TO CART</span></a>
                                                </td>
                                                <td class="pro-addtocart">
                                                    <a href="#" class="add-to-cart" tabindex="0"><span>ADD TO CART</span></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="first-column">Delete</td>
                                                <td class="pro-remove">
                                                    <button><i class="ion-trash-b"></i></button>
                                                </td>
                                                <td class="pro-remove">
                                                    <button><i class="ion-trash-b"></i></button>
                                                </td>
                                                <td class="pro-remove">
                                                    <button><i class="ion-trash-b"></i></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="first-column">Rating</td>
                                                <td class="pro-ratting">
                                                    <i class="ion-android-star"></i>
                                                    <i class="ion-android-star"></i>
                                                    <i class="ion-android-star"></i>
                                                    <i class="ion-android-star"></i>
                                                    <i class="ion-android-star"></i>
                                                </td>
                                                <td class="pro-ratting">
                                                    <i class="ion-android-star"></i>
                                                    <i class="ion-android-star"></i>
                                                    <i class="ion-android-star"></i>
                                                    <i class="ion-android-star"></i>
                                                    <i class="ion-android-star-outline"></i>
                                                </td>
                                                <td class="pro-ratting">
                                                    <i class="ion-android-star"></i>
                                                    <i class="ion-android-star"></i>
                                                    <i class="ion-android-star"></i>
                                                    <i class="ion-android-star"></i>
                                                    <i class="ion-android-star-half"></i>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Compare area end -->
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
