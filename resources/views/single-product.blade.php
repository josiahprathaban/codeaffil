<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <title>Codeaffil</title>
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
            <!-- Shop details Area start -->
            <section class="product-details-area mtb-60px">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-12">
                            <div class="product-details-img product-details-tab">
                                <div class="zoompro-wrap zoompro-2">
                                    <div class="zoompro-border zoompro-span">
                                        <img class="zoompro" src="{{asset($product->image_1)}}" alt="" />
                                    </div>
                                </div>
                                <div id="gallery" class="product-dec-slider-2">
                                    <a class="active" data-image="{{asset($product->image_1)}}" data-zoom-image="{{asset($product->image_1)}}">
                                        <img src="{{asset($product->image_1)}}" alt="" style="max-height:150px; width:auto"/>
                                    </a>
                                    <a class="active" data-image="{{asset($product->image_2)}}" data-zoom-image="{{asset($product->image_2)}}">
                                        <img src="{{asset($product->image_2)}}" alt="" style="max-height:150px; width:auto" />
                                    </a>
                                    <a class="active" data-image="{{asset($product->image_3)}}" data-zoom-image="{{asset($product->image_3)}}">
                                        <img src="{{asset($product->image_3)}}" alt="" style="max-height:150px; width:auto"/>
                                    </a>
                                    <a class="active" data-image="{{asset($product->image_4)}}" data-zoom-image="{{asset($product->image_4)}}">
                                        <img src="{{asset($product->image_4)}}" alt="" style="max-height:150px; width:auto"/>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-12">
                            <div class="product-details-content">
                                <h2>{{$product->title}}</h2>
                                <p class="reference">{{$product->short_description}}</p>
                               
                                <div class="pricing-meta">
                                            @if($product->sale_price != 0)
                                                <ul>
                                                    <li class="old-price">$ {{number_format($product->regular_price, 2)}}</li>
                                                    <li class="current-price" style="font-size:30px">$ {{number_format($product->sale_price, 2)}}</li><br/>
                                                    <li class="discount-price">{{number_format((($product->regular_price - $product->sale_price) / $product->regular_price)*100, 2)}} %</li>
                                                </ul>
                                            @else
                                                <ul>
                                                    <li class="old-price not-cut">$ {{number_format($product->regular_price, 2)}}</li>
                                                </ul>
                                            @endif
                                </div>
                                <p>Stock status :
                                     @if($product->stock_status == 1)
                                     <span style="color:#4fb68d">Available</span> 
                                     @else
                                     <span style="color:#ef1e1e">Out of stock </span> 
                                     @endif

                                </p><br/>
                                <div class="pro-details-list">
                                    <ul>
                                        <b>Brand</b> : {{$product->brand}} <br/>
                                        <b>E-Commerce</b> : {{$product->ecommerce}} <br/> <img src="{{asset($product->logo)}}" width="200px" alt=""><br/>
                                        <b>Specifications</b>
                                        @foreach(explode(".", $product->description) as $points)
                                        <li> - {{$points}}</li>
                                        @endforeach
                                    </ul>
                                </div>
                                <div class="pro-details-quality mt-0px">
                                    <div class="pro-details-cart btn-hover">
                                        <a href="{{$product->affiliate_link}}" target="_blank" style="font-size:20px"> Buy </a>
                                    </div>
                                    <div class="pro-details-cart btn-hover">
                                        <a href="/compare/{{$product->title}}" style="font-size:20px"><i class="ion-ios-shuffle-strong"></i> Compare</a>
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
            </section>
            <!-- Shop details Area End -->
            <!-- product details description area start -->
            <!-- <div class="description-review-area mb-60px">
                <div class="container">
                    <div class="description-review-wrapper">
                        <div class="description-review-topbar nav">
                            <a data-bs-toggle="tab" href="#des-details1">Description</a>
                            <a class="active" data-bs-toggle="tab" href="#des-details2">Product Details</a>
                            <a data-bs-toggle="tab" href="#des-details3">Reviews (2)</a>
                        </div>
                        <div class="tab-content description-review-bottom">
                            <div id="des-details2" class="tab-pane active">
                                <div class="product-anotherinfo-wrapper">
                                    <ul>
                                        <li><span>Weight</span> 400 g</li>
                                        <li><span>Dimensions</span>10 x 10 x 15 cm</li>
                                        <li><span>Materials</span> 60% cotton, 40% polyester</li>
                                        <li><span>Other Info</span> American heirloom jean shorts pug seitan letterpress</li>
                                    </ul>
                                </div>
                            </div>
                            <div id="des-details1" class="tab-pane">
                                <div class="product-description-wrapper">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit, sed do eiusmod tempor incididunt</p>
                                    <p>
                                        ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commo consequat. Duis aute irure dolor in reprehend in voluptate velit esse
                                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
                                    </p>
                                </div>
                            </div>
                            <div id="des-details3" class="tab-pane">
                                <div class="row">
                                    <div class="col-lg-7">
                                        <div class="review-wrapper">
                                            <div class="single-review">
                                                <div class="review-img">
                                                    <img src="assets/images/testimonial-image/1.png" alt="" />
                                                </div>
                                                <div class="review-content">
                                                    <div class="review-top-wrap">
                                                        <div class="review-left">
                                                            <div class="review-name">
                                                                <h4>White Lewis</h4>
                                                            </div>
                                                            <div class="rating-product">
                                                                <i class="ion-android-star"></i>
                                                                <i class="ion-android-star"></i>
                                                                <i class="ion-android-star"></i>
                                                                <i class="ion-android-star"></i>
                                                                <i class="ion-android-star"></i>
                                                            </div>
                                                        </div>
                                                        <div class="review-left">
                                                            <a href="#">Reply</a>
                                                        </div>
                                                    </div>
                                                    <div class="review-bottom">
                                                        <p>
                                                            Vestibulum ante ipsum primis aucibus orci luctustrices posuere cubilia Curae Suspendisse viverra ed viverra. Mauris ullarper euismod vehicula. Phasellus quam nisi, congue id nulla.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="single-review child-review">
                                                <div class="review-img">
                                                    <img src="assets/images/testimonial-image/2.png" alt="" />
                                                </div>
                                                <div class="review-content">
                                                    <div class="review-top-wrap">
                                                        <div class="review-left">
                                                            <div class="review-name">
                                                                <h4>White Lewis</h4>
                                                            </div>
                                                            <div class="rating-product">
                                                                <i class="ion-android-star"></i>
                                                                <i class="ion-android-star"></i>
                                                                <i class="ion-android-star"></i>
                                                                <i class="ion-android-star"></i>
                                                                <i class="ion-android-star"></i>
                                                            </div>
                                                        </div>
                                                        <div class="review-left">
                                                            <a href="#">Reply</a>
                                                        </div>
                                                    </div>
                                                    <div class="review-bottom">
                                                        <p>Vestibulum ante ipsum primis aucibus orci luctustrices posuere cubilia Curae Sus pen disse viverra ed viverra. Mauris ullarper euismod vehicula.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-5">
                                        <div class="ratting-form-wrapper pl-50">
                                            <h3>Add a Review</h3>
                                            <div class="ratting-form">
                                                <form action="#">
                                                    <div class="star-box">
                                                        <span>Your rating:</span>
                                                        <div class="rating-product">
                                                            <i class="ion-android-star"></i>
                                                            <i class="ion-android-star"></i>
                                                            <i class="ion-android-star"></i>
                                                            <i class="ion-android-star"></i>
                                                            <i class="ion-android-star"></i>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="rating-form-style mb-10">
                                                                <input placeholder="Name" type="text" />
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="rating-form-style mb-10">
                                                                <input placeholder="Email" type="email" />
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="rating-form-style form-submit">
                                                                <textarea name="Your Review" placeholder="Message"></textarea>
                                                                <input type="submit" value="Submit" />
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
                </div>
            </div> -->
            <!-- product details description area end -->
            <!-- Recent Add Product Area Start -->
            <section class="recent-add-area">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <!-- Section Title -->
                            <div class="section-title">
                                <h2>You Might Also Like</h2>
                                <p>Add Related products to weekly line up</p>
                            </div>
                            <!-- Section Title -->
                        </div>
                    </div>
                    <!-- Recent Product slider Start -->
                    <div class="recent-product-slider owl-carousel owl-nav-style">
                        <!-- Single Item -->
                        @foreach($suggestedProducts as $suggestedProduct)
                        <article class="list-product">
                                <div class="img-block" style="height:200px; display: inline-flex; width:100%; align-items: center; justify-content: center;">
                                    <a href="/single_product/{{$suggestedProduct->id}}" class="thumbnail">
                                        <img class="first-img" src="{{ asset($suggestedProduct->image_1)}}" style="max-height:200px" alt="" />
                                    </a>
                                    <div class="quick-view">
                                        <a class="quick_view" href="/single_product/{{$suggestedProduct->id}}">
                                            <i class="ion-ios-search-strong"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="product-decs">
                                    <span>{{$suggestedProduct->name}}</span>
                                    <h2><a href="/single_product/{{$suggestedProduct->id}}" class="product-link">{{$suggestedProduct->title}}</a></h2>
                                    <!-- <div class="rating-product">
                                        <i class="ion-android-star"></i>
                                        <i class="ion-android-star"></i>
                                        <i class="ion-android-star"></i>
                                        <i class="ion-android-star"></i>
                                        <i class="ion-android-star"></i>
                                    </div> -->
                                    <div class="pricing-meta">
                                        @if($suggestedProduct->sale_price != 0)
                                            <ul>
                                                <li class="old-price">$ {{number_format($suggestedProduct->regular_price, 2)}}</li>
                                                <li class="current-price">$ {{number_format($suggestedProduct->sale_price, 2)}}</li>
                                                <li class="discount-price">{{number_format((($suggestedProduct->regular_price - $suggestedProduct->sale_price) / $suggestedProduct->regular_price)*100, 2)}} %</li>
                                            </ul>
                                        @else
                                            <ul>
                                                <li class="old-price not-cut">$ {{number_format($suggestedProduct->regular_price, 2)}}</li>
                                            </ul>
                                        @endif
                                    </div>
                                </div>
                            </article>
                        @endforeach
                    </div>
                    <!-- Recent product slider end -->
                </div>
            </section>
            <!-- Recent product area end -->
            <!-- Recent Add Product Area Start -->
            <section class="recent-add-area mt-30 mb-30px">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <!-- Section Title -->
                            <div class="section-title">
                                <h2>In The Same Category</h2>
                                <p>{{count($sameCategoryProducts) - 1}} other products in the same category:</p>
                            </div>
                            <!-- Section Title -->
                        </div>
                    </div>
                    <!-- Recent Product slider Start -->
                    <div class="recent-product-slider owl-carousel owl-nav-style">
                        <!-- Single Item -->
                        @foreach($sameCategoryProducts as $sameCategoryProduct)
                        @if($sameCategoryProduct->id != $id)
                        <article class="list-product">
                                <div class="img-block" style="height:200px; display: inline-flex; width:100%; align-items: center; justify-content: center;">
                                    <a href="/single_product/{{$sameCategoryProduct->id}}" class="thumbnail">
                                        <img class="first-img" src="{{ asset($sameCategoryProduct->image_1)}}" style="max-height:200px" alt="" />
                                    </a>
                                    <div class="quick-view">
                                        <a class="quick_view" href="/single_product/{{$sameCategoryProduct->id}}">
                                            <i class="ion-ios-search-strong"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="product-decs">
                                    <span>{{$sameCategoryProduct->name}}</span>
                                    <h2><a href="/single_product/{{$sameCategoryProduct->id}}" class="product-link">{{$sameCategoryProduct->title}}</a></h2>
                                    <!-- <div class="rating-product">
                                        <i class="ion-android-star"></i>
                                        <i class="ion-android-star"></i>
                                        <i class="ion-android-star"></i>
                                        <i class="ion-android-star"></i>
                                        <i class="ion-android-star"></i>
                                    </div> -->
                                    <div class="pricing-meta">
                                        @if($sameCategoryProduct->sale_price != 0)
                                            <ul>
                                                <li class="old-price">$ {{number_format($sameCategoryProduct->regular_price, 2)}}</li>
                                                <li class="current-price">$ {{number_format($sameCategoryProduct->sale_price, 2)}}</li>
                                                <li class="discount-price">{{number_format((($sameCategoryProduct->regular_price - $sameCategoryProduct->sale_price) / $sameCategoryProduct->regular_price)*100, 2)}} %</li>
                                            </ul>
                                        @else
                                            <ul>
                                                <li class="old-price not-cut">$ {{number_format($sameCategoryProduct->regular_price, 2)}}</li>
                                            </ul>
                                        @endif
                                    </div>
                                </div>
                            </article>
                            @endif
                        @endforeach
                    </div>
                    <!-- Recent product slider end -->
                </div>
            </section>
            <!-- Recent product area end -->
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
    </body>
</html>
