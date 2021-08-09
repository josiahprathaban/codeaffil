<!doctype html>
<html class="no-js" lang="en">

<meta http-equiv="content-type" content="text/html;charset=utf-8" />

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title> Single Product </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/images/favicon/favicon.png')}}" />
    <link rel="apple-touch-icon" href="apple-touch-icon.html">
    <!-- Place favicon.ico in the root directory -->
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('css/vendor.css')}}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
</head>

<body>
    <div class="main-wrapper">
        <div class="app" id="app">
            @include('admin.layouts.header')
            @include('admin.layouts.sidebar')
            <div class="sidebar-overlay" id="sidebar-overlay"></div>
            <div class="sidebar-mobile-menu-handle" id="sidebar-mobile-menu-handle"></div>
            <div class="mobile-menu-handle"></div>
            <article class="content item-editor-page">
                <div class="title-block">
                    <h3 class="title"> Product Details
                        <span class="sparkline bar" data-type="bar"></span>
                    </h3>
                </div>
                <div class="card card-block">
                    <form method="POST" name="item" enctype="multipart/form-data">
                        @csrf

                        <div class="row form-group">
                            <div class="col-sm-8">
                                <label class="form-control-label text-xs-right"> Title: </label>
                                <input type="text" value="{{$product->title}}" name="title" class="form-control boxed" placeholder="title" disabled>
                            </div>
                            <div class="col-sm-4">
                                <label class="form-control-label text-xs-right">Brand: </label>

                                @foreach ($brands as $brand )
                                @if ($product->brand_id==$brand->id)
                                <input type="text" value="{{$brand->name}}" class="form-control boxed" disabled>
                                @endif

                                @endforeach

                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-sm-12">
                                <label class="form-control-label text-xs-right"> Affiliate Link: </label>
                                <input type="text" value="{{$product->affiliate_link}}" class="form-control boxed" name="affiliate_link" disabled>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-sm-4">
                                <label class="form-control-label text-xs-right"> Regular Price: </label>
                                <input type="text" class="form-control boxed" value="{{$product->regular_price}}" disabled>
                            </div>

                            <div class="col-sm-4">
                                <label class="form-control-label text-xs-right"> Sale Price: </label>
                                <input type="text" class="form-control boxed" value="{{$product->sale_price}}" disabled>
                            </div>
                            <div class="col-sm-4">
                                <label class="form-control-label text-xs-right">Ecommerce: </label>
                                @foreach ($ecommerces as $ecommerce )
                                @if ($product->ecommerce_id==$ecommerce->id)
                                <input type="text" value="{{$ecommerce->name}}" class="form-control boxed" disabled>
                                @endif

                                @endforeach
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-sm-6">

                                <label class="form-control-label text-xs-right">Subcategory: </label>
                                @foreach ($subcategories as $subcategory )
                                @if ($product->subcategory_id==$subcategory->id)
                                <input type="text" value="{{$subcategory->name}}" class="form-control boxed" disabled>
                                @endif

                                @endforeach

                                <label class="form-control-label text-xs-right"> Short Description: </label>
                                <textarea class="form-control boxed" name="short_description" disabled rows="5">{{$product->short_description}}</textarea>
                            </div>
                            <div class="col-sm-6">
                                <label class="form-control-label text-xs-right">Description: </label>
                                <textarea class="form-control boxed" name="description" disabled rows="8">{{$product->description}}</textarea>
                            </div>
                        </div>
                        <div class="row form-group">

                            @foreach ($images as $image )
                            @if ($image->product_id == $product->id)
                            <div class="col-sm-3">
                                <label class="form-control-label text-xs-right"> Image1: </label>

                                <img src="{{asset($image->image_1)}}" alt="" style="max-height:130px; margin:20px; border: 2px solid #85CE36;">


                            </div>
                            <div class="col-sm-3">
                                <label class="form-control-label text-xs-right"> Images2 </label>
                                <img src="{{asset($image->image_2)}}" alt="" style="max-height:130px; margin:20px; border: 2px solid #85CE36;">
                            </div>
                            <div class="col-sm-3">
                                <label class="form-control-label text-xs-right"> Images3: </label>
                                <img src="{{asset($image->image_3)}}" alt="" style="max-height:130px; margin:20px; border: 2px solid #85CE36;">
                            </div>
                            <div class="col-sm-3">
                                <label class="form-control-label text-xs-right"> Images4: </label>
                                <img src="{{asset($image->image_4)}}" alt="" style="max-height:130px; margin:20px; border: 2px solid #85CE36;">
                            </div>
                        </div>
                        @endif
                        @endforeach
                </div>
                </form>
        </div>
        </article>

        <script src="{{ asset('js/')}}/vendor.js"></script>
        <script src="{{ asset('js/')}}/app.js"></script>
</body>

</html>