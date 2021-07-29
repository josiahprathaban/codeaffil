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
                                <h1 class="breadcrumb-hrading">Shop Page</h1>
                                <ul class="breadcrumb-links">
                                    <li><a href="index.html">Home</a></li>
                                    <li>Shop List Left Sidebar</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Breadcrumb Area End -->
            <!-- Shop Category Area End -->
            <div class="shop-category-area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-9 order-lg-last col-md-12 order-md-first">
                            <!-- Shop Top Area Start -->
                            <div class="shop-top-bar">
                                <!-- Left Side start -->
                                <div class="shop-tab nav mb-res-sm-15">
                                    <a href="#shop-1" data-bs-toggle="tab">
                                        <i class="fa fa-th show_grid"></i>
                                    </a>
                                    <a class="active" href="#shop-2" data-bs-toggle="tab">
                                        <i class="fa fa-list-ul"></i>
                                    </a>
                                    <p>There Are 17 Products.</p>
                                </div>
                                <!-- Left Side End -->
                                <!-- Right Side Start -->
                                <div class="select-shoing-wrap">
                                    <div class="shot-product">
                                        <p>Sort By:</p>
                                    </div>
                                    <div class="shop-select">
                                        <select>
                                            <option value="">Sort by newness</option>
                                            <option value="">A to Z</option>
                                            <option value=""> Z to A</option>
                                            <option value="">In stock</option>
                                        </select>
                                    </div>
                                </div>
                                <!-- Right Side End -->
                            </div>
                            <!-- Shop Top Area End -->

                            <!-- Shop Bottom Area Start -->
                            <div class="shop-bottom-area mt-35">
                                <!-- Shop Tab Content Start -->
                                <div class="tab-content jump">
                                    <!-- Tab One Start -->
                                    <div id="shop-1" class="tab-pane active">
                                        <div class="row">
                                            <div class="col-xl-3 col-md-4 col-sm-6">
                                                <article class="list-product">
                                                    <div class="img-block">
                                                        <a href="single-product.html" class="thumbnail">
                                                            <img class="first-img" src="assets/images/product-image/organic/product-1.jpg" alt="" />
                                                            <img class="second-img" src="assets/images/product-image/organic/product-1.jpg" alt="" />
                                                        </a>
                                                        <div class="quick-view">
                                                            <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                                <i class="ion-ios-search-strong"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <ul class="product-flag">
                                                        <li class="new">New</li>
                                                    </ul>
                                                    <div class="product-decs">
                                                        <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                                                        <h2><a href="single-product.html" class="product-link">Juicy Couture Juicy Quilted T..</a></h2>
                                                        <div class="rating-product">
                                                            <i class="ion-android-star"></i>
                                                            <i class="ion-android-star"></i>
                                                            <i class="ion-android-star"></i>
                                                            <i class="ion-android-star"></i>
                                                            <i class="ion-android-star"></i>
                                                        </div>
                                                        <div class="pricing-meta">
                                                            <ul>
                                                                <li class="old-price">€18.90</li>
                                                                <li class="current-price">€34.21</li>
                                                                <li class="discount-price">-5%</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="add-to-link">
                                                        <ul>
                                                            <li class="cart"><a class="cart-btn" href="#">ADD TO CART </a></li>
                                                            <li>
                                                                <a href="wishlist.html"><i class="ion-android-favorite-outline"></i></a>
                                                            </li>
                                                            <li>
                                                                <a href="compare.html"><i class="ion-ios-shuffle-strong"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </article>
                                            </div>
                                            <div class="col-xl-3 col-md-4 col-sm-6">
                                                <article class="list-product">
                                                    <div class="img-block">
                                                        <a href="single-product.html" class="thumbnail">
                                                            <img class="first-img" src="assets/images/product-image/organic/product-2.jpg" alt="" />
                                                            <img class="second-img" src="assets/images/product-image/organic/product-15.jpg" alt="" />
                                                        </a>
                                                        <div class="quick-view">
                                                            <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                                <i class="ion-ios-search-strong"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <ul class="product-flag">
                                                        <li class="new">New</li>
                                                    </ul>
                                                    <div class="product-decs">
                                                        <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                                                        <h2><a href="single-product.html" class="product-link">New Balance Fresh Foam Ka..</a></h2>
                                                        <div class="rating-product">
                                                            <i class="ion-android-star"></i>
                                                            <i class="ion-android-star"></i>
                                                            <i class="ion-android-star"></i>
                                                            <i class="ion-android-star"></i>
                                                            <i class="ion-android-star"></i>
                                                        </div>
                                                        <div class="pricing-meta">
                                                            <ul>
                                                                <li class="old-price">€18.90</li>
                                                                <li class="current-price">€15.12</li>
                                                                <li class="discount-price">-20%</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="add-to-link">
                                                        <ul>
                                                            <li class="cart"><a class="cart-btn" href="#">ADD TO CART </a></li>
                                                            <li>
                                                                <a href="wishlist.html"><i class="ion-android-favorite-outline"></i></a>
                                                            </li>
                                                            <li>
                                                                <a href="compare.html"><i class="ion-ios-shuffle-strong"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </article>
                                            </div>
                                            <div class="col-xl-3 col-md-4 col-sm-6">
                                                <article class="list-product">
                                                    <div class="img-block">
                                                        <a href="single-product.html" class="thumbnail">
                                                            <img class="first-img" src="assets/images/product-image/organic/product-3.jpg" alt="" />
                                                            <img class="second-img" src="assets/images/product-image/organic/product-4.jpg" alt="" />
                                                        </a>
                                                        <div class="quick-view">
                                                            <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                                <i class="ion-ios-search-strong"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <ul class="product-flag">
                                                        <li class="new">New</li>
                                                    </ul>
                                                    <div class="product-decs">
                                                        <a class="inner-link" href="shop-4-column.html"><span>GRAPHIC CORNER</span></a>
                                                        <h2><a href="single-product.html" class="product-link">Brixton Patrol All Terrain..</a></h2>
                                                        <div class="rating-product">
                                                            <i class="ion-android-star"></i>
                                                            <i class="ion-android-star"></i>
                                                            <i class="ion-android-star"></i>
                                                            <i class="ion-android-star"></i>
                                                            <i class="ion-android-star"></i>
                                                        </div>
                                                        <div class="pricing-meta">
                                                            <ul>
                                                                <li class="old-price not-cut">€18.90</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="add-to-link">
                                                        <ul>
                                                            <li class="cart"><a class="cart-btn" href="#">ADD TO CART </a></li>
                                                            <li>
                                                                <a href="wishlist.html"><i class="ion-android-favorite-outline"></i></a>
                                                            </li>
                                                            <li>
                                                                <a href="compare.html"><i class="ion-ios-shuffle-strong"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </article>
                                            </div>
                                            <div class="col-xl-3 col-md-4 col-sm-6">
                                                <article class="list-product">
                                                    <div class="img-block">
                                                        <a href="single-product.html" class="thumbnail">
                                                            <img class="first-img" src="assets/images/product-image/organic/product-5.jpg" alt="" />
                                                            <img class="second-img" src="assets/images/product-image/organic/product-5.jpg" alt="" />
                                                        </a>
                                                        <div class="quick-view">
                                                            <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                                <i class="ion-ios-search-strong"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <ul class="product-flag">
                                                        <li class="new">New</li>
                                                    </ul>
                                                    <div class="product-decs">
                                                        <a class="inner-link" href="shop-4-column.html"><span>GRAPHIC CORNER</span></a>
                                                        <h2><a href="single-product.html" class="product-link">Juicy Couture Tricot Logo S..</a></h2>
                                                        <div class="rating-product">
                                                            <i class="ion-android-star"></i>
                                                            <i class="ion-android-star"></i>
                                                            <i class="ion-android-star"></i>
                                                            <i class="ion-android-star"></i>
                                                            <i class="ion-android-star"></i>
                                                        </div>
                                                        <div class="pricing-meta">
                                                            <ul>
                                                                <li class="old-price not-cut">€18.90</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="add-to-link">
                                                        <ul>
                                                            <li class="cart"><a class="cart-btn" href="#">ADD TO CART </a></li>
                                                            <li>
                                                                <a href="wishlist.html"><i class="ion-android-favorite-outline"></i></a>
                                                            </li>
                                                            <li>
                                                                <a href="compare.html"><i class="ion-ios-shuffle-strong"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </article>
                                            </div>
                                            <div class="col-xl-3 col-md-4 col-sm-6">
                                                <article class="list-product">
                                                    <div class="img-block">
                                                        <a href="single-product.html" class="thumbnail">
                                                            <img class="first-img" src="assets/images/product-image/organic/product-6.jpg" alt="" />
                                                            <img class="second-img" src="assets/images/product-image/organic/product-6.jpg" alt="" />
                                                        </a>
                                                        <div class="quick-view">
                                                            <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                                <i class="ion-ios-search-strong"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <ul class="product-flag">
                                                        <li class="new">New</li>
                                                    </ul>
                                                    <div class="product-decs">
                                                        <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                                                        <h2><a href="single-product.html" class="product-link">New Balance Arishi Sport v1</a></h2>
                                                        <div class="rating-product">
                                                            <i class="ion-android-star"></i>
                                                            <i class="ion-android-star"></i>
                                                            <i class="ion-android-star"></i>
                                                            <i class="ion-android-star"></i>
                                                            <i class="ion-android-star"></i>
                                                        </div>
                                                        <div class="pricing-meta">
                                                            <ul>
                                                                <li class="old-price not-cut">€18.90</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="add-to-link">
                                                        <ul>
                                                            <li class="cart"><a class="cart-btn" href="#">ADD TO CART </a></li>
                                                            <li>
                                                                <a href="wishlist.html"><i class="ion-android-favorite-outline"></i></a>
                                                            </li>
                                                            <li>
                                                                <a href="compare.html"><i class="ion-ios-shuffle-strong"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </article>
                                            </div>
                                            <div class="col-xl-3 col-md-4 col-sm-6">
                                                <article class="list-product">
                                                    <div class="img-block">
                                                        <a href="single-product.html" class="thumbnail">
                                                            <img class="first-img" src="assets/images/product-image/organic/product-7.jpg" alt="" />
                                                            <img class="second-img" src="assets/images/product-image/organic/product-8.jpg" alt="" />
                                                        </a>
                                                        <div class="quick-view">
                                                            <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                                <i class="ion-ios-search-strong"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <ul class="product-flag">
                                                        <li class="new">New</li>
                                                    </ul>
                                                    <div class="product-decs">
                                                        <a class="inner-link" href="shop-4-column.html"><span>GRAPHIC CORNAR</span></a>
                                                        <h2><a href="single-product.html" class="product-link">Fila Locker Room Varsit...</a></h2>
                                                        <div class="rating-product">
                                                            <i class="ion-android-star"></i>
                                                            <i class="ion-android-star"></i>
                                                            <i class="ion-android-star"></i>
                                                            <i class="ion-android-star"></i>
                                                            <i class="ion-android-star"></i>
                                                        </div>
                                                        <div class="pricing-meta">
                                                            <ul>
                                                                <li class="old-price not-cut">€18.90</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="add-to-link">
                                                        <ul>
                                                            <li class="cart"><a class="cart-btn" href="#">ADD TO CART </a></li>
                                                            <li>
                                                                <a href="wishlist.html"><i class="ion-android-favorite-outline"></i></a>
                                                            </li>
                                                            <li>
                                                                <a href="compare.html"><i class="ion-ios-shuffle-strong"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </article>
                                            </div>
                                            <div class="col-xl-3 col-md-4 col-sm-6">
                                                <article class="list-product">
                                                    <div class="img-block">
                                                        <a href="single-product.html" class="thumbnail">
                                                            <img class="first-img" src="assets/images/product-image/organic/product-9.jpg" alt="" />
                                                            <img class="second-img" src="assets/images/product-image/organic/product-9.jpg" alt="" />
                                                        </a>
                                                        <div class="quick-view">
                                                            <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                                <i class="ion-ios-search-strong"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <ul class="product-flag">
                                                        <li class="new">New</li>
                                                    </ul>
                                                    <div class="product-decs">
                                                        <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                                                        <h2><a href="single-product.html" class="product-link">Water and Wind Resista..</a></h2>
                                                        <div class="rating-product">
                                                            <i class="ion-android-star"></i>
                                                            <i class="ion-android-star"></i>
                                                            <i class="ion-android-star"></i>
                                                            <i class="ion-android-star"></i>
                                                            <i class="ion-android-star"></i>
                                                        </div>
                                                        <div class="pricing-meta">
                                                            <ul>
                                                                <li class="old-price not-cut">€18.90</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="add-to-link">
                                                        <ul>
                                                            <li class="cart"><a class="cart-btn" href="#">ADD TO CART </a></li>
                                                            <li>
                                                                <a href="wishlist.html"><i class="ion-android-favorite-outline"></i></a>
                                                            </li>
                                                            <li>
                                                                <a href="compare.html"><i class="ion-ios-shuffle-strong"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </article>
                                            </div>
                                            <div class="col-xl-3 col-md-4 col-sm-6">
                                                <article class="list-product">
                                                    <div class="img-block">
                                                        <a href="single-product.html" class="thumbnail">
                                                            <img class="first-img" src="assets/images/product-image/organic/product-10.jpg" alt="" />
                                                            <img class="second-img" src="assets/images/product-image/organic/product-10.jpg" alt="" />
                                                        </a>
                                                        <div class="quick-view">
                                                            <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                                <i class="ion-ios-search-strong"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <ul class="product-flag">
                                                        <li class="new">New</li>
                                                    </ul>
                                                    <div class="product-decs">
                                                        <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                                                        <h2><a href="single-product.html" class="product-link">New Luxury Men's Slim Fi...</a></h2>
                                                        <div class="rating-product">
                                                            <i class="ion-android-star"></i>
                                                            <i class="ion-android-star"></i>
                                                            <i class="ion-android-star"></i>
                                                            <i class="ion-android-star"></i>
                                                            <i class="ion-android-star"></i>
                                                        </div>
                                                        <div class="pricing-meta">
                                                            <ul>
                                                                <li class="old-price not-cut">€29.90</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="add-to-link">
                                                        <ul>
                                                            <li class="cart"><a class="cart-btn" href="#">ADD TO CART </a></li>
                                                            <li>
                                                                <a href="wishlist.html"><i class="ion-android-favorite-outline"></i></a>
                                                            </li>
                                                            <li>
                                                                <a href="compare.html"><i class="ion-ios-shuffle-strong"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </article>
                                            </div>
                                            <div class="col-xl-3 col-md-4 col-sm-6">
                                                <article class="list-product">
                                                    <div class="img-block">
                                                        <a href="single-product.html" class="thumbnail">
                                                            <img class="first-img" src="assets/images/product-image/organic/product-11.jpg" alt="" />
                                                            <img class="second-img" src="assets/images/product-image/organic/product-12.jpg" alt="" />
                                                        </a>
                                                        <div class="quick-view">
                                                            <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                                <i class="ion-ios-search-strong"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <ul class="product-flag">
                                                        <li class="new">New</li>
                                                    </ul>
                                                    <div class="product-decs">
                                                        <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                                                        <h2><a href="single-product.html" class="product-link">Originals Kaval Win...</a></h2>
                                                        <div class="rating-product">
                                                            <i class="ion-android-star"></i>
                                                            <i class="ion-android-star"></i>
                                                            <i class="ion-android-star"></i>
                                                            <i class="ion-android-star"></i>
                                                            <i class="ion-android-star"></i>
                                                        </div>
                                                        <div class="pricing-meta">
                                                            <ul>
                                                                <li class="old-price">€23.90</li>
                                                                <li class="current-price">€21.51</li>
                                                                <li class="discount-price">-10%</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="add-to-link">
                                                        <ul>
                                                            <li class="cart"><a class="cart-btn" href="#">ADD TO CART </a></li>
                                                            <li>
                                                                <a href="wishlist.html"><i class="ion-android-favorite-outline"></i></a>
                                                            </li>
                                                            <li>
                                                                <a href="compare.html"><i class="ion-ios-shuffle-strong"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </article>
                                            </div>
                                            <div class="col-xl-3 col-md-4 col-sm-6">
                                                <article class="list-product">
                                                    <div class="img-block">
                                                        <a href="single-product.html" class="thumbnail">
                                                            <img class="first-img" src="assets/images/product-image/organic/product-13.jpg" alt="" />
                                                            <img class="second-img" src="assets/images/product-image/organic/product-3.jpg" alt="" />
                                                        </a>
                                                        <div class="quick-view">
                                                            <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                                <i class="ion-ios-search-strong"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <ul class="product-flag">
                                                        <li class="new">New</li>
                                                    </ul>
                                                    <div class="product-decs">
                                                        <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                                                        <h2><a href="single-product.html" class="product-link">Brixton Patrol All Terra...</a></h2>
                                                        <div class="rating-product">
                                                            <i class="ion-android-star"></i>
                                                            <i class="ion-android-star"></i>
                                                            <i class="ion-android-star"></i>
                                                            <i class="ion-android-star"></i>
                                                            <i class="ion-android-star"></i>
                                                        </div>
                                                        <div class="pricing-meta">
                                                            <ul>
                                                                <li class="old-price not-cut">€18.90</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="add-to-link">
                                                        <ul>
                                                            <li class="cart"><a class="cart-btn" href="#">ADD TO CART </a></li>
                                                            <li>
                                                                <a href="wishlist.html"><i class="ion-android-favorite-outline"></i></a>
                                                            </li>
                                                            <li>
                                                                <a href="compare.html"><i class="ion-ios-shuffle-strong"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </article>
                                            </div>
                                            <div class="col-xl-3 col-md-4 col-sm-6">
                                                <article class="list-product">
                                                    <div class="img-block">
                                                        <a href="single-product.html" class="thumbnail">
                                                            <img class="first-img" src="assets/images/product-image/organic/product-14.jpg" alt="" />
                                                            <img class="second-img" src="assets/images/product-image/organic/product-14.jpg" alt="" />
                                                        </a>
                                                        <div class="quick-view">
                                                            <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                                <i class="ion-ios-search-strong"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <ul class="product-flag">
                                                        <li class="new">New</li>
                                                    </ul>
                                                    <div class="product-decs">
                                                        <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                                                        <h2><a href="single-product.html" class="product-link">Madden by Steve Madden C...</a></h2>
                                                        <div class="rating-product">
                                                            <i class="ion-android-star"></i>
                                                            <i class="ion-android-star"></i>
                                                            <i class="ion-android-star"></i>
                                                            <i class="ion-android-star"></i>
                                                            <i class="ion-android-star"></i>
                                                        </div>
                                                        <div class="pricing-meta">
                                                            <ul>
                                                                <li class="old-price">€11.90</li>
                                                                <li class="current-price">€10.12</li>
                                                                <li class="discount-price">-15%</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="add-to-link">
                                                        <ul>
                                                            <li class="cart"><a class="cart-btn" href="#">ADD TO CART </a></li>
                                                            <li>
                                                                <a href="wishlist.html"><i class="ion-android-favorite-outline"></i></a>
                                                            </li>
                                                            <li>
                                                                <a href="compare.html"><i class="ion-ios-shuffle-strong"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </article>
                                            </div>
                                            <div class="col-xl-3 col-md-4 col-sm-6">
                                                <article class="list-product">
                                                    <div class="img-block">
                                                        <a href="single-product.html" class="thumbnail">
                                                            <img class="first-img" src="assets/images/product-image/organic/product-15.jpg" alt="" />
                                                            <img class="second-img" src="assets/images/product-image/organic/product-2.jpg" alt="" />
                                                        </a>
                                                        <div class="quick-view">
                                                            <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                                <i class="ion-ios-search-strong"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <ul class="product-flag">
                                                        <li class="new">New</li>
                                                    </ul>
                                                    <div class="product-decs">
                                                        <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                                                        <h2><a href="single-product.html" class="product-link">Juicy Couture Juicy Quilted T..</a></h2>
                                                        <div class="rating-product">
                                                            <i class="ion-android-star"></i>
                                                            <i class="ion-android-star"></i>
                                                            <i class="ion-android-star"></i>
                                                            <i class="ion-android-star"></i>
                                                            <i class="ion-android-star"></i>
                                                        </div>
                                                        <div class="pricing-meta">
                                                            <ul>
                                                                <li class="old-price">€35.90</li>
                                                                <li class="current-price">€34.11</li>
                                                                <li class="discount-price">-5%</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="add-to-link">
                                                        <ul>
                                                            <li class="cart"><a class="cart-btn" href="#">ADD TO CART </a></li>
                                                            <li>
                                                                <a href="wishlist.html"><i class="ion-android-favorite-outline"></i></a>
                                                            </li>
                                                            <li>
                                                                <a href="compare.html"><i class="ion-ios-shuffle-strong"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </article>
                                            </div>
                                            <div class="col-xl-3 col-md-4 col-sm-6">
                                                <article class="list-product">
                                                    <div class="img-block">
                                                        <a href="single-product.html" class="thumbnail">
                                                            <img class="first-img" src="assets/images/product-image/organic/product-1.jpg" alt="" />
                                                            <img class="second-img" src="assets/images/product-image/organic/product-1.jpg" alt="" />
                                                        </a>
                                                        <div class="quick-view">
                                                            <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                                <i class="ion-ios-search-strong"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <ul class="product-flag">
                                                        <li class="new">New</li>
                                                    </ul>
                                                    <div class="product-decs">
                                                        <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                                                        <h2><a href="single-product.html" class="product-link">Juicy Couture Juicy Quilted T..</a></h2>
                                                        <div class="rating-product">
                                                            <i class="ion-android-star"></i>
                                                            <i class="ion-android-star"></i>
                                                            <i class="ion-android-star"></i>
                                                            <i class="ion-android-star"></i>
                                                            <i class="ion-android-star"></i>
                                                        </div>
                                                        <div class="pricing-meta">
                                                            <ul>
                                                                <li class="old-price">€18.90</li>
                                                                <li class="current-price">€34.21</li>
                                                                <li class="discount-price">-5%</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="add-to-link">
                                                        <ul>
                                                            <li class="cart"><a class="cart-btn" href="#">ADD TO CART </a></li>
                                                            <li>
                                                                <a href="wishlist.html"><i class="ion-android-favorite-outline"></i></a>
                                                            </li>
                                                            <li>
                                                                <a href="compare.html"><i class="ion-ios-shuffle-strong"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </article>
                                            </div>
                                            <div class="col-xl-3 col-md-4 col-sm-6">
                                                <article class="list-product">
                                                    <div class="img-block">
                                                        <a href="single-product.html" class="thumbnail">
                                                            <img class="first-img" src="assets/images/product-image/organic/product-2.jpg" alt="" />
                                                            <img class="second-img" src="assets/images/product-image/organic/product-15.jpg" alt="" />
                                                        </a>
                                                        <div class="quick-view">
                                                            <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                                <i class="ion-ios-search-strong"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <ul class="product-flag">
                                                        <li class="new">New</li>
                                                    </ul>
                                                    <div class="product-decs">
                                                        <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                                                        <h2><a href="single-product.html" class="product-link">New Balance Fresh Foam Ka..</a></h2>
                                                        <div class="rating-product">
                                                            <i class="ion-android-star"></i>
                                                            <i class="ion-android-star"></i>
                                                            <i class="ion-android-star"></i>
                                                            <i class="ion-android-star"></i>
                                                            <i class="ion-android-star"></i>
                                                        </div>
                                                        <div class="pricing-meta">
                                                            <ul>
                                                                <li class="old-price">€18.90</li>
                                                                <li class="current-price">€15.12</li>
                                                                <li class="discount-price">-20%</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="add-to-link">
                                                        <ul>
                                                            <li class="cart"><a class="cart-btn" href="#">ADD TO CART </a></li>
                                                            <li>
                                                                <a href="wishlist.html"><i class="ion-android-favorite-outline"></i></a>
                                                            </li>
                                                            <li>
                                                                <a href="compare.html"><i class="ion-ios-shuffle-strong"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </article>
                                            </div>
                                            <div class="col-xl-3 col-md-4 col-sm-6">
                                                <article class="list-product">
                                                    <div class="img-block">
                                                        <a href="single-product.html" class="thumbnail">
                                                            <img class="first-img" src="assets/images/product-image/organic/product-3.jpg" alt="" />
                                                            <img class="second-img" src="assets/images/product-image/organic/product-4.jpg" alt="" />
                                                        </a>
                                                        <div class="quick-view">
                                                            <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                                <i class="ion-ios-search-strong"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <ul class="product-flag">
                                                        <li class="new">New</li>
                                                    </ul>
                                                    <div class="product-decs">
                                                        <a class="inner-link" href="shop-4-column.html"><span>GRAPHIC CORNER</span></a>
                                                        <h2><a href="single-product.html" class="product-link">Brixton Patrol All Terra...</a></h2>
                                                        <div class="rating-product">
                                                            <i class="ion-android-star"></i>
                                                            <i class="ion-android-star"></i>
                                                            <i class="ion-android-star"></i>
                                                            <i class="ion-android-star"></i>
                                                            <i class="ion-android-star"></i>
                                                        </div>
                                                        <div class="pricing-meta">
                                                            <ul>
                                                                <li class="old-price not-cut">€18.90</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="add-to-link">
                                                        <ul>
                                                            <li class="cart"><a class="cart-btn" href="#">ADD TO CART </a></li>
                                                            <li>
                                                                <a href="wishlist.html"><i class="ion-android-favorite-outline"></i></a>
                                                            </li>
                                                            <li>
                                                                <a href="compare.html"><i class="ion-ios-shuffle-strong"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </article>
                                            </div>
                                            <div class="col-xl-3 col-md-4 col-sm-6">
                                                <article class="list-product">
                                                    <div class="img-block">
                                                        <a href="single-product.html" class="thumbnail">
                                                            <img class="first-img" src="assets/images/product-image/organic/product-5.jpg" alt="" />
                                                            <img class="second-img" src="assets/images/product-image/organic/product-5.jpg" alt="" />
                                                        </a>
                                                        <div class="quick-view">
                                                            <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                                <i class="ion-ios-search-strong"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <ul class="product-flag">
                                                        <li class="new">New</li>
                                                    </ul>
                                                    <div class="product-decs">
                                                        <a class="inner-link" href="shop-4-column.html"><span>GRAPHIC CORNER</span></a>
                                                        <h2><a href="single-product.html" class="product-link">Juicy Couture Tricot Log...</a></h2>
                                                        <div class="rating-product">
                                                            <i class="ion-android-star"></i>
                                                            <i class="ion-android-star"></i>
                                                            <i class="ion-android-star"></i>
                                                            <i class="ion-android-star"></i>
                                                            <i class="ion-android-star"></i>
                                                        </div>
                                                        <div class="pricing-meta">
                                                            <ul>
                                                                <li class="old-price not-cut">€18.90</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="add-to-link">
                                                        <ul>
                                                            <li class="cart"><a class="cart-btn" href="#">ADD TO CART </a></li>
                                                            <li>
                                                                <a href="wishlist.html"><i class="ion-android-favorite-outline"></i></a>
                                                            </li>
                                                            <li>
                                                                <a href="compare.html"><i class="ion-ios-shuffle-strong"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </article>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Tab One End -->
                                    <!-- Tab Two Start -->
                                    <div id="shop-2" class="tab-pane">
                                        <div class="shop-list-wrap mb-30px scroll-zoom">
                                            <div class="row list-product m-0px">
                                                <div class="col-md-12">
                                                    <div class="row">
                                                        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                                                            <div class="left-img">
                                                                <div class="img-block">
                                                                    <a href="single-product.html" class="thumbnail">
                                                                        <img class="first-img" src="assets/images/product-image/organic/product-7.jpg" alt="" />
                                                                        <img class="second-img" src="assets/images/product-image/organic/product-8.jpg" alt="" />
                                                                    </a>
                                                                    <div class="quick-view">
                                                                        <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                                            <i class="ion-ios-search-strong"></i>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <ul class="product-flag">
                                                                    <li class="new">New</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
                                                            <div class="product-desc-wrap">
                                                                <div class="product-decs">
                                                                    <a class="inner-link" href="shop-4-column.html"><span>GRAPHIC CORNER</span></a>
                                                                    <h2><a href="single-product.html" class="product-link">Fila Locker Room Varsity Jacket</a></h2>
                                                                    <div class="rating-product">
                                                                        <i class="ion-android-star"></i>
                                                                        <i class="ion-android-star"></i>
                                                                        <i class="ion-android-star"></i>
                                                                        <i class="ion-android-star"></i>
                                                                        <i class="ion-android-star"></i>
                                                                    </div>
                                                                    <div class="pricing-meta">
                                                                        <ul>
                                                                            <li class="old-price not-cut">€9.90</li>
                                                                        </ul>
                                                                    </div>
                                                                    <div class="product-intro-info">
                                                                        <p>Create a cool and sporty look with the FILA® Locker Room Varsity Jacket.</p>
                                                                        <p>Comfortable cotton-blend fabrication.</p>
                                                                        <p>Classic varsity jacket features brand details throughout.</p>
                                                                        <p>Flat knit collar.</p>
                                                                    </div>
                                                                    <div class="in-stock">Availability: <span>299 In Stock</span></div>
                                                                </div>
                                                                <div class="add-to-link">
                                                                    <ul>
                                                                        <li class="cart"><a class="cart-btn" href="#">ADD TO CART </a></li>
                                                                        <li>
                                                                            <a href="wishlist.html"><i class="ion-android-favorite-outline"></i></a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="compare.html"><i class="ion-ios-shuffle-strong"></i></a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="shop-list-wrap mb-30px scroll-zoom">
                                            <div class="row list-product m-0px">
                                                <div class="col-md-12">
                                                    <div class="row">
                                                        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                                                            <div class="left-img">
                                                                <div class="img-block">
                                                                    <a href="single-product.html" class="thumbnail">
                                                                        <img class="first-img" src="assets/images/product-image/organic/product-5.jpg" alt="" />
                                                                        <img class="second-img" src="assets/images/product-image/organic/product-5.jpg" alt="" />
                                                                    </a>
                                                                    <div class="quick-view">
                                                                        <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                                            <i class="ion-ios-search-strong"></i>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <ul class="product-flag">
                                                                    <li class="new">New</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
                                                            <div class="product-desc-wrap">
                                                                <div class="product-decs">
                                                                    <a class="inner-link" href="shop-4-column.html"><span>GRAPHIC CORNER</span></a>
                                                                    <h2><a href="single-product.html" class="product-link">Juicy Couture Tricot Logo Stripe Jacket</a></h2>
                                                                    <div class="rating-product">
                                                                        <i class="ion-android-star"></i>
                                                                        <i class="ion-android-star"></i>
                                                                        <i class="ion-android-star"></i>
                                                                        <i class="ion-android-star"></i>
                                                                        <i class="ion-android-star"></i>
                                                                    </div>
                                                                    <div class="pricing-meta">
                                                                        <ul>
                                                                            <li class="old-price not-cut">€18.90</li>
                                                                        </ul>
                                                                    </div>
                                                                    <div class="product-intro-info">
                                                                        <p>Freshen up your look with the Juicy Couture™ Tricot Logo Stripe Jacket.</p>
                                                                        <p>Polyester fabrication flaunts stripe and brand logo detail at sleeves.</p>
                                                                        <p>Stand collar.</p>
                                                                        <p>Front-zipper closure.</p>
                                                                        <p>100% polyester.</p>
                                                                    </div>
                                                                    <div class="in-stock">Availability: <span>300 In Stock</span></div>
                                                                </div>
                                                                <div class="add-to-link">
                                                                    <ul>
                                                                        <li class="cart"><a class="cart-btn" href="#">ADD TO CART </a></li>
                                                                        <li>
                                                                            <a href="wishlist.html"><i class="ion-android-favorite-outline"></i></a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="compare.html"><i class="ion-ios-shuffle-strong"></i></a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="shop-list-wrap mb-30px scroll-zoom">
                                            <div class="row list-product m-0px">
                                                <div class="col-md-12">
                                                    <div class="row">
                                                        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                                                            <div class="left-img">
                                                                <div class="img-block">
                                                                    <a href="single-product.html" class="thumbnail">
                                                                        <img class="first-img" src="assets/images/product-image/organic/product-19.jpg" alt="" />
                                                                        <img class="second-img" src="assets/images/product-image/organic/product-20.jpg" alt="" />
                                                                    </a>
                                                                    <div class="quick-view">
                                                                        <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                                            <i class="ion-ios-search-strong"></i>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <ul class="product-flag">
                                                                    <li class="new">New</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
                                                            <div class="product-desc-wrap">
                                                                <div class="product-decs">
                                                                    <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                                                                    <h2><a href="single-product.html" class="product-link">New Balance Fresh Foam LAZR v1 Sport</a></h2>
                                                                    <div class="rating-product">
                                                                        <i class="ion-android-star"></i>
                                                                        <i class="ion-android-star"></i>
                                                                        <i class="ion-android-star"></i>
                                                                        <i class="ion-android-star"></i>
                                                                        <i class="ion-android-star"></i>
                                                                    </div>
                                                                    <div class="pricing-meta">
                                                                        <ul>
                                                                            <li class="old-price not-cut">€18.90</li>
                                                                        </ul>
                                                                    </div>
                                                                    <div class="product-intro-info">
                                                                        <p>The New Balance® Fresh Foam LAZR v1 Sport running shoe gives you total focus on the road with its precision-engineered design.</p>
                                                                        <p>Predecessor: None.</p>
                                                                        <p>Support Type: Neutral.</p>
                                                                        <p>Flat knit collar.</p>
                                                                        <p>Cushioning: Minimal feel with extreme flexibility.</p>
                                                                    </div>
                                                                    <div class="in-stock">Availability: <span>300 In Stock</span></div>
                                                                </div>
                                                                <div class="add-to-link">
                                                                    <ul>
                                                                        <li class="cart"><a class="cart-btn" href="#">ADD TO CART </a></li>
                                                                        <li>
                                                                            <a href="wishlist.html"><i class="ion-android-favorite-outline"></i></a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="compare.html"><i class="ion-ios-shuffle-strong"></i></a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="shop-list-wrap mb-30px scroll-zoom">
                                            <div class="row list-product m-0px">
                                                <div class="col-md-12">
                                                    <div class="row">
                                                        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                                                            <div class="left-img">
                                                                <div class="img-block">
                                                                    <a href="single-product.html" class="thumbnail">
                                                                        <img class="first-img" src="assets/images/product-image/organic/product-18.jpg" alt="" />
                                                                        <img class="second-img" src="assets/images/product-image/organic/product-18.jpg" alt="" />
                                                                    </a>
                                                                    <div class="quick-view">
                                                                        <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                                            <i class="ion-ios-search-strong"></i>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <ul class="product-flag">
                                                                    <li class="new">New</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
                                                            <div class="product-desc-wrap">
                                                                <div class="product-decs">
                                                                    <a class="inner-link" href="shop-4-column.html"><span>GRAPHIC CORNER</span></a>
                                                                    <h2><a href="single-product.html" class="product-link">Juicy Couture Solid Sleeve Puffer Jacket</a></h2>
                                                                    <div class="rating-product">
                                                                        <i class="ion-android-star"></i>
                                                                        <i class="ion-android-star"></i>
                                                                        <i class="ion-android-star"></i>
                                                                        <i class="ion-android-star"></i>
                                                                        <i class="ion-android-star"></i>
                                                                    </div>
                                                                    <div class="pricing-meta">
                                                                        <ul>
                                                                            <li class="old-price not-cut">€18.90</li>
                                                                        </ul>
                                                                    </div>
                                                                    <div class="product-intro-info">
                                                                        <p>Stay toasty with this Juicy Couture™ Solid Sleeve Puffer Jacket!</p>
                                                                        <p>Stand collar.</p>
                                                                        <p>Long sleeves.</p>
                                                                        <p>100% polyester;</p>
                                                                        <p>Lining: 100% polyester;</p>
                                                                        <p>Filling: 100% polyester.</p>
                                                                    </div>
                                                                    <div class="in-stock">Availability: <span>299 In Stock</span></div>
                                                                </div>
                                                                <div class="add-to-link">
                                                                    <ul>
                                                                        <li class="cart"><a class="cart-btn" href="#">ADD TO CART </a></li>
                                                                        <li>
                                                                            <a href="wishlist.html"><i class="ion-android-favorite-outline"></i></a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="compare.html"><i class="ion-ios-shuffle-strong"></i></a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="shop-list-wrap mb-30px scroll-zoom">
                                            <div class="row list-product m-0px">
                                                <div class="col-md-12">
                                                    <div class="row">
                                                        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                                                            <div class="left-img">
                                                                <div class="img-block">
                                                                    <a href="single-product.html" class="thumbnail">
                                                                        <img class="first-img" src="assets/images/product-image/organic/product-23.jpg" alt="" />
                                                                        <img class="second-img" src="assets/images/product-image/organic/product-22.jpg" alt="" />
                                                                    </a>
                                                                    <div class="quick-view">
                                                                        <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                                            <i class="ion-ios-search-strong"></i>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <ul class="product-flag">
                                                                    <li class="new">New</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
                                                            <div class="product-desc-wrap">
                                                                <div class="product-decs">
                                                                    <a class="inner-link" href="shop-4-column.html"><span>GRAPHIC CORNER</span></a>
                                                                    <h2><a href="single-product.html" class="product-link">New Balance Fresh Foam Kaymin</a></h2>
                                                                    <div class="rating-product">
                                                                        <i class="ion-android-star"></i>
                                                                        <i class="ion-android-star"></i>
                                                                        <i class="ion-android-star"></i>
                                                                        <i class="ion-android-star"></i>
                                                                        <i class="ion-android-star"></i>
                                                                    </div>
                                                                    <div class="pricing-meta">
                                                                        <ul>
                                                                            <li class="old-price">€18.90</li>
                                                                            <li class="current-price">€15.12</li>
                                                                            <li class="discount-price">-20%</li>
                                                                        </ul>
                                                                    </div>
                                                                    <div class="product-intro-info">
                                                                        <p>Increase your distance with the superior cushioning of the Fresh Foam Kaymin running shoe from New Balance®.</p>
                                                                        <p>Predecessor: None.</p>
                                                                        <p>Support Type: Neutral.</p>
                                                                        <p>Cushioning: High energizing cushioning.</p>
                                                                    </div>
                                                                    <div class="in-stock">Availability: <span>298 In Stock</span></div>
                                                                </div>
                                                                <div class="add-to-link">
                                                                    <ul>
                                                                        <li class="cart"><a class="cart-btn" href="#">ADD TO CART </a></li>
                                                                        <li>
                                                                            <a href="wishlist.html"><i class="ion-android-favorite-outline"></i></a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="compare.html"><i class="ion-ios-shuffle-strong"></i></a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="shop-list-wrap mb-30px scroll-zoom">
                                            <div class="row list-product m-0px">
                                                <div class="col-md-12">
                                                    <div class="row">
                                                        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                                                            <div class="left-img">
                                                                <div class="img-block">
                                                                    <a href="single-product.html" class="thumbnail">
                                                                        <img class="first-img" src="assets/images/product-image/organic/product-9.jpg" alt="" />
                                                                        <img class="second-img" src="assets/images/product-image/organic/product-9.jpg" alt="" />
                                                                    </a>
                                                                    <div class="quick-view">
                                                                        <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                                            <i class="ion-ios-search-strong"></i>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <ul class="product-flag">
                                                                    <li class="new">New</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
                                                            <div class="product-desc-wrap">
                                                                <div class="product-decs">
                                                                    <a class="inner-link" href="shop-4-column.html"><span>GRAPHIC CORNER</span></a>
                                                                    <h2><a href="single-product.html" class="product-link">Water and Wind Resistant Insulated Jacket</a></h2>
                                                                    <div class="rating-product">
                                                                        <i class="ion-android-star"></i>
                                                                        <i class="ion-android-star"></i>
                                                                        <i class="ion-android-star"></i>
                                                                        <i class="ion-android-star"></i>
                                                                        <i class="ion-android-star"></i>
                                                                    </div>
                                                                    <div class="pricing-meta">
                                                                        <ul>
                                                                            <li class="old-price not-cut">€11.90</li>
                                                                        </ul>
                                                                    </div>
                                                                    <div class="product-intro-info">
                                                                        <p>Stay ready for a change in weather with the IZOD® Water and Wind Resistant Insulated Jacket.</p>
                                                                        <p>Water-resistant jacket keeps you warm and dry.</p>
                                                                        <p>Stand collar features an attached hood.</p>
                                                                        <p>Front-zip closure.</p>
                                                                    </div>
                                                                    <div class="in-stock">Availability: <span>291 In Stock</span></div>
                                                                </div>
                                                                <div class="add-to-link">
                                                                    <ul>
                                                                        <li class="cart"><a class="cart-btn" href="#">ADD TO CART </a></li>
                                                                        <li>
                                                                            <a href="wishlist.html"><i class="ion-android-favorite-outline"></i></a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="compare.html"><i class="ion-ios-shuffle-strong"></i></a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="shop-list-wrap mb-30px scroll-zoom">
                                            <div class="row list-product m-0px">
                                                <div class="col-md-12">
                                                    <div class="row">
                                                        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                                                            <div class="left-img">
                                                                <div class="img-block">
                                                                    <a href="single-product.html" class="thumbnail">
                                                                        <img class="first-img" src="assets/images/product-image/organic/product-16.jpg" alt="" />
                                                                        <img class="second-img" src="assets/images/product-image/organic/product-17.jpg" alt="" />
                                                                    </a>
                                                                    <div class="quick-view">
                                                                        <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                                            <i class="ion-ios-search-strong"></i>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <ul class="product-flag">
                                                                    <li class="new">New</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
                                                            <div class="product-desc-wrap">
                                                                <div class="product-decs">
                                                                    <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                                                                    <h2><a href="single-product.html" class="product-link">Trans-Weight Hooded Wind and Water Resistant Shell</a></h2>
                                                                    <div class="rating-product">
                                                                        <i class="ion-android-star"></i>
                                                                        <i class="ion-android-star"></i>
                                                                        <i class="ion-android-star"></i>
                                                                        <i class="ion-android-star"></i>
                                                                        <i class="ion-android-star-half"></i>
                                                                    </div>
                                                                    <div class="pricing-meta">
                                                                        <ul>
                                                                            <li class="old-price not-cut">€11.90</li>
                                                                        </ul>
                                                                    </div>
                                                                    <div class="product-intro-info">
                                                                        <p>Keep the elements away and warmth priority number one in this Nautica® Trans-Weight Hooded Wind and Water Resistant Shell.</p>
                                                                        <p>Hooded collar with a high collar for maximum coverage.</p>
                                                                        <p>Long sleeves with banded collars.</p>
                                                                        <p>Zip front closure.</p>
                                                                    </div>
                                                                    <div class="in-stock">Availability: <span>299 In Stock</span></div>
                                                                </div>
                                                                <div class="add-to-link">
                                                                    <ul>
                                                                        <li class="cart"><a class="cart-btn" href="#">ADD TO CART </a></li>
                                                                        <li>
                                                                            <a href="wishlist.html"><i class="ion-android-favorite-outline"></i></a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="compare.html"><i class="ion-ios-shuffle-strong"></i></a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="shop-list-wrap mb-30px scroll-zoom">
                                            <div class="row list-product m-0px">
                                                <div class="col-md-12">
                                                    <div class="row">
                                                        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                                                            <div class="left-img">
                                                                <div class="img-block">
                                                                    <a href="single-product.html" class="thumbnail">
                                                                        <img class="first-img" src="assets/images/product-image/organic/product-14.jpg" alt="" />
                                                                        <img class="second-img" src="assets/images/product-image/organic/product-14.jpg" alt="" />
                                                                    </a>
                                                                    <div class="quick-view">
                                                                        <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                                            <i class="ion-ios-search-strong"></i>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <ul class="product-flag">
                                                                    <li class="new">New</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
                                                            <div class="product-desc-wrap">
                                                                <div class="product-decs">
                                                                    <a class="inner-link" href="shop-4-column.html"><span>GRAPHIC CORNER</span></a>
                                                                    <h2><a href="single-product.html" class="product-link">Madden by Steve Madden Cale 6</a></h2>
                                                                    <div class="rating-product">
                                                                        <i class="ion-android-star"></i>
                                                                        <i class="ion-android-star"></i>
                                                                        <i class="ion-android-star"></i>
                                                                        <i class="ion-android-star"></i>
                                                                        <i class="ion-android-star"></i>
                                                                    </div>
                                                                    <div class="pricing-meta">
                                                                        <ul>
                                                                            <li class="old-price">€19.90</li>
                                                                            <li class="current-price">€10.12</li>
                                                                            <li class="discount-price">-15%</li>
                                                                        </ul>
                                                                    </div>
                                                                    <div class="product-intro-info">
                                                                        <p>No one can deny your sleek style with these handsome Madden by Steve Madden® Cale 6 oxfords.</p>
                                                                        <p>Man-made upper features a plain toe.</p>
                                                                        <p>Lace-up closure.</p>
                                                                        <p>Man-made lining.</p>
                                                                    </div>
                                                                    <div class="in-stock">Availability: <span>299 In Stock</span></div>
                                                                </div>
                                                                <div class="add-to-link">
                                                                    <ul>
                                                                        <li class="cart"><a class="cart-btn" href="#">ADD TO CART </a></li>
                                                                        <li>
                                                                            <a href="wishlist.html"><i class="ion-android-favorite-outline"></i></a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="compare.html"><i class="ion-ios-shuffle-strong"></i></a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="shop-list-wrap mb-30px scroll-zoom">
                                            <div class="row list-product m-0px">
                                                <div class="col-md-12">
                                                    <div class="row">
                                                        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                                                            <div class="left-img">
                                                                <div class="img-block">
                                                                    <a href="single-product.html" class="thumbnail">
                                                                        <img class="first-img" src="assets/images/product-image/organic/product-15.jpg" alt="" />
                                                                        <img class="second-img" src="assets/images/product-image/organic/product-22.jpg" alt="" />
                                                                    </a>
                                                                    <div class="quick-view">
                                                                        <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                                            <i class="ion-ios-search-strong"></i>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <ul class="product-flag">
                                                                    <li class="new">New</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
                                                            <div class="product-desc-wrap">
                                                                <div class="product-decs">
                                                                    <a class="inner-link" href="shop-4-column.html"><span>GRAPHIC CORNER</span></a>
                                                                    <h2><a href="single-product.html" class="product-link">Calvin Klein Jeans Reflective Logo Full Zip</a></h2>
                                                                    <div class="rating-product">
                                                                        <i class="ion-android-star"></i>
                                                                        <i class="ion-android-star"></i>
                                                                        <i class="ion-android-star"></i>
                                                                        <i class="ion-android-star"></i>
                                                                        <i class="ion-android-star"></i>
                                                                    </div>
                                                                    <div class="pricing-meta">
                                                                        <ul>
                                                                            <li class="old-price not-cut">€29.00</li>
                                                                        </ul>
                                                                    </div>
                                                                    <div class="product-intro-info">
                                                                        <p>Calvin Klein® Jeans hoodie with reflective logo detailing at the sleeves.</p>
                                                                        <p>Sweatshirt crafted in a soft-knit fabric for superior comfort.</p>
                                                                        <p>Drawstring hood.</p>
                                                                        <p>Long sleeves.</p>
                                                                        <p>Full-zip front.</p>
                                                                    </div>
                                                                    <div class="in-stock">Availability: <span>300 In Stock</span></div>
                                                                </div>
                                                                <div class="add-to-link">
                                                                    <ul>
                                                                        <li class="cart"><a class="cart-btn" href="#">ADD TO CART </a></li>
                                                                        <li>
                                                                            <a href="wishlist.html"><i class="ion-android-favorite-outline"></i></a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="compare.html"><i class="ion-ios-shuffle-strong"></i></a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="shop-list-wrap mb-30px scroll-zoom">
                                            <div class="row list-product m-0px">
                                                <div class="col-md-12">
                                                    <div class="row">
                                                        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                                                            <div class="left-img">
                                                                <div class="img-block">
                                                                    <a href="single-product.html" class="thumbnail">
                                                                        <img class="first-img" src="assets/images/product-image/organic/product-6.jpg" alt="" />
                                                                        <img class="second-img" src="assets/images/product-image/organic/product-6.jpg" alt="" />
                                                                    </a>
                                                                    <div class="quick-view">
                                                                        <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                                            <i class="ion-ios-search-strong"></i>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <ul class="product-flag">
                                                                    <li class="new">New</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
                                                            <div class="product-desc-wrap">
                                                                <div class="product-decs">
                                                                    <a class="inner-link" href="shop-4-column.html"><span>GRAPHIC CORNER</span></a>
                                                                    <h2><a href="single-product.html" class="product-link">New Balance Arishi Sport v1</a></h2>
                                                                    <div class="rating-product">
                                                                        <i class="ion-android-star"></i>
                                                                        <i class="ion-android-star"></i>
                                                                        <i class="ion-android-star"></i>
                                                                        <i class="ion-android-star"></i>
                                                                        <i class="ion-android-star"></i>
                                                                    </div>
                                                                    <div class="pricing-meta">
                                                                        <ul>
                                                                            <li class="old-price not-cut">€29.00</li>
                                                                        </ul>
                                                                    </div>
                                                                    <div class="product-intro-info">
                                                                        <p>Break old records and make new goals in the New Balance® Arishi Sport v1.</p>
                                                                        <p>Predecessor: None.</p>
                                                                        <p>Support Type: Neutral.</p>
                                                                        <p>Cushioning: High energizing cushioning.</p>
                                                                    </div>
                                                                    <div class="in-stock">Availability: <span>899 In Stock</span></div>
                                                                </div>
                                                                <div class="add-to-link">
                                                                    <ul>
                                                                        <li class="cart"><a class="cart-btn" href="#">ADD TO CART </a></li>
                                                                        <li>
                                                                            <a href="wishlist.html"><i class="ion-android-favorite-outline"></i></a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="compare.html"><i class="ion-ios-shuffle-strong"></i></a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="shop-list-wrap mb-30px scroll-zoom">
                                            <div class="row list-product m-0px">
                                                <div class="col-md-12">
                                                    <div class="row">
                                                        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                                                            <div class="left-img">
                                                                <div class="img-block">
                                                                    <a href="single-product.html" class="thumbnail">
                                                                        <img class="first-img" src="assets/images/product-image/organic/product-3.jpg" alt="" />
                                                                        <img class="second-img" src="assets/images/product-image/organic/product-4.jpg" alt="" />
                                                                    </a>
                                                                    <div class="quick-view">
                                                                        <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                                            <i class="ion-ios-search-strong"></i>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <ul class="product-flag">
                                                                    <li class="new">New</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
                                                            <div class="product-desc-wrap">
                                                                <div class="product-decs">
                                                                    <a class="inner-link" href="shop-4-column.html"><span>GRAPHIC CORNER</span></a>
                                                                    <h2><a href="single-product.html" class="product-link">Brixton Patrol All Terrain Anorak Jacket</a></h2>
                                                                    <div class="rating-product">
                                                                        <i class="ion-android-star"></i>
                                                                        <i class="ion-android-star"></i>
                                                                        <i class="ion-android-star"></i>
                                                                        <i class="ion-android-star"></i>
                                                                        <i class="ion-android-star"></i>
                                                                    </div>
                                                                    <div class="pricing-meta">
                                                                        <ul>
                                                                            <li class="old-price not-cut">€29.00</li>
                                                                        </ul>
                                                                    </div>
                                                                    <div class="product-intro-info">
                                                                        <p>Whether you're exploring the woods or the city, the Brixton™ Patrol All Terrain Anorak Jacket has got you covered.</p>
                                                                        <p>Camo jacket crafted from 4.5 oz nylon ripstop with two-way stretch, and a water-repellent coating.</p>
                                                                        <p>Drawstring hood.</p>
                                                                    </div>
                                                                    <div class="in-stock">Availability: <span>899 In Stock</span></div>
                                                                </div>
                                                                <div class="add-to-link">
                                                                    <ul>
                                                                        <li class="cart"><a class="cart-btn" href="#">ADD TO CART </a></li>
                                                                        <li>
                                                                            <a href="wishlist.html"><i class="ion-android-favorite-outline"></i></a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="compare.html"><i class="ion-ios-shuffle-strong"></i></a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="shop-list-wrap mb-30px scroll-zoom">
                                            <div class="row list-product m-0px">
                                                <div class="col-md-12">
                                                    <div class="row">
                                                        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                                                            <div class="left-img">
                                                                <div class="img-block">
                                                                    <a href="single-product.html" class="thumbnail">
                                                                        <img class="first-img" src="assets/images/product-image/organic/product-1.jpg" alt="" />
                                                                        <img class="second-img" src="assets/images/product-image/organic/product-1.jpg" alt="" />
                                                                    </a>
                                                                    <div class="quick-view">
                                                                        <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                                            <i class="ion-ios-search-strong"></i>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <ul class="product-flag">
                                                                    <li class="new">New</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
                                                            <div class="product-desc-wrap">
                                                                <div class="product-decs">
                                                                    <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                                                                    <h2><a href="single-product.html" class="product-link">Juicy Couture Juicy Quilted Terry Track Jacket</a></h2>
                                                                    <div class="rating-product">
                                                                        <i class="ion-android-star"></i>
                                                                        <i class="ion-android-star"></i>
                                                                        <i class="ion-android-star"></i>
                                                                        <i class="ion-android-star"></i>
                                                                        <i class="ion-android-star"></i>
                                                                    </div>
                                                                    <div class="pricing-meta">
                                                                        <ul>
                                                                            <li class="old-price">€35.90</li>
                                                                            <li class="current-price">€34.12</li>
                                                                            <li class="discount-price">-5%</li>
                                                                        </ul>
                                                                    </div>
                                                                    <div class="product-intro-info">
                                                                        <p>Score extra points when it comes to your sporty look with the Juicy Couture™ Juicy Quilted Terry Track Jacket.</p>
                                                                        <p>Soft terry construction in a quilted design.</p>
                                                                        <p>Front zipper closure.</p>
                                                                        <p>61% cotton, 39% polyester;</p>
                                                                        <p>Lining: 58% cotton, 42% polyester.</p>
                                                                    </div>
                                                                    <div class="in-stock">Availability: <span>1189 In Stock</span></div>
                                                                </div>
                                                                <div class="add-to-link">
                                                                    <ul>
                                                                        <li class="cart"><a class="cart-btn" href="#">ADD TO CART </a></li>
                                                                        <li>
                                                                            <a href="wishlist.html"><i class="ion-android-favorite-outline"></i></a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="compare.html"><i class="ion-ios-shuffle-strong"></i></a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="shop-list-wrap mb-30px scroll-zoom">
                                            <div class="row list-product m-0px">
                                                <div class="col-md-12">
                                                    <div class="row">
                                                        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                                                            <div class="left-img">
                                                                <div class="img-block">
                                                                    <a href="single-product.html" class="thumbnail">
                                                                        <img class="first-img" src="assets/images/product-image/organic/product-11.jpg" alt="" />
                                                                        <img class="second-img" src="assets/images/product-image/organic/product-12.jpg" alt="" />
                                                                    </a>
                                                                    <div class="quick-view">
                                                                        <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                                            <i class="ion-ios-search-strong"></i>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <ul class="product-flag">
                                                                    <li class="new">New</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
                                                            <div class="product-desc-wrap">
                                                                <div class="product-decs">
                                                                    <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                                                                    <h2><a href="single-product.html" class="product-link">Originals Kaval Windbreaker Winter Jacket</a></h2>
                                                                    <div class="rating-product">
                                                                        <i class="ion-android-star"></i>
                                                                        <i class="ion-android-star"></i>
                                                                        <i class="ion-android-star"></i>
                                                                        <i class="ion-android-star"></i>
                                                                        <i class="ion-android-star"></i>
                                                                    </div>
                                                                    <div class="pricing-meta">
                                                                        <ul>
                                                                            <li class="old-price">€23.90</li>
                                                                            <li class="current-price">€21.51</li>
                                                                            <li class="discount-price">-10%</li>
                                                                        </ul>
                                                                    </div>
                                                                    <div class="product-intro-info">
                                                                        <p>Block out the haters with the fresh adidas® Originals Kaval Windbreaker Jacket.</p>
                                                                        <p>Part of the Kaval Collection.</p>
                                                                        <p>Regular fit is eased, but not sloppy, and perfect for any activity.</p>
                                                                        <p>Plain-woven jacket specifically constructed for freedom of movement.</p>
                                                                    </div>
                                                                    <div class="in-stock">Availability: <span>299 In Stock</span></div>
                                                                </div>
                                                                <div class="add-to-link">
                                                                    <ul>
                                                                        <li class="cart"><a class="cart-btn" href="#">ADD TO CART </a></li>
                                                                        <li>
                                                                            <a href="wishlist.html"><i class="ion-android-favorite-outline"></i></a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="compare.html"><i class="ion-ios-shuffle-strong"></i></a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="shop-list-wrap mb-30px scroll-zoom">
                                            <div class="row list-product m-0px">
                                                <div class="col-md-12">
                                                    <div class="row">
                                                        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                                                            <div class="left-img">
                                                                <div class="img-block">
                                                                    <a href="single-product.html" class="thumbnail">
                                                                        <img class="first-img" src="assets/images/product-image/organic/product-10.jpg" alt="" />
                                                                        <img class="second-img" src="assets/images/product-image/organic/product-10.jpg" alt="" />
                                                                    </a>
                                                                    <div class="quick-view">
                                                                        <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                                            <i class="ion-ios-search-strong"></i>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <ul class="product-flag">
                                                                    <li class="new">New</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
                                                            <div class="product-desc-wrap">
                                                                <div class="product-decs">
                                                                    <a class="inner-link" href="shop-4-column.html"><span>GRAPHIC CORNER</span></a>
                                                                    <h2><a href="single-product.html" class="product-link">New Luxury Men's Slim Fit Shirt Short Sleeve...</a></h2>
                                                                    <div class="rating-product">
                                                                        <i class="ion-android-star"></i>
                                                                        <i class="ion-android-star"></i>
                                                                        <i class="ion-android-star"></i>
                                                                        <i class="ion-android-star"></i>
                                                                        <i class="ion-android-star"></i>
                                                                    </div>
                                                                    <div class="pricing-meta">
                                                                        <ul>
                                                                            <li class="old-price not-cut">€29.00</li>
                                                                        </ul>
                                                                    </div>
                                                                    <div class="product-intro-info">
                                                                        <p>Break old records and make new goals in the New Balance® Arishi Sport v1.</p>
                                                                        <p>Predecessor: None.</p>
                                                                        <p>Support Type: Neutral.</p>
                                                                        <p>Cushioning: High energizing cushioning.</p>
                                                                    </div>
                                                                    <div class="in-stock">Availability: <span>397 In Stock</span></div>
                                                                </div>
                                                                <div class="add-to-link">
                                                                    <ul>
                                                                        <li class="cart"><a class="cart-btn" href="#">ADD TO CART </a></li>
                                                                        <li>
                                                                            <a href="wishlist.html"><i class="ion-android-favorite-outline"></i></a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="compare.html"><i class="ion-ios-shuffle-strong"></i></a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="shop-list-wrap mb-30px scroll-zoom">
                                            <div class="row list-product m-0px">
                                                <div class="col-md-12">
                                                    <div class="row">
                                                        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                                                            <div class="left-img">
                                                                <div class="img-block">
                                                                    <a href="single-product.html" class="thumbnail">
                                                                        <img class="first-img" src="assets/images/product-image/organic/product-4.jpg" alt="" />
                                                                        <img class="second-img" src="assets/images/product-image/organic/product-4.jpg" alt="" />
                                                                    </a>
                                                                    <div class="quick-view">
                                                                        <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                                            <i class="ion-ios-search-strong"></i>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <ul class="product-flag">
                                                                    <li class="new">New</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
                                                            <div class="product-desc-wrap">
                                                                <div class="product-decs">
                                                                    <a class="inner-link" href="shop-4-column.html"><span>GRAPHIC CORNER</span></a>
                                                                    <h2><a href="single-product.html" class="product-link">Brixton Patrol All Terrain Anorak Jacket 2</a></h2>
                                                                    <div class="rating-product">
                                                                        <i class="ion-android-star"></i>
                                                                        <i class="ion-android-star"></i>
                                                                        <i class="ion-android-star"></i>
                                                                        <i class="ion-android-star"></i>
                                                                        <i class="ion-android-star"></i>
                                                                    </div>
                                                                    <div class="pricing-meta">
                                                                        <ul>
                                                                            <li class="old-price not-cut">€29.00</li>
                                                                        </ul>
                                                                    </div>
                                                                    <div class="product-intro-info">
                                                                        <p>Whether you're exploring the woods or the city, the Brixton™ Patrol All Terrain Anorak Jacket has got you covered.</p>
                                                                        <p>Camo jacket crafted from 4.5 oz nylon ripstop with two-way stretch, and a water-repellent coating.</p>
                                                                        <p>Drawstring hood.</p>
                                                                    </div>
                                                                    <div class="in-stock">Availability: <span>400 In Stock</span></div>
                                                                </div>
                                                                <div class="add-to-link">
                                                                    <ul>
                                                                        <li class="cart"><a class="cart-btn" href="#">ADD TO CART </a></li>
                                                                        <li>
                                                                            <a href="wishlist.html"><i class="ion-android-favorite-outline"></i></a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="compare.html"><i class="ion-ios-shuffle-strong"></i></a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="shop-list-wrap scroll-zoom">
                                            <div class="row list-product m-0px">
                                                <div class="col-md-12">
                                                    <div class="row">
                                                        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                                                            <div class="left-img">
                                                                <div class="img-block">
                                                                    <a href="single-product.html" class="thumbnail">
                                                                        <img class="first-img" src="assets/images/product-image/organic/product-15.jpg" alt="" />
                                                                        <img class="second-img" src="assets/images/product-image/organic/product-15.jpg" alt="" />
                                                                    </a>
                                                                    <div class="quick-view">
                                                                        <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                                            <i class="ion-ios-search-strong"></i>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <ul class="product-flag">
                                                                    <li class="new">New</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
                                                            <div class="product-desc-wrap">
                                                                <div class="product-decs">
                                                                    <a class="inner-link" href="shop-4-column.html"><span>GRAPHIC CORNER</span></a>
                                                                    <h2><a href="single-product.html" class="product-link">Juicy Couture Juicy Quilted Terry Track Jacket 2</a></h2>
                                                                    <div class="rating-product">
                                                                        <i class="ion-android-star"></i>
                                                                        <i class="ion-android-star"></i>
                                                                        <i class="ion-android-star"></i>
                                                                        <i class="ion-android-star"></i>
                                                                        <i class="ion-android-star"></i>
                                                                    </div>
                                                                    <div class="pricing-meta">
                                                                        <ul>
                                                                            <li class="old-price">€35.90</li>
                                                                            <li class="current-price">€34.11</li>
                                                                            <li class="discount-price">-5%</li>
                                                                        </ul>
                                                                    </div>
                                                                    <div class="product-intro-info">
                                                                        <p>Score extra points when it comes to your sporty look with the Juicy Couture™ Juicy Quilted Terry Track Jacket.</p>
                                                                        <p>Soft terry construction in a quilted design.</p>
                                                                        <p>Front zipper closure.</p>
                                                                        <p>61% cotton, 39% polyester;</p>
                                                                        <p>Lining: 58% cotton, 42% polyester.</p>
                                                                    </div>
                                                                    <div class="in-stock">Availability: <span>199 In Stock</span></div>
                                                                </div>
                                                                <div class="add-to-link">
                                                                    <ul>
                                                                        <li class="cart"><a class="cart-btn" href="#">ADD TO CART </a></li>
                                                                        <li>
                                                                            <a href="wishlist.html"><i class="ion-android-favorite-outline"></i></a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="compare.html"><i class="ion-ios-shuffle-strong"></i></a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Tab Two End -->
                                </div>
                                <!-- Shop Tab Content End -->
                                <!--  Pagination Area Start -->
                                <div class="pro-pagination-style text-center">
                                    <ul>
                                        <li>
                                            <a class="prev" href="#"><i class="ion-ios-arrow-left"></i></a>
                                        </li>
                                        <li><a class="active" href="#">1</a></li>
                                        <li><a href="#">2</a></li>
                                        <li>
                                            <a class="next" href="#"><i class="ion-ios-arrow-right"></i></a>
                                        </li>
                                    </ul>
                                </div>
                                <!--  Pagination Area End -->
                            </div>
                            <!-- Shop Bottom Area End -->
                        </div>
                        <!-- Sidebar Area Start -->
                        <div class="col-lg-3 order-lg-first col-md-12 order-md-last mb-res-md-60px mb-res-sm-60px">
                            <div class="left-sidebar">
                                <div class="sidebar-heading">
                                    <div class="main-heading">
                                        <h2>Filter By</h2>
                                    </div>
                                    <!-- Sidebar single item -->
                                    <div class="sidebar-widget">
                                        <h4 class="pro-sidebar-title">Categories</h4>
                                        <div class="sidebar-widget-list">
                                            <ul>
                                                <li>
                                                    <div class="sidebar-widget-list-left">
                                                        <input type="checkbox" /> <a href="#">Fresh Fruit<span>(17)</span> </a>
                                                        <span class="checkmark"></span>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="sidebar-widget-list-left">
                                                        <input type="checkbox" value="" /> <a href="#">Fresh Vegetables <span>(17)</span></a>
                                                        <span class="checkmark"></span>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="sidebar-widget-list-left">
                                                        <input type="checkbox" value="" /> <a href="#">Fresh Salad & Dips<span>(17)</span> </a>
                                                        <span class="checkmark"></span>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="sidebar-widget-list-left">
                                                        <input type="checkbox" value="" /> <a href="#">Milk,Butter & Eggs<span>(17)</span> </a>
                                                        <span class="checkmark"></span>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- Sidebar single item -->
                                </div>
                                <!-- Sidebar single item -->
                                <div class="sidebar-widget mt-20">
                                    <h4 class="pro-sidebar-title">Price</h4>
                                    <div class="price-filter mt-10">
                                        <div class="price-slider-amount">
                                            <input type="text" id="amount" name="price" placeholder="Add Your Price" />
                                        </div>
                                        <div id="slider-range"></div>
                                    </div>
                                </div>
                                <!-- Sidebar single item -->
                                <div class="sidebar-widget mt-30">
                                    <h4 class="pro-sidebar-title">Size</h4>
                                    <div class="sidebar-widget-list">
                                        <ul>
                                            <li>
                                                <div class="sidebar-widget-list-left">
                                                    <input type="checkbox" /> <a href="#">X<span>(4)</span> </a>
                                                    <span class="checkmark"></span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="sidebar-widget-list-left">
                                                    <input type="checkbox" value="" /> <a href="#">M<span>(4)</span></a>
                                                    <span class="checkmark"></span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="sidebar-widget-list-left">
                                                    <input type="checkbox" value="" /> <a href="#">L<span>(4)</span> </a>
                                                    <span class="checkmark"></span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="sidebar-widget-list-left">
                                                    <input type="checkbox" value="" /> <a href="#">XL<span>(4)</span> </a>
                                                    <span class="checkmark"></span>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- Sidebar single item -->
                                <div class="sidebar-widget no-cba mt-20">
                                    <h4 class="pro-sidebar-title">Colour</h4>
                                    <div class="sidebar-widget-list">
                                        <ul>
                                            <li>
                                                <div class="sidebar-widget-list-left">
                                                    <input type="checkbox" /> <a href="#">Grey<span>(2)</span> </a>
                                                    <span class="checkmark grey"></span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="sidebar-widget-list-left">
                                                    <input type="checkbox" value="" /> <a href="#">White<span>(4)</span></a>
                                                    <span class="checkmark white"></span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="sidebar-widget-list-left">
                                                    <input type="checkbox" value="" /> <a href="#">Black<span>(4)</span> </a>
                                                    <span class="checkmark black"></span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="sidebar-widget-list-left">
                                                    <input type="checkbox" value="" /> <a href="#">Camel<span>(4)</span> </a>
                                                    <span class="checkmark camel"></span>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- Sidebar single item -->
                                <div class="sidebar-widget mt-30">
                                    <h4 class="pro-sidebar-title">Brand</h4>
                                    <div class="sidebar-widget-list">
                                        <ul>
                                            <li>
                                                <div class="sidebar-widget-list-left">
                                                    <input type="checkbox" /> <a href="#">Studio Design<span>(10)</span> </a>
                                                    <span class="checkmark"></span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="sidebar-widget-list-left">
                                                    <input type="checkbox" value="" /> <a href="#">Graphic Corner<span>(7)</span></a>
                                                    <span class="checkmark"></span>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- Sidebar single item -->
                                <div class="sidebar-widget mt-30">
                                    <h4 class="pro-sidebar-title">Dimension</h4>
                                    <div class="sidebar-widget-list">
                                        <ul>
                                            <li>
                                                <div class="sidebar-widget-list-left">
                                                    <input type="checkbox" /> <a href="#">40x60<span>(5)</span> </a>
                                                    <span class="checkmark"></span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="sidebar-widget-list-left">
                                                    <input type="checkbox" value="" /> <a href="#">60x90<span>(5)</span></a>
                                                    <span class="checkmark"></span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="sidebar-widget-list-left">
                                                    <input type="checkbox" value="" /> <a href="#">90x120<span>(5)</span> </a>
                                                    <span class="checkmark"></span>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- Sidebar single item -->
                                <div class="sidebar-widget tag mt-30">
                                    <div class="main-heading">
                                        <h2>Tag</h2>
                                    </div>
                                    <div class="sidebar-widget-tag">
                                        <ul>
                                            <li><a href="#">Fresh Fruit</a></li>
                                            <li><a href="#"> Fresh Vegetables</a></li>
                                            <li><a href="#">Fresh Salad</a></li>
                                            <li><a href="#"> Butter & Eggs</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- Sidebar single item -->
                            </div>
                        </div>
                        <!-- Sidebar Area End -->
                    </div>
                </div>
            </div>
            <!-- Shop Category Area End -->
            <!-- Footer Area start -->
            @include('footer')
            <!--  Footer Area End -->
        </div>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close"><span aria-hidden="true">x</span></button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-5 col-sm-12 col-xs-12">
                                <div class="tab-content quickview-big-img">
                                    <div id="pro-1" class="tab-pane fade show active">
                                        <img src="assets/images/product-image/organic/product-11.jpg" alt="" />
                                    </div>
                                    <div id="pro-2" class="tab-pane fade">
                                        <img src="assets/images/product-image/organic/product-9.jpg" alt="" />
                                    </div>
                                    <div id="pro-3" class="tab-pane fade">
                                        <img src="assets/images/product-image/organic/product-20.jpg" alt="" />
                                    </div>
                                    <div id="pro-4" class="tab-pane fade">
                                        <img src="assets/images/product-image/organic/product-19.jpg" alt="" />
                                    </div>
                                </div>
                                <!-- Thumbnail Large Image End -->
                                <!-- Thumbnail Image End -->
                                <div class="quickview-wrap mt-15">
                                    <div class="quickview-slide-active owl-carousel nav owl-nav-style owl-nav-style-2" role="tablist">
                                        <a class="active" data-bs-toggle="tab" href="#pro-1"><img src="assets/images/product-image/organic/product-11.jpg" alt="" /></a>
                                        <a data-bs-toggle="tab" href="#pro-2"><img src="assets/images/product-image/organic/product-9.jpg" alt="" /></a>
                                        <a data-bs-toggle="tab" href="#pro-3"><img src="assets/images/product-image/organic/product-20.jpg" alt="" /></a>
                                        <a data-bs-toggle="tab" href="#pro-4"><img src="assets/images/product-image/organic/product-19.jpg" alt="" /></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-7 col-sm-12 col-xs-12">
                                <div class="product-details-content quickview-content">
                                    <h2>Originals Kaval Windbr</h2>
                                    <p class="reference">Reference:<span> demo_17</span></p>
                                    <div class="pro-details-rating-wrap">
                                        <div class="rating-product">
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                        </div>
                                        <span class="read-review"><a class="reviews" href="#">Read reviews (1)</a></span>
                                    </div>
                                    <div class="pricing-meta">
                                        <ul>
                                            <li class="old-price not-cut">€18.90</li>
                                        </ul>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisic elit eiusm tempor incidid ut labore et dolore magna aliqua. Ut enim ad minim venialo quis nostrud exercitation ullamco</p>
                                    <div class="pro-details-size-color">
                                        <div class="pro-details-color-wrap">
                                            <span>Color</span>
                                            <div class="pro-details-color-content">
                                                <ul>
                                                    <li class="blue"></li>
                                                    <li class="maroon active"></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="pro-details-quality">
                                        <div class="cart-plus-minus">
                                            <input class="cart-plus-minus-box" type="text" name="qtybutton" value="1" />
                                        </div>
                                        <div class="pro-details-cart btn-hover">
                                            <a href="#"> + Add To Cart</a>
                                        </div>
                                    </div>
                                    <div class="pro-details-wish-com">
                                        <div class="pro-details-wishlist">
                                            <a href="#"><i class="ion-android-favorite-outline"></i>Add to wishlist</a>
                                        </div>
                                        <div class="pro-details-compare">
                                            <a href="#"><i class="ion-ios-shuffle-strong"></i>Add to compare</a>
                                        </div>
                                    </div>
                                    <div class="pro-details-social-info">
                                        <span>Share</span>
                                        <div class="social-info">
                                            <ul>
                                                <li>
                                                    <a href="#"><i class="ion-social-facebook"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="ion-social-twitter"></i></a>
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal end -->

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
