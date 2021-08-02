<!doctype html>
<html class="no-js" lang="en">

<meta http-equiv="content-type" content="text/html;charset=utf-8" />

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title> Single Product </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="apple-touch-icon.html">
    <!-- Place favicon.ico in the root directory -->
    <link rel="stylesheet" id="theme-style" href="{{asset('css/app.css')}}">
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
                <form name="item">
                    <div class="card card-block">
                        <div class="form-group row">
                            <label class="col-sm-2 form-control-label text-xs-right"> Title: </label>
                            <div class="col-sm-10">
                                <input type="text" name="title" class="form-control boxed" value="{{$product->title}}" placeholder="" disabled>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 form-control-label text-xs-right"> Short Description: </label>
                            <div class="col-sm-10">
                                <textarea class="form-control boxed" name="short_description" id="" rows="3" disabled>{{$product->short_description}}</textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 form-control-label text-xs-right"> Description: </label>
                            <div class="col-sm-10">
                                <textarea class="form-control boxed" name="description" id="" rows="8" disabled>{{$product->description}}</textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 form-control-label text-xs-right"> Category: </label>
                            <div class="col-sm-10">
                                <input type="text" name="title" class="form-control boxed" value="{{$product->title}}" placeholder="" disabled>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 form-control-label text-xs-right"> Sub-Category: </label>
                            <div class="col-sm-10">
                                <input type="text" name="title" class="form-control boxed" value="{{$product->title}}" placeholder="" disabled>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 form-control-label text-xs-right"> Brand: </label>
                            <div class="col-sm-10">
                                <input type="text" name="title" class="form-control boxed" value="{{$product->title}}" placeholder="" disabled>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 form-control-label text-xs-right"> Ecommece: </label>
                            <div class="col-sm-10">
                                <input type="text" name="title" class="form-control boxed" value="{{$product->title}}" placeholder="" disabled>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 form-control-label text-xs-right"> Regular Price: </label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control boxed" value="{{$product->regular_price}}" name="regular_price" placeholder="" disabled>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 form-control-label text-xs-right"> Sale Price: </label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control boxed" name="sale_price" value="{{$product->sale_price}}" placeholder="" disabled>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 form-control-label text-xs-right"> Affiliate Link: </label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control boxed" name="affiliate_link" value="{{$product->affiliate_link}}" placeholder="" disabled>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 form-control-label text-xs-right"> Images: </label>
                            <div class="col-sm-10">
                                <div class="images-container">
                                    <div class="image-container">
                                        <div class="controls">
                                            <a href="#" class="control-btn move">
                                                <i class="fa fa-arrows"></i>
                                            </a>
                                            <!--
								-->
                                            <a href="#" class="control-btn star">
                                                <i class="fa"></i>
                                            </a>
                                            <!--
								-->
                                            <a href="#" class="control-btn remove" data-toggle="modal" data-target="#confirm-modal">
                                                <i class="fa fa-trash-o"></i>
                                            </a>
                                        </div>
                                        <div class="image" style="background-image:url('../../s3.amazonaws.com/uifaces/faces/twitter/brad_frost/128.jpg')"></div>
                                    </div>
                                    <div class="image-container">
                                        <div class="controls">
                                            <a href="#" class="control-btn move">
                                                <i class="fa fa-arrows"></i>
                                            </a>
                                            <!--
								-->
                                            <a href="#" class="control-btn star">
                                                <i class="fa"></i>
                                            </a>
                                            <!--
								-->
                                            <a href="#" class="control-btn remove" data-toggle="modal" data-target="#confirm-modal">
                                                <i class="fa fa-trash-o"></i>
                                            </a>
                                        </div>
                                        <div class="image" style="background-image:url('../../s3.amazonaws.com/uifaces/faces/twitter/_everaldo/128.jpg')"></div>
                                    </div>
                                    <div class="image-container">
                                        <div class="controls">
                                            <a href="#" class="control-btn move">
                                                <i class="fa fa-arrows"></i>
                                            </a>
                                            <!--
								-->
                                            <a href="#" class="control-btn star">
                                                <i class="fa"></i>
                                            </a>
                                            <!--
								-->
                                            <a href="#" class="control-btn remove" data-toggle="modal" data-target="#confirm-modal">
                                                <i class="fa fa-trash-o"></i>
                                            </a>
                                        </div>
                                        <div class="image" style="background-image:url('../../s3.amazonaws.com/uifaces/faces/twitter/eduardo_olv/128.jpg')"></div>
                                    </div>
                                    <a href="#" class="add-image" data-toggle="modal" data-target="#modal-media">
                                        <div class="image-container new">
                                            <div class="image">
                                                <i class="fa fa-plus"></i>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-10 col-sm-offset-2">
                                <a href="/all-products" class="btn btn-oval btn-warning">Close</a>
                            </div>
                        </div>
                    </div>
                </form>
            </article>




            <script src="js/vendor.js"></script>
            <script src="js/app.js"></script>
</body>

</html>