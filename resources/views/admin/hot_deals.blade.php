<!doctype html>
<html class="no-js" lang="en">

<meta http-equiv="content-type" content="text/html;charset=utf-8" />

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title> All SubCategories </title>
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
            <article class="content items-list-page">
                <div class="title-search-block">
                    <div class="title-block">
                        <div class="row">
                            <div class="col-md-6">
                                <h3 class="title"> Hot Deals
                                    <a href="#" data-toggle="modal" data-target="#modal-add-ecommece" class="btn btn-primary btn-sm rounded-s"> Add New </a>
                                    <!--
				 -->
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div class="items-search">
                        <form class="form-inline">
                            <div class="input-group">
                                <input type="text" class="form-control boxed rounded-s" placeholder="Search for...">
                                <span class="input-group-btn">
                                    <button class="btn btn-secondary rounded-s" type="button">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>
                            </div>
                        </form>
                    </div>
                </div>

                @if (Session::has('hd_added'))
                <div class="alert alert-success" role="alert">
                    {{ Session::get('hd_added') }}
                </div>
                @endif
                @if (Session::has('c_deleted'))
                <div class="alert alert-success" role="alert">
                    {{ Session::get('sc_deleted') }}
                </div>
                @endif
                @if (Session::has('sc_updated'))
                <div class="alert alert-success" role="alert">
                    {{ Session::get('sc_updated') }}
                </div>
                @endif
                <div class="card items">
                    <div class="col-md-12 mx-auto">
                        <div class="card ">
                            <div class="card-block">
                                <div class="card-title-block">
                                    <h3 class="title">All SubCategories </h3>
                                </div>
                                <section class="example">
                                    <table class="table table-striped ">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Deal Title</th>
                                                <th>Start Date</th>
                                                <th>End Date</th>
                                                <th>Total Clicks</th>
                                                <th>Manage</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($hotdeals as $hotdeal )
                                            <tr>
                                                <th scope="row">{{$hotdeal->id}}</th>

                                                <td>{{$hotdeal->deal_title}}</td>

                                                <td>{{$hotdeal->deal_starts}}</td>
                                                <td>{{$hotdeal->deal_ends}}</td>
                                                <td>1500</td>
                                                <td>
                                                <span class="active">
                                                                    <i class="fa fa-pencil-alt"></i>
                                                                    </span>
                                                </td>
                                                @endforeach
                                            </tr>

                                        </tbody>
                                    </table>
                                </section>
                            </div>
                        </div>
                    </div>
                </div>
                <nav class="text-right">
                    <ul class="pagination">
                        <li class="page-item">
                            <a class="page-link" href="#"> Prev </a>
                        </li>
                        <li class="page-item active">
                            <a class="page-link" href="#"> 1 </a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#"> 2 </a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#"> 3 </a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#"> 4 </a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#"> 5 </a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#"> Next </a>
                        </li>
                    </ul>
                </nav>
            </article>
            <div class="modal fade" id="modal-add-ecommece">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Add New hotdeal</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                <span class="sr-only">Close</span>
                            </button>
                        </div>
                        <div class="card card-block sameheight-item">
                            <form role="form" method="post" enctype="multipart/form-data" action="{{route('hotdeal.addsubmit')}}">
                                @csrf
                                <label> Product Name: </label>

                                <select name="product_id" class="c-select form-control boxed">
                                    <option selected>Select Product</option>
                                    @foreach ($products as $product )
                                    <option value="{{$product->id}}">{{$product->id}}. {{$product->title}}</option>
                                    @endforeach
                                </select>

                                <div class="form-group">
                                    <label>Title:</label>
                                    <input type="text" class="form-control" name="hotdeal_name" placeholder="Enter hotdeal Title">
                                </div>
                                <div class="form-group ">

                                </div>
                                <div class="form-group">
                                    <label>Start Date:</label>
                                    <input type="date" class="form-control" name="start_date">
                                </div>
                                <div class="form-group">
                                    <label>End Date:</label>
                                    <input type="date" class="form-control" name="end_date">
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
    <div class="ref" id="ref">
        <div class="color-primary"></div>
        <div class="chart">
            <div class="color-primary"></div>
            <div class="color-secondary"></div>
        </div>
    </div>
    <script>
        (function(i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function() {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
            a = s.createElement(o),
                m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', '../../www.google-analytics.com/analytics.js', 'ga');
        ga('create', 'UA-80463319-4', 'auto');
        ga('send', 'pageview');
    </script>
    <script>
        image.onchange = evt => {
            const [file] = image.files
            if (file) {
                preview.src = URL.createObjectURL(file)
            }
        }
    </script>
    <script src="{{ asset('js/')}}/vendor.js"></script>
    <script src="{{ asset('js/')}}/app.js"></script>
</body>

</html>