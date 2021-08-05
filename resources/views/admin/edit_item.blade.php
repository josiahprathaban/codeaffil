<!doctype html>
<html class="no-js" lang="en">

<meta http-equiv="content-type" content="text/html;charset=utf-8" />

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title> Edit Product </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="apple-touch-icon.html">
    <!-- Place favicon.ico in the root directory -->
    <link rel="stylesheet"  href="{{asset('css/app.css')}}">
    
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
                    <h3 class="title"> Edit Product Details
                        <span class="sparkline bar" data-type="bar"></span>
                    </h3>
                </div>
                @if (Session::has('product_updated'))
                <div class="alert alert-success" role="alert">
                    {{ Session::get('product_updated') }}
                </div>
                @endif
                <div class="card card-block">
                    <form method="POST" action="{{ route('product.update')}}" name="item" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="id" value="{{$product->id}}">
                        <div class="row form-group">
                            <div class="col-sm-6">
                                <label class="form-control-label text-xs-right"> Title: </label>
                                <input type="text" value="{{$product->title}}" name="title" class="form-control boxed" placeholder="title">
                            </div>
                            <div class="col-sm-2">
                                <div class="form-check form-check-inline mt-5">
                                    @if ($product->stock_status==1)
                                    <input class="form-check-input" type="checkbox" name="stock_status" checked="checked">
                                    @else
                                    <input class="form-check-input" name="stock_status" type="checkbox" >
                                    @endif
                                    <label class="form-check-label" for="inlineCheckbox1">In Stock</label>
                                </div>


                            </div>
                            <div class="col-sm-4">
                                <label class="form-control-label text-xs-right">Brand: </label>
                                <select name="brand_id" class="c-select form-control boxed">
                                    <option>Select Brand</option>
                                    @foreach ($brands as $brand )
                                    @if ($product->brand_id == $brand->id)
                                    <option selected value="{{$brand->id}}">{{$brand->name}}</option>
                                    @else
                                    <option value="{{$brand->id}}">{{$brand->name}}</option>
                                    @endif
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-sm-12">
                                <label class="form-control-label text-xs-right"> Affiliate Link: </label>
                                <input type="text" value="{{$product->affiliate_link}}" class="form-control boxed" name="affiliate_link" placeholder="">
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-sm-4">
                                <label class="form-control-label text-xs-right"> Regular Price: </label>
                                <input type="text" value="{{$product->regular_price}}" class="form-control boxed" name="regular_price" placeholder="">
                            </div>

                            <div class="col-sm-4">
                                <label class="form-control-label text-xs-right"> Sale Price: </label>
                                <input type="text" value="{{$product->sale_price}}" class="form-control boxed" name="sale_price" placeholder="">
                            </div>
                            <div class="col-sm-4">
                                <label class="form-control-label text-xs-right">Ecommerce: </label>
                                <select name="ecommerce_id" class="c-select form-control boxed">
                                    <option selected>Select Ecommerce</option>
                                    @foreach ($ecommerces as $ecommerce )
                                    @if ($product->ecommerce_id == $ecommerce->id)
                                    <option selected value="{{$ecommerce->id}}">{{$ecommerce->name}}</option>
                                    @else
                                    <option value="{{$ecommerce->id}}">{{$ecommerce->name}}</option>
                                    @endif
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-sm-6">

                                <label class="form-control-label text-xs-right">Subcategory: </label>
                                <select name="subcategory_id" class="c-select form-control boxed">
                                    <option selected>Select Subcategory</option>
                                    @foreach ($subcategories as $subcategory)
                                    @if ($product->subcategory_id == $subcategory->id)
                                    <option selected value="{{$subcategory->id}}">{{$subcategory->name}}</option>
                                    @else
                                    <option value="{{$subcategory->id}}">{{$subcategory->name}}</option>
                                    @endif
                                    @endforeach
                                </select>

                                <label class="form-control-label text-xs-right"> Short Description: </label>
                                <textarea class="form-control boxed" name="short_description" id="" rows="5">{{$product->short_description}}</textarea>
                            </div>
                            <div class="col-sm-6">
                                <label class="form-control-label text-xs-right">Description: </label>
                                <textarea class="form-control boxed" name="description" id="" rows="8">{{ $product->description }}</textarea>
                            </div>
                        </div>

                        @foreach ($images as $image )
                        @if ($image->product_id == $product->id)
                        <div class="row form-group">
                            <div class="col-sm-3">
                            <input type="hidden" name="product_id" value="{{ $image->product_id }}">
                                <label class="form-control-label text-xs-right"> Image1: </label>
                                <input name="image1" type="file" class="form-control boxed" id="image1">
                                <img id="preview1" src="{{asset($image->image_1)}}" onerror="this.style.display='none'" onload="this.style.display=''" style="max-height:130px; margin:20px; border: 2px solid #85CE36;" />
                            </div>
                            <div class="col-sm-3">
                                <label class="form-control-label text-xs-right"> Images2 </label>
                                <input name="image2" type="file" class="form-control boxed" id="image2">
                                <img id="preview2" src="{{asset($image->image_2)}}" onerror="this.style.display='none'" onload="this.style.display=''" style="max-height:130px; margin:20px; border: 2px solid #85CE36;" />
                            </div>
                            <div class="col-sm-3">
                                <label class="form-control-label text-xs-right"> Images3 </label>
                                <input name="image3" type="file" class="form-control boxed" id="image3">
                                <img id="preview3" src="{{asset($image->image_3)}}" onerror="this.style.display='none'" onload="this.style.display=''" style="max-height:130px; margin:20px; border: 2px solid #85CE36;" />
                            </div>
                            <div class="col-sm-3">
                                <label class="form-control-label text-xs-right"> Images4 </label>
                                <input name="image4" type="file" class="form-control boxed" id="image4">
                                <img id="preview4" src="{{asset($image->image_4)}}" alt="your image" onerror="this.style.display='none'" onload="this.style.display=''" style="max-height:130px; margin:20px; border: 2px solid #85CE36;" />
                            </div>
                        </div>
                        @endif
                        @endforeach
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