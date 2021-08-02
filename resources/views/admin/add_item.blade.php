<!doctype html>
<html class="no-js" lang="en">

<meta http-equiv="content-type" content="text/html;charset=utf-8" />

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title> ModularAdmin - Free Dashboard Theme | HTML Version </title>
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
                    <h3 class="title"> Add new item
                        <span class="sparkline bar" data-type="bar"></span>
                    </h3>
                </div>
                @if (Session::has('added'))
                <div class="alert alert-success" role="alert">
                    {{ Session::get('added') }}
                </div>
                @endif
                <form method="POST" action="{{ route('product.addsubmit')}}" name="item" enctype="multipart/form-data">
                    @csrf
                    <div class="card card-block">
                        <div class="form-group row">
                            <label class="col-sm-2 form-control-label text-xs-right"> Title: </label>
                            <div class="col-sm-10">
                                <input type="text" name="title" class="form-control boxed" placeholder="">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 form-control-label text-xs-right"> Short Description: </label>
                            <div class="col-sm-10">
                                <textarea class="form-control boxed" name="short_description" id="" rows="3"></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 form-control-label text-xs-right"> Description: </label>
                            <div class="col-sm-10">
                                <textarea class="form-control boxed" name="description" id="" rows="8"></textarea>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 form-control-label text-xs-right"> Sub-Category: </label>
                            <div class="col-sm-10">
                                <select name="subcategory_id" class="c-select form-control boxed">
                                    <option selected>Select Sub-Category</option>
                                    @foreach ($subcategories as $subcategory )
                                    <option value="{{$subcategory->id}}">{{$subcategory->name}}</option>
                                    @endforeach

                                </select>
                                <a href="#" class="add-image" data-toggle="modal" data-target="#modal-add-category">
                                    <div class="image-container new">
                                        <div class="image">
                                            <i class="fa fa-plus"></i>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 form-control-label text-xs-right"> Brand: </label>
                            <div class="col-sm-10">
                                <select name="brand_id" class="c-select form-control boxed">
                                    <option selected>Select Brand</option>
                                    @foreach ($brands as $brand )
                                    <option value="{{$brand->id}}">{{$brand->name}}</option>
                                    @endforeach
                                </select>
                                <a href="#" class="add-image" data-toggle="modal" data-target="#modal-add-brand">
                                    <div class="image-container new">
                                        <div class="image">
                                            <i class="fa fa-plus"></i>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 form-control-label text-xs-right"> Ecommece: </label>
                            <div class="col-sm-10">
                                <select name="ecommerce_id" class="c-select form-control boxed">
                                    <option selected>Select Ecommerce</option>
                                    @foreach ($ecommerces as $ecommerce )
                                    <option value="{{$ecommerce->id}}">{{$ecommerce->name}}</option>
                                    @endforeach
                                </select>
                                <a href="#" class="add-image" data-toggle="modal" data-target="#modal-add-ecommece">
                                    <div class="image-container new">
                                        <div class="image">
                                            <i class="fa fa-plus"></i>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 form-control-label text-xs-right"> Regular Price: </label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control boxed" name="regular_price" placeholder="">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 form-control-label text-xs-right"> Sale Price: </label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control boxed" name="sale_price" placeholder="">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 form-control-label text-xs-right"> Affiliate Link: </label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control boxed" name="affiliate_link" placeholder="">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 form-control-label text-xs-right"> Images: </label>
                            <div class="col-sm-10">
                                <div class="form-group">
                                    <label class="col-sm-2 form-control-label text-xs-right"> Image1 </label>
                                    <input name="image1" type="file" class="form-control-file" id="exampleFormControlFile1">
                                    <label class="col-sm-2 form-control-label text-xs-right"> Images2 </label>
                                    <input name="image2" type="file" class="form-control-file" id="exampleFormControlFile1">
                                    <label class="col-sm-2 form-control-label text-xs-right"> Images3 </label>
                                    <input name="image3" type="file" class="form-control-file" id="exampleFormControlFile1">
                                    <label class="col-sm-2 form-control-label text-xs-right"> Images4 </label>
                                    <input name="image4" type="file" class="form-control-file" id="exampleFormControlFile1">

                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-10 col-sm-offset-2">
                                <button type="submit" class="btn btn-primary"> Submit </button>
                            </div>
                        </div>
                    </div>
                </form>
            </article>

            <div class="modal fade" id="modal-add-category">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Add New Category</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                <span class="sr-only">Close</span>
                            </button>
                        </div>
                        <div class="card card-block sameheight-item">
                            <form role="form">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Category</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter Category Name">
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary">Add</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
            </div>

            <div class="modal fade" id="modal-add-brand">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Add New Brand</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                <span class="sr-only">Close</span>
                            </button>
                        </div>
                        <div class="card card-block sameheight-item">
                            @if (Session::has('added'))
                            <div class="alert alert-success" role="alert">
                                {{ Session::get('badded') }}
                            </div>
                            @endif
                            <form role="form" method="post" action="{{ route('brand.addsubmit')}}">
                                @csrf
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Brand</label>
                                    <input type="text" name="brand_name" class="form-control" id="exampleInputEmail1" placeholder="Enter Brand Name">
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary">Add</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
            </div>

            <div class="modal fade" id="modal-add-ecommece">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Add New Ecommece</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                <span class="sr-only">Close</span>
                            </button>
                        </div>
                        <div class="card card-block sameheight-item">
                            <form role="form">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Ecommece</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter Ecommece Name">
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary">Add</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
            </div>

            <div class="modal fade" id="modal-media">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Media Library</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                <span class="sr-only">Close</span>
                            </button>
                        </div>
                        <div class="modal-body modal-tab-container">
                            <ul class="nav nav-tabs modal-tabs" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link" href="#gallery" data-toggle="tab" role="tab">Gallery</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active" href="#upload" data-toggle="tab" role="tab">Upload</a>
                                </li>
                            </ul>
                            <div class="tab-content modal-tab-content">
                                <div class="tab-pane fade" id="gallery" role="tabpanel">
                                    <div class="images-container">
                                        <div class="row">
                                            <div class="col-6 col-sm-4 col-md-4 col-lg-3">
                                                <div class="image-container">
                                                    <div class="image" style="background-image:url('../../s3.amazonaws.com/uifaces/faces/twitter/brad_frost/128.jpg')"></div>
                                                </div>
                                            </div>
                                            <div class="col-6 col-sm-4 col-md-4 col-lg-3">
                                                <div class="image-container">
                                                    <div class="image" style="background-image:url('../../s3.amazonaws.com/uifaces/faces/twitter/_everaldo/128.jpg')"></div>
                                                </div>
                                            </div>
                                            <div class="col-6 col-sm-4 col-md-4 col-lg-3">
                                                <div class="image-container">
                                                    <div class="image" style="background-image:url('../../s3.amazonaws.com/uifaces/faces/twitter/eduardo_olv/128.jpg')"></div>
                                                </div>
                                            </div>
                                            <div class="col-6 col-sm-4 col-md-4 col-lg-3">
                                                <div class="image-container">
                                                    <div class="image" style="background-image:url('../../s3.amazonaws.com/uifaces/faces/twitter/brad_frost/128.jpg')"></div>
                                                </div>
                                            </div>
                                            <div class="col-6 col-sm-4 col-md-4 col-lg-3">
                                                <div class="image-container">
                                                    <div class="image" style="background-image:url('../../s3.amazonaws.com/uifaces/faces/twitter/_everaldo/128.jpg')"></div>
                                                </div>
                                            </div>
                                            <div class="col-6 col-sm-4 col-md-4 col-lg-3">
                                                <div class="image-container">
                                                    <div class="image" style="background-image:url('../../s3.amazonaws.com/uifaces/faces/twitter/eduardo_olv/128.jpg')"></div>
                                                </div>
                                            </div>
                                            <div class="col-6 col-sm-4 col-md-4 col-lg-3">
                                                <div class="image-container">
                                                    <div class="image" style="background-image:url('../../s3.amazonaws.com/uifaces/faces/twitter/brad_frost/128.jpg')"></div>
                                                </div>
                                            </div>
                                            <div class="col-6 col-sm-4 col-md-4 col-lg-3">
                                                <div class="image-container">
                                                    <div class="image" style="background-image:url('../../s3.amazonaws.com/uifaces/faces/twitter/_everaldo/128.jpg')"></div>
                                                </div>
                                            </div>
                                            <div class="col-6 col-sm-4 col-md-4 col-lg-3">
                                                <div class="image-container">
                                                    <div class="image" style="background-image:url('../../s3.amazonaws.com/uifaces/faces/twitter/eduardo_olv/128.jpg')"></div>
                                                </div>
                                            </div>
                                            <div class="col-6 col-sm-4 col-md-4 col-lg-3">
                                                <div class="image-container">
                                                    <div class="image" style="background-image:url('../../s3.amazonaws.com/uifaces/faces/twitter/brad_frost/128.jpg')"></div>
                                                </div>
                                            </div>
                                            <div class="col-6 col-sm-4 col-md-4 col-lg-3">
                                                <div class="image-container">
                                                    <div class="image" style="background-image:url('../../s3.amazonaws.com/uifaces/faces/twitter/_everaldo/128.jpg')"></div>
                                                </div>
                                            </div>
                                            <div class="col-6 col-sm-4 col-md-4 col-lg-3">
                                                <div class="image-container">
                                                    <div class="image" style="background-image:url('../../s3.amazonaws.com/uifaces/faces/twitter/eduardo_olv/128.jpg')"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade active in" id="upload" role="tabpanel">
                                    <div class="upload-container">
                                        <div id="dropzone">
                                            <form action="https://modularcode.io/" method="POST" enctype="multipart/form-data" class="dropzone needsclick dz-clickable" id="demo-upload">
                                                <div class="dz-message-block">
                                                    <div class="dz-message needsclick"> Drop files here or click to upload. </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Insert Selected</button>
                        </div>
                    </div>
                    <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
            </div>
            <!-- /.modal -->
            <div class="modal fade" id="confirm-modal">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">
                                <i class="fa fa-warning"></i> Alert
                            </h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <p>Are you sure want to do this?</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary" data-dismiss="modal">Yes</button>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                        </div>
                    </div>
                    <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
            </div>
            <!-- /.modal -->
        </div>
    </div>


    <script src="js/vendor.js"></script>
    <script src="js/app.js"></script>
</body>

</html>