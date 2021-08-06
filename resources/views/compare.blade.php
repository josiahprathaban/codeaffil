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
            <!-- Compare area start -->
            @foreach($products as $product)
            @if($loop->first)
            <div style="text-align:center; margin-top: 50px">
                <img src="{{asset($product->image_1)}}" style="width:auto; height:500px; max-height: 90vw; max-width:90%; margin-bottom: 30px" alt="">
                <h2>{{$product->title}}</h2>
                <p>{{$product->short_description}}</p>

            </div>
            @endif
            @endforeach

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
                                                <td class="first-column">Ecommerce Site</td>
                                                @foreach($products as $product)
                                                <td class="product-image-title">
                                                    <a href="/products/ecommerce/{{$product->name}}" class="image"><img src="{{asset($product->logo)}}" alt="Compare Product" height="75px" /></a>
                                                </td>
                                                @endforeach
                                            </tr>
                                            <tr>
                                                <td class="first-column">Price</td>
                                                @foreach($products as $product)
                                                <td class="pro-price">
                                                @if($product->sale_price != 0)
                                                    <ul>
                                                        <li class="old-price" style="font-size:20px;">$ {{number_format($product->regular_price, 2)}}</li>
                                                        <li class="current-price" style="font-size:30px; padding:10px">$ {{number_format($product->sale_price, 2)}}</li>
                                                        <li class="discount-price">{{number_format((($product->regular_price - $product->sale_price) / $product->regular_price)*100, 2)}} %</li>
                                                    </ul>
                                                @else
                                                    <ul>
                                                        <li class="old-price not-cut" style="font-size:30px; font-weight:600">$ {{number_format($product->regular_price, 2)}}</li>
                                                    </ul>
                                                @endif
                                                </td>
                                                @endforeach
                                            </tr>
                                            <tr>
                                                <td class="first-column">Stock</td>
                                                @foreach($products as $product)
                                                @if($product->stock_status == 1)
                                                <td style="color:#4fb68d">Available</td> 
                                                @else
                                                <td style="color:#ef1e1e">Out of stock </td> 
                                                @endif
                                                @endforeach
                                            </tr>
                                            <tr>
                                                <td class="first-column">Description</td>
                                                @foreach($products as $product)
                                                <td class="pro-desc" style="text-align:left">
                                                @foreach(explode(".", $product->description) as $points)
                                                @if(!($loop -> last))
                                                <li>{{$points}}</li>
                                                @endif
                                                @endforeach
                                                </td>
                                                @endforeach
                                            </tr>
                                            <tr>
                                                <td class="first-column">Purchase</td>
                                                @foreach($products as $product)
                                                <td class="pro-addtocart">
                                                @if(session('user'))
                                                    <a href="{{$product->affiliate_link}}" target="_blank" class="add-to-cart"> Buy Now </a>
                                                @else
                                                    <a href="/login/redirect" class="add-to-cart"> Buy Now </a>
                                                @endif
                                                </td>
                                                @endforeach
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
