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
        <!-- Shop Category Area End -->
        <div class="shop-category-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 order-lg-last col-md-12 order-md-first">
                        <!-- Shop Top Area Start -->
                        <div class="shop-top-bar">
                            <!-- Left Side start -->
                            <div class="shop-tab nav mb-res-sm-15">
                                <p>There are {{$products->total()}} Products. [ {{$products->firstItem()}} - {{$products->lastItem()}} ]</p>
                            </div>
                            <!-- Left Side End -->
                            <!-- Right Side Start -->
                            <div class="select-shoing-wrap">
                                <div class="shot-product">
                                    <p>Sort By:</p>
                                </div>
                                <div class="shop-select">
                                    <select name="filter" id="sorting">
                                        <option value="title_asc">A to Z</option>
                                        <option value="title_desc"> Z to A</option>
                                        <option value="date">Sort by newness</option>
                                        <option value="price_asc">Low to High</option>
                                        <option value="price_desc">High to Low</option>
                                        <option value="sale">Sale Products</option>
                                        <option value="stock">In stock</option>
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
                                    <div class="row sort_view">
                                        @foreach($products->sortBy('title') as $product)
                                        <div class="col-xl-3 col-md-4 col-sm-6">

                                            <article class="list-product">
                                                <div class="img-block" style="height:250px; display: inline-flex; width:100%; align-items: center; justify-content: center;">
                                                    <a href="/single_product/{{$product -> id}}" class="thumbnail">
                                                        <img class="first-img" src="{{asset($product->image_1)}}" alt="" style="max-height:250px" />
                                                    </a>
                                                    <div class="quick-view">
                                                        <a class="quick_view" href="/single_product/{{$product -> id}}">
                                                            <i class="ion-ios-search-strong"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                @if(date("Y-m-d", strtotime('-7 days')) < $product->updated_at)
                                                    <ul class="product-flag">
                                                        <li class="new">New</li>
                                                    </ul>
                                                    @endif
                                                    <div class="product-decs">
                                                        <a class="inner-link" href="/products/ecommerce/{{$product -> name}}"><span>{{$product->name}}</span></a>
                                                        <h2><a href="/single_product/{{$product -> id}}" class="product-link">{{$product -> title}}</a></h2>

                                                        <div class="pricing-meta">
                                                            @if($product->sale_price != 0)
                                                            <ul>
                                                                <li class="old-price">$ {{number_format($product->regular_price, 2)}}</li>
                                                                <li class="current-price">$ {{number_format($product->sale_price, 2)}}</li>
                                                                <li class="discount-price">{{number_format((($product->regular_price - $product->sale_price) / $product->regular_price)*100, 2)}} %</li>
                                                            </ul>
                                                            @else
                                                            <ul>
                                                                <li class="old-price not-cut">$ {{number_format($product->regular_price, 2)}}</li>
                                                            </ul>
                                                            @endif
                                                        </div>
                                                    </div>
                                            </article>

                                        </div>
                                        @endforeach
                                    </div>
                                    <div class="row sort_view" id="title_asc" style="display:none;">
                                        @foreach($products->sortBy('title') as $product)
                                        <div class="col-xl-3 col-md-4 col-sm-6">

                                            <article class="list-product">
                                                <div class="img-block" style="height:250px; display: inline-flex; width:100%; align-items: center; justify-content: center;">
                                                    <a href="/single_product/{{$product -> id}}" class="thumbnail">
                                                        <img class="first-img" src="{{asset($product->image_1)}}" alt="" style="max-height:250px" />
                                                    </a>
                                                    <div class="quick-view">
                                                        <a class="quick_view" href="/single_product/{{$product -> id}}">
                                                            <i class="ion-ios-search-strong"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                @if(date("Y-m-d", strtotime('-7 days')) < $product->updated_at)
                                                    <ul class="product-flag">
                                                        <li class="new">New</li>
                                                    </ul>
                                                    @endif
                                                    <div class="product-decs">
                                                        <a class="inner-link" href="/products/ecommerce/{{$product -> name}}"><span>{{$product->name}}</span></a>
                                                        <h2><a href="/single_product/{{$product -> id}}" class="product-link">{{$product -> title}}</a></h2>

                                                        <div class="pricing-meta">
                                                            @if($product->sale_price != 0)
                                                            <ul>
                                                                <li class="old-price">$ {{number_format($product->regular_price, 2)}}</li>
                                                                <li class="current-price">$ {{number_format($product->sale_price, 2)}}</li>
                                                                <li class="discount-price">{{number_format((($product->regular_price - $product->sale_price) / $product->regular_price)*100, 2)}} %</li>
                                                            </ul>
                                                            @else
                                                            <ul>
                                                                <li class="old-price not-cut">$ {{number_format($product->regular_price, 2)}}</li>
                                                            </ul>
                                                            @endif
                                                        </div>
                                                    </div>
                                            </article>

                                        </div>
                                        @endforeach
                                    </div>
                                    <div class="row sort_view" id="title_desc" style="display:none;">
                                        @foreach($products->sortByDesc('title') as $product)
                                        <div class="col-xl-3 col-md-4 col-sm-6">

                                            <article class="list-product">
                                                <div class="img-block" style="height:250px; display: inline-flex; width:100%; align-items: center; justify-content: center;">
                                                    <a href="/single_product/{{$product -> id}}" class="thumbnail">
                                                        <img class="first-img" src="{{asset($product->image_1)}}" alt="" style="max-height:250px" />
                                                    </a>
                                                    <div class="quick-view">
                                                        <a class="quick_view" href="/single_product/{{$product -> id}}">
                                                            <i class="ion-ios-search-strong"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                @if(date("Y-m-d", strtotime('-7 days')) < $product->updated_at)
                                                    <ul class="product-flag">
                                                        <li class="new">New</li>
                                                    </ul>
                                                    @endif
                                                    <div class="product-decs">
                                                        <a class="inner-link" href="/products/ecommerce/{{$product -> name}}"><span>{{$product->name}}</span></a>
                                                        <h2><a href="/single_product/{{$product -> id}}" class="product-link">{{$product -> title}}</a></h2>

                                                        <div class="pricing-meta">
                                                            @if($product->sale_price != 0)
                                                            <ul>
                                                                <li class="old-price">$ {{number_format($product->regular_price, 2)}}</li>
                                                                <li class="current-price">$ {{number_format($product->sale_price, 2)}}</li>
                                                                <li class="discount-price">{{number_format((($product->regular_price - $product->sale_price) / $product->regular_price)*100, 2)}} %</li>
                                                            </ul>
                                                            @else
                                                            <ul>
                                                                <li class="old-price not-cut">$ {{number_format($product->regular_price, 2)}}</li>
                                                            </ul>
                                                            @endif
                                                        </div>
                                                    </div>
                                            </article>

                                        </div>
                                        @endforeach
                                    </div>
                                    <div class="row sort_view" id="date" style="display:none;">
                                        @foreach($products->sortByDesc('updated_at') as $product)
                                        <div class="col-xl-3 col-md-4 col-sm-6">

                                            <article class="list-product">
                                                <div class="img-block" style="height:250px; display: inline-flex; width:100%; align-items: center; justify-content: center;">
                                                    <a href="/single_product/{{$product -> id}}" class="thumbnail">
                                                        <img class="first-img" src="{{asset($product->image_1)}}" alt="" style="max-height:250px" />
                                                    </a>
                                                    <div class="quick-view">
                                                        <a class="quick_view" href="/single_product/{{$product -> id}}">
                                                            <i class="ion-ios-search-strong"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                @if(date("Y-m-d", strtotime('-7 days')) < $product->updated_at)
                                                    <ul class="product-flag">
                                                        <li class="new">New</li>
                                                    </ul>
                                                    @endif
                                                    <div class="product-decs">
                                                        <a class="inner-link" href="/products/ecommerce/{{$product -> name}}"><span>{{$product->name}}</span></a>
                                                        <h2><a href="/single_product/{{$product -> id}}" class="product-link">{{$product -> title}}</a></h2>

                                                        <div class="pricing-meta">
                                                            @if($product->sale_price != 0)
                                                            <ul>
                                                                <li class="old-price">$ {{number_format($product->regular_price, 2)}}</li>
                                                                <li class="current-price">$ {{number_format($product->sale_price, 2)}}</li>
                                                                <li class="discount-price">{{number_format((($product->regular_price - $product->sale_price) / $product->regular_price)*100, 2)}} %</li>
                                                            </ul>
                                                            @else
                                                            <ul>
                                                                <li class="old-price not-cut">$ {{number_format($product->regular_price, 2)}}</li>
                                                            </ul>
                                                            @endif
                                                        </div>
                                                    </div>
                                            </article>

                                        </div>
                                        @endforeach
                                    </div>
                                    <div class="row sort_view" id="price_asc" style="display:none;">
                                        @foreach($products->sortBy('regular_price') as $product)
                                        <div class="col-xl-3 col-md-4 col-sm-6">

                                            <article class="list-product">
                                                <div class="img-block" style="height:250px; display: inline-flex; width:100%; align-items: center; justify-content: center;">
                                                    <a href="/single_product/{{$product -> id}}" class="thumbnail">
                                                        <img class="first-img" src="{{asset($product->image_1)}}" alt="" style="max-height:250px" />
                                                    </a>
                                                    <div class="quick-view">
                                                        <a class="quick_view" href="/single_product/{{$product -> id}}">
                                                            <i class="ion-ios-search-strong"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                @if(date("Y-m-d", strtotime('-7 days')) < $product->updated_at)
                                                    <ul class="product-flag">
                                                        <li class="new">New</li>
                                                    </ul>
                                                    @endif
                                                    <div class="product-decs">
                                                        <a class="inner-link" href="/products/ecommerce/{{$product -> name}}"><span>{{$product->name}}</span></a>
                                                        <h2><a href="/single_product/{{$product -> id}}" class="product-link">{{$product -> title}}</a></h2>

                                                        <div class="pricing-meta">
                                                            @if($product->sale_price != 0)
                                                            <ul>
                                                                <li class="old-price">$ {{number_format($product->regular_price, 2)}}</li>
                                                                <li class="current-price">$ {{number_format($product->sale_price, 2)}}</li>
                                                                <li class="discount-price">{{number_format((($product->regular_price - $product->sale_price) / $product->regular_price)*100, 2)}} %</li>
                                                            </ul>
                                                            @else
                                                            <ul>
                                                                <li class="old-price not-cut">$ {{number_format($product->regular_price, 2)}}</li>
                                                            </ul>
                                                            @endif
                                                        </div>
                                                    </div>
                                            </article>

                                        </div>
                                        @endforeach
                                    </div>
                                    <div class="row sort_view" id="price_desc" style="display:none;">
                                        @foreach($products->sortByDesc('regular_price') as $product)
                                        <div class="col-xl-3 col-md-4 col-sm-6">

                                            <article class="list-product">
                                                <div class="img-block" style="height:250px; display: inline-flex; width:100%; align-items: center; justify-content: center;">
                                                    <a href="/single_product/{{$product -> id}}" class="thumbnail">
                                                        <img class="first-img" src="{{asset($product->image_1)}}" alt="" style="max-height:250px" />
                                                    </a>
                                                    <div class="quick-view">
                                                        <a class="quick_view" href="/single_product/{{$product -> id}}">
                                                            <i class="ion-ios-search-strong"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                @if(date("Y-m-d", strtotime('-7 days')) < $product->updated_at)
                                                    <ul class="product-flag">
                                                        <li class="new">New</li>
                                                    </ul>
                                                    @endif
                                                    <div class="product-decs">
                                                        <a class="inner-link" href="/products/ecommerce/{{$product -> name}}"><span>{{$product->name}}</span></a>
                                                        <h2><a href="/single_product/{{$product -> id}}" class="product-link">{{$product -> title}}</a></h2>

                                                        <div class="pricing-meta">
                                                            @if($product->sale_price != 0)
                                                            <ul>
                                                                <li class="old-price">$ {{number_format($product->regular_price, 2)}}</li>
                                                                <li class="current-price">$ {{number_format($product->sale_price, 2)}}</li>
                                                                <li class="discount-price">{{number_format((($product->regular_price - $product->sale_price) / $product->regular_price)*100, 2)}} %</li>
                                                            </ul>
                                                            @else
                                                            <ul>
                                                                <li class="old-price not-cut">$ {{number_format($product->regular_price, 2)}}</li>
                                                            </ul>
                                                            @endif
                                                        </div>
                                                    </div>
                                            </article>

                                        </div>
                                        @endforeach
                                    </div>
                                    <div class="row sort_view" id="sale" style="display:none;">
                                        @foreach($products->sortByDesc('sale_price') as $product)
                                        <div class="col-xl-3 col-md-4 col-sm-6">

                                            <article class="list-product">
                                                <div class="img-block" style="height:250px; display: inline-flex; width:100%; align-items: center; justify-content: center;">
                                                    <a href="/single_product/{{$product -> id}}" class="thumbnail">
                                                        <img class="first-img" src="{{asset($product->image_1)}}" alt="" style="max-height:250px" />
                                                    </a>
                                                    <div class="quick-view">
                                                        <a class="quick_view" href="/single_product/{{$product -> id}}">
                                                            <i class="ion-ios-search-strong"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                @if(date("Y-m-d", strtotime('-7 days')) < $product->updated_at)
                                                    <ul class="product-flag">
                                                        <li class="new">New</li>
                                                    </ul>
                                                    @endif
                                                    <div class="product-decs">
                                                        <a class="inner-link" href="/products/ecommerce/{{$product -> name}}"><span>{{$product->name}}</span></a>
                                                        <h2><a href="/single_product/{{$product -> id}}" class="product-link">{{$product -> title}}</a></h2>

                                                        <div class="pricing-meta">
                                                            @if($product->sale_price != 0)
                                                            <ul>
                                                                <li class="old-price">$ {{number_format($product->regular_price, 2)}}</li>
                                                                <li class="current-price">$ {{number_format($product->sale_price, 2)}}</li>
                                                                <li class="discount-price">{{number_format((($product->regular_price - $product->sale_price) / $product->regular_price)*100, 2)}} %</li>
                                                            </ul>
                                                            @else
                                                            <ul>
                                                                <li class="old-price not-cut">$ {{number_format($product->regular_price, 2)}}</li>
                                                            </ul>
                                                            @endif
                                                        </div>
                                                    </div>
                                            </article>

                                        </div>
                                        @endforeach
                                    </div>
                                    <div class="row sort_view" id="stock" style="display:none;">
                                        @foreach($products->sortByDesc('stock_status') as $product)
                                        <div class="col-xl-3 col-md-4 col-sm-6">

                                            <article class="list-product">
                                                <div class="img-block" style="height:250px; display: inline-flex; width:100%; align-items: center; justify-content: center;">
                                                    <a href="/single_product/{{$product -> id}}" class="thumbnail">
                                                        <img class="first-img" src="{{asset($product->image_1)}}" alt="" style="max-height:250px" />
                                                    </a>
                                                    <div class="quick-view">
                                                        <a class="quick_view" href="/single_product/{{$product -> id}}">
                                                            <i class="ion-ios-search-strong"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                @if(date("Y-m-d", strtotime('-7 days')) < $product->updated_at)
                                                    <ul class="product-flag">
                                                        <li class="new">New</li>
                                                    </ul>
                                                    @endif
                                                    <div class="product-decs">
                                                        <a class="inner-link" href="/products/ecommerce/{{$product -> name}}"><span>{{$product->name}}</span></a>
                                                        <h2><a href="/single_product/{{$product -> id}}" class="product-link">{{$product -> title}}</a></h2>

                                                        <div class="pricing-meta">
                                                            @if($product->sale_price != 0)
                                                            <ul>
                                                                <li class="old-price">$ {{number_format($product->regular_price, 2)}}</li>
                                                                <li class="current-price">$ {{number_format($product->sale_price, 2)}}</li>
                                                                <li class="discount-price">{{number_format((($product->regular_price - $product->sale_price) / $product->regular_price)*100, 2)}} %</li>
                                                            </ul>
                                                            @else
                                                            <ul>
                                                                <li class="old-price not-cut">$ {{number_format($product->regular_price, 2)}}</li>
                                                            </ul>
                                                            @endif
                                                        </div>
                                                    </div>
                                            </article>

                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                                <!-- Tab One End -->
                            </div>
                            <!-- Shop Tab Content End -->
                            <!--  Pagination Area Start -->
                            <div class="pro-pagination-style text-center">
                                <ul>
                                    <li>
                                        <a class="prev" href="{{$products->previousPageUrl()}}"><i class="ion-ios-arrow-left"></i></a>
                                    </li>
                                    @if(! ($products->onFirstPage()))
                                    <li><a href="{{$products->url('1')}}">1</a></li>...
                                    @endif
                                    <li><a class="active" href="#">{{$products->currentPage()}}</a></li>
                                    @if($products->hasMorePages())...
                                    <li><a href="{{$products->url($products->lastPage())}}">{{$products->lastPage()}}</a></li>
                                    @endif
                                    <li>
                                        <a class="next" href="{{$products->nextPageUrl()}}"><i class="ion-ios-arrow-right"></i></a>
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
                                            @foreach($categories as $category)
                                            @if(isset($value) && $value == $category->name)
                                            <li>
                                                <div class="sidebar-widget-list-left">
                                                    <input type="checkbox" checked onchange="if (this.value) window.location.href= '/products/category/' +this.value" value="{{$category->name}}" /> <a href="/products/category/{{$category->name}}">{{$category->name}} </a>
                                                    <span class="checkmark"></span>
                                                </div>
                                            </li>
                                            @else
                                            <li>
                                                <div class="sidebar-widget-list-left">
                                                    <input type="checkbox" onchange="if (this.value) window.location.href= '/products/category/' +this.value" value="{{$category->name}}" /> <a href="/products/category/{{$category->name}}">{{$category->name}} </a>
                                                    <span class="checkmark"></span>
                                                </div>
                                            </li>
                                            @endif

                                            @endforeach
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
                                        <button class="btn btn-outline-success btn-sm" onclick="window.location.href = '/products/price/' + document.getElementById('amount').value">Go</button>
                                    </div>
                                    <div id="slider-range"></div>
                                </div>
                            </div>
                            <!-- Sidebar single item -->
                            <div class="sidebar-widget mt-30">
                                <h4 class="pro-sidebar-title">Ecommerce</h4>
                                <div class="sidebar-widget-list">
                                    <ul>
                                        @foreach($ecommerces as $ecommerce)
                                        @if(isset($value) && $value == $ecommerce->name)
                                        <li>
                                            <div class="sidebar-widget-list-left">
                                                <input type="checkbox" checked onchange="if (this.value) window.location.href= '/products/ecommerce/' +this.value" value="{{$ecommerce->name}}" /> <a href="/products/ecommerce/{{$ecommerce->name}}">{{$ecommerce->name}} </a>
                                                <span class="checkmark"></span>
                                            </div>
                                        </li>
                                        @else
                                        <li>
                                            <div class="sidebar-widget-list-left">
                                                <input type="checkbox" onchange="if (this.value) window.location.href= '/products/ecommerce/' +this.value" value="{{$ecommerce->name}}" /> <a href="/products/ecommerce/{{$ecommerce->name}}">{{$ecommerce->name}} </a>
                                                <span class="checkmark"></span>
                                            </div>
                                        </li>
                                        @endif
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                            <!-- Sidebar single item -->
                            <!-- <div class="sidebar-widget tag mt-30">
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
                                </div> -->
                            <!-- Sidebar single item -->
                        </div>
                    </div>
                    <!-- Sidebar Area End -->
                </div>
            </div>
        </div>
        <br /><br />
        <!-- Shop Category Area End -->
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