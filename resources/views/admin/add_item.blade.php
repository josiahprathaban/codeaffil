<!doctype html>
<html class="no-js" lang="en">

<meta http-equiv="content-type" content="text/html;charset=utf-8" />

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title> Add product </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
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




                    <h3 class="title"> Add new item
                        <span class="sparkline bar" data-type="bar"></span>
                    </h3>
                </div>
                @if (Session::has('added'))
                <div class="alert alert-success" role="alert">
                    {{ Session::get('added') }}
                </div>
                @endif

                <div class="card card-block">

                    <form method="POST" action="{{ route('product.addsubmit')}}" name="item" enctype="multipart/form-data">
                        @csrf

                        <div class="row form-group">
                            <div class="col-sm-8">
                                <label class="form-control-label text-xs-right"> Title: </label>
                                <input type="text" name="title" class="form-control boxed" placeholder="title">
                                @error('title')
                                <div class="text-danger" role="alert">{{$message}}</div>
                                @enderror


                            </div>
                            <div class="col-sm-4">
                                <label class="form-control-label text-xs-right">Brand: </label>
                                <select name="brand_id" class="c-select form-control boxed">
                                    <option value="" selected>Select Brand</option>
                                    @foreach ($brands as $brand )
                                    <option value="{{$brand->id}}">{{$brand->name}}</option>
                                    @endforeach
                                    </select>
                                    @error('brand_id')
                                <div class="text-danger" role="alert">{{$message}}</div>
                                @enderror

                                
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-sm-12">
                                <label class="form-control-label text-xs-right"> Affiliate Link: </label>
                                <input type="text" class="form-control boxed" name="affiliate_link" placeholder="">
                                @error('brand_id')
                                <div class="text-danger" role="affiliate_link">{{$message}}</div>
                                @enderror

                                
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-sm-4">
                                <label class="form-control-label text-xs-right"> Regular Price: </label>
                                <input type="text" class="form-control boxed" name="regular_price" placeholder="">
                                @error('regular_price')
                                <div class="text-danger" role="alert">{{$message}}</div>
                                @enderror

                                
                            </div>

                            <div class="col-sm-4">
                                <label class="form-control-label text-xs-right"> Sale Price: </label>
                                <input type="text" value="0" class="form-control boxed" name="sale_price" placeholder="">
                                @error('sale_price')
                                <div class="text-danger" role="alert">{{$message}}</div>
                                @enderror
                            </div>
                            <div class="col-sm-4">
                                <label class="form-control-label text-xs-right">Ecommerce: </label>
                                <select name="ecommerce_id" class="c-select form-control boxed">
                                    <option value="" selected>Select Ecommerce</option>
                                    @foreach ($ecommerces as $ecommerce )
                                    <option value="{{$ecommerce->id}}">{{$ecommerce->name}}</option>
                                    @endforeach
                                </select>
                                @error('ecommerce_id')
                                <div class="text-danger" role="alert">{{$message}}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-sm-6">

                                <label class="form-control-label text-xs-right">Subcategory: </label>
                                <select name="subcategory_id" class="c-select form-control boxed">
                                    <option value="" selected>Select Subcategory</option>
                                    @foreach ($subcategories as $subcategory )
                                    <option value="{{$subcategory->id}}">{{$subcategory->name}}</option>
                                    @endforeach

                                </select>
                                @error('subcategory_id')
                                <div class="text-danger" role="alert">{{$message}}</div>
                                @enderror

                                <label class="form-control-label text-xs-right"> Short Description: </label>
                                <textarea class="form-control boxed" name="short_description" id="" rows="5"></textarea>
                                @error('short_description')
                                <div class="text-danger" role="alert">{{$message}}</div>
                                @enderror
                            </div>
                            <div class="col-sm-6">
                                <label class="form-control-label text-xs-right">Description: </label>
                                <textarea class="form-control boxed" name="description" id="" rows="8"></textarea>
                                @error('short_description')
                                <div class="text-danger" role="alert">{{$message}}</div>
                                @enderror
                            </div>
                        </div>


                        <div class="row form-group">
                            <div class="col-sm-3">

                                <label class="form-control-label text-xs-right"> Image1: </label>
                                <input name="image1" type="file" class="form-control boxed" id="image1">
                                @error('image1')
                                <div class="text-danger" role="alert">{{$message}}</div>
                                @enderror
                                <img id="preview1" src="#" onerror="this.style.display='none'" onload="this.style.display=''" style="max-height:130px; margin:20px; border: 2px solid #85CE36;" />
                            </div>
                            <div class="col-sm-3">
                                <label class="form-control-label text-xs-right"> Images2 </label>
                                <input name="image2" type="file" class="form-control boxed" id="image2">
                                @error('image2')
                                <div class="text-danger" role="alert">{{$message}}</div>
                                @enderror
                                <img id="preview2" src="#" onerror="this.style.display='none'" onload="this.style.display=''" style="max-height:130px; margin:20px; border: 2px solid #85CE36;" />
                            </div>
                            <div class="col-sm-3">
                                <label class="form-control-label text-xs-right"> Images3 </label>
                                <input name="image3" type="file" class="form-control boxed" id="image3">
                                @error('image3')
                                <div class="text-danger" role="alert">{{$message}}</div>
                                @enderror
                                <img id="preview3" src="#" onerror="this.style.display='none'" onload="this.style.display=''" style="max-height:130px; margin:20px; border: 2px solid #85CE36;" />
                            </div>
                            <div class="col-sm-3">
                                <label class="form-control-label text-xs-right"> Images4 </label>
                                <input name="image4" type="file" class="form-control boxed" id="image4">
                                @error('image4')
                                <div class="text-danger" role="alert">{{$message}}</div>
                                @enderror
                                <img id="preview4" src="#" alt="your image" onerror="this.style.display='none'" onload="this.style.display=''" style="max-height:130px; margin:20px; border: 2px solid #85CE36;" />
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-sm-12 ">
                                <button type="submit" class="btn btn-primary float-right"> Submit </button>
                            </div>
                        </div>
                </div>

                </form>

            </article>
        </div>
    </div>
    <script>
        image1.onchange = evt => {
            const [file] = image1.files
            if (file) {
                preview1.src = URL.createObjectURL(file)
            }
        }
        image2.onchange = evt => {
            const [file] = image2.files
            if (file) {
                preview2.src = URL.createObjectURL(file)
            }
        }
        image3.onchange = evt => {
            const [file] = image3.files
            if (file) {
                preview3.src = URL.createObjectURL(file)
            }
        }
        image4.onchange = evt => {
            const [file] = image4.files
            if (file) {
                preview4.src = URL.createObjectURL(file)
            }
        }
    </script>

    <script src="{{ asset('js/')}}/vendor.js"></script>
    <script src="{{ asset('js/')}}/app.js"></script>
</body>

</html>