<!doctype html>
<html class="no-js" lang="en">

<meta http-equiv="content-type" content="text/html;charset=utf-8" />

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title> All Ecommerces </title>
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
                                <h3 class="title"> Ecommerces
                                    <a href="#" data-toggle="modal" data-target="#modal-add-ecommece" class="btn btn-primary btn-sm rounded-s"> Add New </a>
                                    <!--
				 -->
                                </h3>
                            </div>
                        </div>
                    </div>

                </div>

                @if (Session::has('sc_added'))
                <div class="alert alert-success" role="alert">
                    {{ Session::get('ec_added') }}
                </div>
                @endif
                @if (Session::has('c_deleted'))
                <div class="alert alert-success" role="alert">
                    {{ Session::get('ec_deleted') }}
                </div>
                @endif
                @if (Session::has('ec_updated'))
                <div class="alert alert-success" role="alert">
                    {{ Session::get('ec_updated') }}
                </div>
                @endif
                @foreach ($errors->all() as $message)
                <div class="alert alert-danger" role="alert">{{$message}}</div>
                @endforeach
                <div class="col-md-12 mx-auto">
                    <div class="card ">
                        <div class="card-block">
                            <div class="card-title-block">
                                <h3 class="title">All Ecommerces </h3>
                            </div>
                            <section class="example">
                                <table class="table table-striped ">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Image</th>
                                            <th>Ecommerces Name</th>
                                            <th>Total Procucts</th>
                                            <th>Total Clicks</th>
                                            <th>Manage</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($ecommerces as $ecommerce )
                                        <tr>
                                            <th scope="row">{{$ecommerce->id}}</th>
                                            <td><img src="{{asset($ecommerce->logo)}}" alt="" style="max-width:60px;"></td>
                                            <td>{{$ecommerce->name}}</td>
                                            <td>{{$ecommerce->total_products}}</td>
                                            <td>{{$ecommerce->no_of_clicks}}</td>
                                            <td>
                                                <ul class="item-list striped">
                                                    <div class="item-col fixed item-col-actions-dropdown">
                                                        <div class="item-actions-dropdown">
                                                            <a class="item-actions-toggle-btn">
                                                                <span class="inactive">
                                                                    <a class="edit" href="#" data-toggle="modal" data-target="#modal-add-update-{{$ecommerce->id}}">
                                                                        <i class="fa fa-pencil-alt"></i>
                                                                    </a>
                                                                </span>

                                                            </a>
                                                            <div class="item-actions-block">
                                                                <ul class="item-actions-list">

                                                                    <div class="modal fade" id="modal-add-update-{{$ecommerce->id}}">
                                                                        <div class="modal-dialog modal-lg">
                                                                            <div class="modal-content">
                                                                                <div class="modal-header">
                                                                                    <h4 class="modal-title">Update Ecommerce</h4>
                                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                        <span aria-hidden="true">&times;</span>
                                                                                        <span class="sr-only">Close</span>
                                                                                    </button>
                                                                                </div>
                                                                                <div class="card card-block sameheight-item">
                                                                                    <form role="form" method="post" enctype="multipart/form-data" action="{{route('ecommerce.update')}}">
                                                                                        @csrf
                                                                                        <input type="hidden" name="ecommerce_id" value="{{$ecommerce->id}}">
                                                                                        <div class="form-group">
                                                                                            <label class="float-left">ecommerce:</label>
                                                                                            <input type="text" class="form-control" value="{{$ecommerce->name}}" id="exampleInputEmail1" name="ecommerce_name" placeholder="Enter Category Name">
                                                                                        </div>
                                                                                        <div class="form-group ">

                                                                                        </div>
                                                                                        <div class="form-group">
                                                                                            <label class="float-left"> Image: </label>
                                                                                            <input class="form-control" id="file" name="image" type="file" onchange="loadFile(event)" />
                                                                                            <img id="preview2" src="{{asset($ecommerce->logo)}}" alt="your image" onerror="this.style.display='none'" onload="this.style.display=''" style="max-height:130px; margin:20px; border: 2px solid #85CE36;" />
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
        <!-- <nav class="text-right">
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
        </nav> -->
        </article>
        <div class="modal fade" id="modal-add-ecommece">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Add New Ecommerce</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            <span class="sr-only">Close</span>
                        </button>
                    </div>
                    <div class="card card-block sameheight-item">
                        <form role="form" method="post" enctype="multipart/form-data" action="{{ route('ecommerce.addsubmit')}}">
                            @csrf
                            <div class="form-group">
                                <label for="exampleInputEmail1">Ecommerce</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" name="ecommerce_name" placeholder="Enter ecommerce Name">
                            </div>
                            <div class="form-group ">

                            </div>
                            <div class="form-group">
                                <label> Image: </label>
                                <input name="image" id="image1" type="file" class="form-control ">
                                <img id="preview1" src="#" alt="your image" onerror="this.style.display='none'" onload="this.style.display=''" style="max-height:130px; margin:20px; border: 2px solid #85CE36;" />
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
        <script>
            image1.onchange = evt => {
                const [file] = image1.files
                if (file) {
                    preview1.src = URL.createObjectURL(file)
                }
            }

            var loadFile = function(event) {
            var image = document.getElementById('preview2');
            image.src = URL.createObjectURL(event.target.files[0]);
        };
        </script>
        <script src="{{ asset('js/')}}/vendor.js"></script>
        <script src="{{ asset('js/')}}/app.js"></script>
</body>

</html>