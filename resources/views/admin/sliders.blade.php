<!doctype html>
<html class="no-js" lang="en">

<meta http-equiv="content-type" content="text/html;charset=utf-8" />

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title> All SubCategories </title>
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
            <article class="content items-list-page">
                <div class="title-search-block">
                    <div class="title-block">
                        <div class="row">
                            <div class="col-md-6">
                                <h3 class="title"> Home Page Sliders
                                    <a href="#" data-toggle="modal" data-target="#modal-add-ecommece" class="btn btn-primary btn-sm rounded-s"> Add New </a>
                                    <!--
				 -->
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>

                @if (Session::has('sl_added'))
                <div class="alert alert-success" role="alert">
                    {{ Session::get('sl_added') }}
                </div>
                @endif
                @if (Session::has('c_deleted'))
                <div class="alert alert-success" role="alert">
                    {{ Session::get('sc_deleted') }}
                </div>
                @endif
                @if (Session::has('sl_updated'))
                <div class="alert alert-success" role="alert">
                    {{ Session::get('sl_updated') }}
                </div>
                @endif


                <section class="section">
                    <div class="row">
                        @foreach ($sliders as $slider )
                        

                        <!-- /.col-xl-4 -->
                        <div class="col-xl-4" >
                            
                            <div class="card card-primary">
                                <div class="card-header">
                                    <div class="header-block">
                                        <p class="title">Slider: {{ $slider->id }} </p>
                                        <ul class="item-list striped">
                                            <div class="item-col fixed item-col-actions-dropdown">
                                                <div class="item-actions-dropdown">
                                                   
                                                    <div class="item-actions-block">
                                                        <ul class="item-actions-list">

                                                            
                                                            
                                                            <div class="modal fade" id="modal-add-update-{{$slider->id}}">
                                                                <div class="modal-dialog modal-lg">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h4 class="modal-title">Update Slider</h4>
                                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                <span aria-hidden="true">&times;</span>
                                                                                <span class="sr-only">Close</span>
                                                                            </button>
                                                                        </div>
                                                                        <div class="card card-block sameheight-item">
                                                                            <form role="form" method="post" enctype="multipart/form-data" action="{{route('update.slider')}}">
                                                                                @csrf
                                                                                <input type="hidden" name="id" value="{{$slider->id}}">
                                                                                <div class="form-group">
                                                                                    <label class="float-left">Description:</label>

                                                                                    <textarea class="form-control boxed" name="description" id="" rows="4">{{$slider->description}}</textarea>
                                                                                </div>
                                                                                <div class="form-group ">

                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label class="float-left"> Image: </label>
                                                                                    <input name="image" type="file" class="form-control boxed" id="image1">
                                                                                    <img id="preview1" src="{{asset($slider->image)}}" onerror="this.style.display='none'" onload="this.style.display=''" style="max-height:130px; margin:20px; border: 2px solid #85CE36;" />
                                                                                    
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <button type="submit" class="btn btn-primary float-right">Update</button>
                                                                                </div>
                                                                            </form>
                                                                        </div>
                                                                    </div>


                                                                    <!-- /.modal-content -->
                                                                </div>
                                                                <!-- /.modal-dialog -->
                                                            </div>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>



                                        </ul>
                                    </div>
                                </div>
                                <div class="card-block">
                                    <img src="{{ asset($slider -> image)}}" style="width: 100%;" alt="">
                                </div>
                                <div class="card-footer"> {{$slider->description}} </div>
                                <button type="button" class="btn btn-oval btn-primary m-2" data-toggle="modal" data-target="#modal-add-update-{{$slider->id}}">Update</button>
                            </div>
                        </div>
                        <!-- /.col-xl-4 -->
                        
                        @endforeach
                    </div>
                    <!-- /.row -->
                </section>


                <nav class="text-right">
                    <ul class="pagination">
                        <li class="page-item">
                            {{ $sliders->links("pagination::bootstrap-4") }}
                        </li>

                    </ul>
                </nav>
            </article>
            <div class="modal fade" id="modal-add-ecommece">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Add New Slider</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                <span class="sr-only">Close</span>
                            </button>
                        </div>
                        <div class="card card-block sameheight-item">
                            <form role="form" method="post" enctype="multipart/form-data" action="{{route('add.slider')}}">
                                @csrf




                                <div class="form-group">
                                    <label>Description:</label>

                                    <textarea class="form-control boxed" name="description" id="" rows="4"></textarea>
                                </div>
                                <div class="form-group ">

                                </div>
                                <div class="form-group">
                                    <label> Image: </label>
                                    <input name="image" id="image" type="file" class="form-control">
                                    <img id="preview" src="#" alt="your image" onerror="this.style.display='none'" onload="this.style.display=''" style="max-height:130px; margin:20px; border: 2px solid #85CE36;" />
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
                                        <div class="row"> </div>
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

        </div>
    </div>
    <!-- Reference block for JS -->
    

    <script>
        image.onchange = evt => {
            const [file] = image.files
            if (file) {
                preview.src = URL.createObjectURL(file)
            }
        }

        image1.onchange = evt => {
            const [file] = image1.files
            if (file) {
                preview1.src = URL.createObjectURL(file)
            }
        }
    </script>
    <script src="{{ asset('js/')}}/vendor.js"></script>
    <script src="{{ asset('js/')}}/app.js"></script>
</body>

</html>