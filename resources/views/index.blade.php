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
            <!-- Header Area Start  -->
            @include('header')
            <!--  Main Header End -->
            <!-- Slider Arae Start -->
            <!-- need to loop this slider -->
            <div class="slider-area home-2">
                
                <div class="slider-active-3 owl-carousel slider-hm8 owl-dot-style">
                @foreach($sliders as $slider)
                    <!-- Slider Single Item Start -->
                    <div class="slider-height-6 d-flex align-items-start justify-content-start bg-img" style="background-image: url({{ asset($slider -> image)}});">
                        <div class="container">
                            <div class="slider-content-2 slider-animated-1 text-left">
                                <span class="animated" style="text-shadow: 2px 2px 4px rgba(255, 255, 255, 0.6);">CODEAFFIL</span>
                                <h1 class="animated col-sm-5 col-7" style="color:#fff; text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.6);">
                                    {{$slider -> description}}
                                </h1>
                                <a href="#shopnow" class="shop-btn animated">SHOP NOW</a>
                            </div>
                        </div>
                    </div>
                    <!-- Slider Single Item End -->
                @endforeach
                </div>
            </div>
            <!-- Slider Arae End -->
            <!-- Banner Area Start -->
            <!-- <div class="banner-area home-2">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 col-xs-12">
                            <div class="banner-wrapper">
                                <a href="shop-4-column.html"><img src="assets/images/banner-image/1.jpg" alt="" /></a>
                            </div>
                        </div>
                        <div class="col-md-6 col-xs-12 mt-res-sx-30px">
                            <div class="banner-wrapper">
                                <a href="shop-4-column.html"><img src="assets/images/banner-image/2.jpg" alt="" /></a>
                            </div>
                        </div>
                        <div class="col-md-3 col-xs-12 mt-res-sx-30px">
                            <div class="banner-wrapper">
                                <a href="shop-4-column.html"><img src="assets/images/banner-image/3.jpg" alt="" /></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
            <!-- Banner Area End -->
            <!-- Category Area Start -->
            <section class="categorie-area mt-5" id="shopnow">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <!-- Section Title -->
                            <div class="section-title">
                                <h2>Popular Categories</h2>
                                <p>Add Popular Categories to weekly line up</p>
                            </div>
                            <!-- Section Title -->
                        </div>
                    </div>
                    <!-- Category Slider Start -->
                    <div class="category-slider owl-carousel owl-nav-style">
                        <!-- Single item -->
                        @for($i = 0; $i < count($popularCategories); $i+=2)
                        <div class="category-item">
                            <div class="category-list mb-30px">
                                
                                <div class="category-thumb">
                                    <a href="products/subcategory/{{$popularCategories[$i]->name}}">
                                        <div class="xcontainer">
                                        <div class="xwhite"></div>
                                            <img src="{{ asset($popularCategories[$i]->image)}}" alt="" class="ximage" />
                                            
                                        </div>
                                        
                                    </a>
                                </div>
                                <div class="desc-listcategoreis xdes">
                                    <div class="name_categories">
                                        <h4>{{$popularCategories[$i]->name}}</h4>
                                    </div>
                                    <span class="number_product">{{$popularCategories[$i]->counts}} Products</span>
                                    <a href="products/subcategory/{{$popularCategories[$i]->name}}"> Shop Now <i class="ion-android-arrow-dropright-circle"></i></a>
                                </div>
                            </div>
                            @if($i+1 < count($popularCategories))
                            <div class="category-list">
                                <div class="category-thumb">
                                    <a href="products/subcategory/{{$popularCategories[$i+1]->name}}">
                                    <div class="xcontainer">
                                        <div class="xwhite"></div>
                                            <img src="{{ asset($popularCategories[$i+1]->image)}}" alt="" class="ximage" />
                                            
                                        </div>
                                    </a>
                                </div>
                                <div class="desc-listcategoreis xdes">
                                    <div class="name_categories">
                                        <h4>{{$popularCategories[$i+1]->name}}</h4>
                                    </div>

                                    <span class="number_product">{{$popularCategories[$i+1]->counts}} Products</span>
                                    <a href="products/subcategory/{{$popularCategories[$i+1]->name}}"> Shop Now <i class="ion-android-arrow-dropright-circle"></i></a>
                                </div>
                            </div>
                            @endif
                        </div>
                        @endfor
                    </div>
                    <!-- Category Slider End  -->
                </div>
            </section>
            <!-- Category Area End  -->
            <!-- Suggestion Area Start -->
            <section class="feature-area mt-5">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <!-- Section Title -->
                            <div class="section-title">
                                <h2>Suggested Products</h2>
                                <p>Suggested for you, you might love these!</p>
                            </div>
                            <!-- Section Title -->
                        </div>
                    </div>
                    <!-- Feature Slider Start -->
                    <div class="feature-slider owl-carousel owl-nav-style">
                        <!-- Single Item -->
                        @for($i = 0; $i < count($suggestedProducts); $i+=2)
                        <div class="feature-slider-item">
                            <article class="list-product">
                                <div class="img-block">
                                    <a href="/single_product/{{$suggestedProducts[$i]->id}}" class="thumbnail">
                                        <img class="first-img" src="{{ asset($suggestedProducts[$i]->image_1)}}" style="max-height:120px" alt="" />
                                    </a>
                                    <div class="quick-view">
                                        <a class="quick_view" href="/single_product/{{$suggestedProducts[$i]->id}}">
                                            <i class="ion-ios-search-strong"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="product-decs">
                                    <span>{{$suggestedProducts[$i]->name}}</span>
                                    <h2><a href="/single_product/{{$suggestedProducts[$i]->id}}" class="product-link">{{$suggestedProducts[$i]->title}}</a></h2>
                                    <!-- <div class="rating-product">
                                        <i class="ion-android-star"></i>
                                        <i class="ion-android-star"></i>
                                        <i class="ion-android-star"></i>
                                        <i class="ion-android-star"></i>
                                        <i class="ion-android-star"></i>
                                    </div> -->
                                    <div class="pricing-meta">
                                        @if($suggestedProducts[$i]->sale_price != 0)
                                            <ul>
                                                <li class="old-price">$ {{number_format($suggestedProducts[$i]->regular_price, 2)}}</li>
                                                <li class="current-price">$ {{number_format($suggestedProducts[$i]->sale_price, 2)}}</li>
                                                <li class="discount-price">{{number_format((($suggestedProducts[$i]->regular_price - $suggestedProducts[$i]->sale_price) / $suggestedProducts[$i]->regular_price)*100, 2)}} %</li>
                                            </ul>
                                        @else
                                            <ul>
                                                <li class="old-price not-cut">$ {{number_format($suggestedProducts[$i]->regular_price, 2)}}</li>
                                            </ul>
                                        @endif
                                    </div>
                                </div>
                            </article>
                            @if($i+1 < count($suggestedProducts))
                            <article class="list-product">
                                <div class="img-block">
                                    <a href="/single_product/{{$suggestedProducts[$i+1]->id}}" class="thumbnail">
                                        <img class="first-img" src="{{ asset($suggestedProducts[$i +1]->image_1)}}" style="max-height:120px" alt="" />
                                    </a>
                                    <div class="quick-view">
                                        <a class="quick_view" href="/single_product/{{$suggestedProducts[$i+1]->id}}">
                                            <i class="ion-ios-search-strong"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="product-decs">
                                    <span>{{$suggestedProducts[$i+1]->name}}</span>
                                    <h2><a href="/single_product/{{$suggestedProducts[$i+1]->id}}" class="product-link">{{$suggestedProducts[$i +1]->title}}</a></h2>
                                    <!-- <div class="rating-product">
                                        <i class="ion-android-star"></i>
                                        <i class="ion-android-star"></i>
                                        <i class="ion-android-star"></i>
                                        <i class="ion-android-star"></i>
                                        <i class="ion-android-star"></i>
                                    </div> -->
                                    <div class="pricing-meta">
                                        @if($suggestedProducts[$i+1]->sale_price != 0)
                                            <ul>
                                                <li class="old-price">$ {{number_format($suggestedProducts[$i+1]->regular_price, 2)}}</li>
                                                <li class="current-price">$ {{number_format($suggestedProducts[$i+1]->sale_price, 2)}}</li>
                                                <li class="discount-price">{{number_format((($suggestedProducts[$i+1]->regular_price - $suggestedProducts[$i+1]->sale_price) / $suggestedProducts[$i+1]->regular_price)*100, 2)}} %</li>
                                            </ul>
                                        @else
                                            <ul>
                                                <li class="old-price not-cut">$ {{number_format($suggestedProducts[$i+1]->regular_price, 2)}}</li>
                                            </ul>
                                        @endif
                                    </div>
                                </div>
                            </article>
                            @endif
                        </div>
                        @endfor
                    </div>
                    <!-- Feature Slider End -->
                </div>
            </section>
            <!-- Suggestion Area End -->

            <!-- Hot deal area Start -->
            <section class="hot-deal-area mb-30px">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5 col-xl-4">
                            <div class="row">
                                <div class="col-md-12">
                                    <!-- Section Title -->
                                    <div class="section-title">
                                        <h2>Hot Deals</h2>
                                        <p>Add hot products to weekly line up</p>
                                    </div>
                                    <!-- Section Title End-->
                                </div>
                            </div>
                            <!-- Hot Deal Slider Start -->
                            <div class="hot-deal owl-carousel owl-nav-style mb-res-sm-30px mb-res-sm-30px" >
                                <!--  Single item -->
                                @foreach($hotDeals as $hotDeal)
                                <article class="list-product" style="border-color:#cf292b">
                                    <div class="img-block">
                                        <a href="/single_product/{{$hotDeal->product_id}}" class="thumbnail">
                                            <img class="first-img" src="{{ asset($hotDeal->image_1)}}" alt="" />
                                        </a>
                                        <div class="quick-view">
                                            <a class="quick_view" href="/single_product/{{$hotDeal->product_id}}">
                                                <i class="ion-ios-search-strong"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <ul class="product-flag">
                                        <li class="new" style="background-color:#cf292b">Hot Deals</li>
                                    </ul>
                                    <div class="product-decs">
                                        <a class="inner-link" href="shop-4-column.html"><span>{{$hotDeal->name}}</span></a>
                                        <h2><a href="/single_product/{{$hotDeal->product_id}}" class="product-link">{{$hotDeal->title}}</a></h2>
                                        <!-- <div class="rating-product">
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                        </div> -->
                                        <div class="pricing-meta">
                                            <ul>
                                                <li class="old-price">$ {{number_format($hotDeal->regular_price, 2)}}</li>
                                                <li class="current-price">$ {{number_format($hotDeal->sale_price, 2)}}</li><br/>
                                                <li class="discount-price">{{number_format((($hotDeal->regular_price - $hotDeal->sale_price) / $hotDeal->regular_price)*100, 2)}} %</li>
                                            </ul>
                                        </div>
                                    </div>
                                    @if(date("Y-m-d") < $hotDeal->deal_starts)
                                    <div class="clockdiv">
                                        <div class="title_countdown" style="color:#4fb68d">Get Ready! Offers Starts in:</div>
                                        <div data-countdown="{{ asset($hotDeal->deal_starts)}}"></div>
                                    </div>
                                    @else
                                    <div class="clockdiv">
                                        <div class="title_countdown" style="color:#cf292b">Hurry Up! Offers ends in:</div>
                                        <div data-countdown="{{$hotDeal->deal_ends}}"></div>
                                    </div>
                                    @endif
                                </article>
                                @endforeach
                            </div>
                            <!-- Hot Deal Slider end -->
                        </div>
                        <!-- New Arrivals Area Start -->
                        <div class="col-xs-12 col-sm-12 col-md-7 col-lg-7 col-xl-8">
                            <div class="row">
                                <div class="col-md-12">
                                    <!-- Section Title -->
                                    <div class="section-title ml-0px">
                                        <h2>New Arrivals</h2>
                                        <p>Add new products to weekly line up</p>
                                    </div>
                                    <!-- Section Title -->
                                </div>
                            </div>
                            <!-- New Product Slider Start -->
                            <div class="new-product-slider owl-carousel owl-nav-style">
                                <!-- Product Single Item -->
                                @for($i = 0; $i < count($newProducts); $i+=2)
                                <div class="product-inner-item">
                                    <article class="list-product mb-30px">
                                        <div class="img-block" style="display: flex; align-items: center; justify-content: center; height:210px;">
                                            <a href="/single_product/{{$newProducts[$i]->id}}" class="thumbnail">
                                                <img class="first-img newp" src="{{ asset($newProducts[$i]->image_1)}}" alt="" />
                                            </a>
                                        <div class="quick-view">
                                            <a class="quick_view" href="/single_product/{{$newProducts[$i]->id}}">
                                                <i class="ion-ios-search-strong"></i>
                                            </a>
                                        </div>
                                        </div>
                                        <ul class="product-flag">
                                            <li class="new">New</li>
                                        </ul>
                                        <div class="product-decs">
                                            <a class="inner-link" href="shop-4-column.html"><span>{{$newProducts[$i]->name}}</span></a>
                                            <h2><a href="/single_product/{{$newProducts[$i]->id}}" class="product-link">{{$newProducts[$i]->title}}</a></h2>
                                            <!-- <div class="rating-product">
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                            </div> -->
                                            <div class="pricing-meta">
                                            @if($newProducts[$i]->sale_price != 0)
                                                <ul>
                                                    <li class="old-price">$ {{number_format($newProducts[$i]->regular_price, 2)}}</li>
                                                    <li class="current-price">$ {{number_format($newProducts[$i]->sale_price, 2)}}</li>
                                                    <li class="discount-price">{{number_format((($newProducts[$i]->regular_price - $newProducts[$i]->sale_price) / $newProducts[$i]->regular_price)*100, 2)}} %</li>
                                                </ul>
                                            @else
                                                <ul>
                                                    <li class="old-price not-cut">$ {{number_format($newProducts[$i]->regular_price, 2)}}</li>
                                                </ul>
                                            @endif
                                            </div>
                                        </div>
                                    </article>
                                    @if($i+1 < count($newProducts))
                                    <article class="list-product">
                                        <div class="img-block" style="display: flex; align-items: center; justify-content: center; height:210px;">
                                            <a href="/single_product/{{$newProducts[$i+1]->id}}" class="thumbnail">
                                                <img class="first-img newp" src="{{ asset($newProducts[$i + 1]->image_1)}}" alt="" />
                                            </a>
                                        <div class="quick-view">
                                            <a class="quick_view" href="/single_product/{{$newProducts[$i+1]->id}}">
                                                <i class="ion-ios-search-strong"></i>
                                            </a>
                                        </div>
                                        </div>
                                        <ul class="product-flag">
                                            <li class="new">New</li>
                                        </ul>
                                        <div class="product-decs">
                                            <a class="inner-link" href="shop-4-column.html"><span>{{$newProducts[$i + 1]->name}}</span></a>
                                            <h2><a href="/single_product/{{$newProducts[$i+1]->id}}" class="product-link">{{$newProducts[$i + 1]->title}}</a></h2>
                                            <!-- <div class="rating-product">
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                            </div> -->
                                            <div class="pricing-meta">
                                            @if($newProducts[$i+1]->sale_price != 0)
                                                <ul>
                                                    <li class="old-price">$ {{number_format($newProducts[$i+1]->regular_price, 2)}}</li>
                                                    <li class="current-price">$ {{number_format($newProducts[$i+1]->sale_price, 2)}}</li>
                                                    <li class="discount-price">{{number_format((($newProducts[$i+1]->regular_price - $newProducts[$i+1]->sale_price) / $newProducts[$i+1]->regular_price)*100, 2)}} %</li>
                                                </ul>
                                            @else
                                                <ul>
                                                    <li class="old-price not-cut">$ {{number_format($newProducts[$i+1]->regular_price, 2)}}</li>
                                                </ul>
                                            @endif
                                            </div>
                                        </div>
                                    </article>
                                    @endif
                                </div>
                                @endfor
                            </div>
                            <!-- New Product Slider End -->
                        </div>
                    </div>
                </div>
            </section>
            <!-- Hot Deal Area End -->

                        <!-- Sales Area Start -->
                        <section class="feature-area mt-5">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <!-- Section Title -->
                            <div class="section-title">
                                <h2>Sales Products</h2>
                                <p>Ongoing Sales!</p>
                            </div>
                            <!-- Section Title -->
                        </div>
                    </div>
                    <!-- Feature Slider Start -->
                    <div class="feature-slider owl-carousel owl-nav-style">
                        <!-- Single Item -->
                        @for($i = 0; $i < count($saleProducts); $i+=2)
                        <div class="feature-slider-item">
                            <article class="list-product">
                                <div class="img-block">
                                    <a href="/single_product/{{$saleProducts[$i]->id}}" class="thumbnail">
                                        <img class="first-img" src="{{ asset($saleProducts[$i]->image_1)}}" style="max-height:120px" alt="" />
                                    </a>
                                    <div class="quick-view">
                                        <a class="quick_view" href="/single_product/{{$saleProducts[$i]->id}}">
                                            <i class="ion-ios-search-strong"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="product-decs">
                                    <span>{{$saleProducts[$i]->name}}</span>
                                    <h2><a href="/single_product/{{$saleProducts[$i]->id}}" class="product-link">{{$saleProducts[$i]->title}}</a></h2>
                                    <!-- <div class="rating-product">
                                        <i class="ion-android-star"></i>
                                        <i class="ion-android-star"></i>
                                        <i class="ion-android-star"></i>
                                        <i class="ion-android-star"></i>
                                        <i class="ion-android-star"></i>
                                    </div> -->
                                    <div class="pricing-meta">
                                            <ul>
                                                <li class="old-price">$ {{number_format($saleProducts[$i]->regular_price, 2)}}</li>
                                                <li class="current-price">$ {{number_format($saleProducts[$i]->sale_price, 2)}}</li><br/>
                                                <li class="discount-price">{{number_format((($saleProducts[$i]->regular_price - $saleProducts[$i]->sale_price) / $saleProducts[$i]->regular_price)*100, 2)}} %</li>
                                            </ul>
                                    </div>
                                </div>
                            </article>
                            @if($i+1 < count($saleProducts))
                            <article class="list-product">
                                <div class="img-block">
                                    <a href="/single_product/{{$saleProducts[$i+1]->id}}" class="thumbnail">
                                        <img class="first-img" src="{{ asset($saleProducts[$i +1]->image_1)}}" style="max-height:120px" alt="" />
                                    </a>
                                    <div class="quick-view">
                                        <a class="quick_view" href="/single_product/{{$saleProducts[$i+1]->id}}">
                                            <i class="ion-ios-search-strong"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="product-decs">
                                    <span>{{$saleProducts[$i+1]->name}}</span>
                                    <h2><a href="/single_product/{{$saleProducts[$i+1]->id}}" class="product-link">{{$saleProducts[$i +1]->title}}</a></h2>
                                    <!-- <div class="rating-product">
                                        <i class="ion-android-star"></i>
                                        <i class="ion-android-star"></i>
                                        <i class="ion-android-star"></i>
                                        <i class="ion-android-star"></i>
                                        <i class="ion-android-star"></i>
                                    </div> -->
                                    <div class="pricing-meta">
                                            <ul>
                                                <li class="old-price">$ {{number_format($saleProducts[$i+1]->regular_price, 2)}}</li>
                                                <li class="current-price">$ {{number_format($saleProducts[$i+1]->sale_price, 2)}}</li><br/>
                                                <li class="discount-price">{{number_format((($saleProducts[$i+1]->regular_price - $saleProducts[$i+1]->sale_price) / $saleProducts[$i+1]->regular_price)*100, 2)}} %</li>
                                            </ul>
                                    </div>
                                </div>
                            </article>
                            @endif
                        </div>
                        @endfor
                    </div>
                    <!-- Feature Slider End -->
                </div>
            </section>
            <!-- Sales Area End -->

            
            <!-- Testimonial Area Start -->
            <section class="testimonial-area">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <!-- Section Title -->
                            <div class="section-title">
                                <h2>Client Testimonials</h2>
                                <p>What our happy customers says !</p>
                            </div>
                            <!-- Section Title -->
                        </div>
                    </div>
                    <!-- Testimonial Slider Start -->
                    <div class="testi-slider owl-carousel owl-dot-style">
                        @for ($i = 0; $i < 5; $i++)
                        <!-- Single item -->
                        <div class="testi-slider-wrapper">
                            <div class="testi-slider-inner">
                                <div class="testi-img">
                                    <img src="{{ asset('assets/images/testimonial-image/1.png')}}" alt="" />
                                </div>
                                <div class="testi-content">
                                    <div class="testi-content-text">
                                        All Perfect !! I have three sites with magento , this theme is the best !! Excellent support , advice theme installation package , sorry for English, are Italian but I had no problem !! Thank you !
                                    </div>
                                    <div class="author-text">
                                        <h4>orando BLoom <span>demo@posthemes.com</span></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endfor
                    </div>
                    <!-- Testimonial Slider End -->
                </div>
            </section>
            <br/>
            <!-- Testimonial Area end -->
            <!-- Banner Area 2 Start -->
            <div class="banner-area-2 mt-5">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="banner-inner">
                                <a href="shop-4-column.html"><img src="{{ asset('assets/images/banner-image/4.gif')}}" alt="" /></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Banner Area 2 End -->
            <!-- Brand area start -->
            <div class="brand-area">
                <div class="container">
                    <div class="border-1px">
                        <div class="brand-slider owl-carousel owl-nav-style owl-nav-style-2">
                            @foreach($ecommerces as $ecommerce)
                            <div class="brand-slider-item">
                                <a href="products/ecommerce/{{$ecommerce->name}}"><img src="{{ asset($ecommerce->logo)}}" alt="" /></a>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <!-- Brand area End -->
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
