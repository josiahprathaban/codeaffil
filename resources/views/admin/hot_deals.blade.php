<!doctype html>
<html class="no-js" lang="en">

<meta http-equiv="content-type" content="text/html;charset=utf-8" />

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title> All Hot-deals </title>
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
                                <h3 class="title"> Hot Deals
                                    <a href="#" data-toggle="modal" data-target="#modal-add-ecommece" class="btn btn-primary btn-sm rounded-s"> Add New </a>
                                    <!--
				 -->
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div class="items-search">
                        <form class="form-inline" method="POST" action="{{ route('hotdeals.get')}}">
                            @csrf
                            <div class="input-group">
                                <input type="text" name="search" class="form-control boxed rounded-s" placeholder="Search for...">
                                <span class="input-group-btn">
                                    <button class="btn btn-secondary rounded-s" type="submit">
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
                @foreach ($errors->all() as $message)
                <div class="alert alert-danger" role="alert">{{$message}}</div>
                @endforeach
                @if (isset($search))
                <h4 class="text-success">Results for {{$search}}</h4>
                @endif
                <section class="section">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-block">
                                    <div class="card-title-block">
                                        <h3 class="title"> Hot Deals </h3>
                                    </div>
                                    <section class="example">
                                        <div class="table-flip-scroll">
                                            <table class="table table-striped table-bordered table-hover flip-content">
                                                <thead class="flip-header">
                                                    <tr>
                                                        <th>ID</th>
                                                        <th>Deal Title</th>
                                                        <th>Product Name</th>
                                                        <th>Start Date</th>
                                                        <th>End Date</th>
                                                        <th>Total Clicks</th>
                                                        <th>Total Views</th>
                                                        <th>Manage</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($hotdeals as $hotdeal )
                                                    <tr class="odd gradeX">
                                                        <th scope="row">{{$hotdeal->id}}</th>

                                                        <td>{{$hotdeal->deal_title}}</td>
                                                        <td>{{$hotdeal->title}}</td>
                                                        <td>{{$hotdeal->deal_starts}}</td>
                                                        <td>{{$hotdeal->deal_ends}}</td>
                                                        <td>{{$hotdeal->total_views}}</td>
                                                        <td>{{$hotdeal->total_clicks}}</td>
                                                        <td>
                                                            <ul class="item-list striped">
                                                                <div class="item-col fixed item-col-actions-dropdown">
                                                                    <div class="item-actions-dropdown">
                                                                        <a class="item-actions-toggle-btn">
                                                                            <span class="inactive">
                                                                                <a class="edit" href="#" data-toggle="modal" data-target="#modal-add-update-{{$hotdeal->id}}">
                                                                                    <i class="fa fa-pencil-alt"></i>
                                                                                </a>
                                                                            </span>

                                                                        </a>
                                                                        <div class="item-actions-block">
                                                                            <ul class="item-actions-list">

                                                                                <li>
                                                                                    <a class="edit" href="#" data-toggle="modal" data-target="#modal-add-update-{{$hotdeal->id}}">
                                                                                        <i class="fa fa-pencil-alt"></i>
                                                                                    </a>
                                                                                </li>


                                                                                <div class="modal fade" id="modal-add-update-{{$hotdeal->id}}">
                                                                                    <div class="modal-dialog modal-lg">
                                                                                        <div class="modal-content">
                                                                                            <div class="modal-header">
                                                                                                <h4 class="modal-title">Update Hotdeal</h4>
                                                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                                    <span aria-hidden="true">&times;</span>
                                                                                                    <span class="sr-only">Close</span>
                                                                                                </button>
                                                                                            </div>
                                                                                            <div class="card card-block sameheight-item">
                                                                                                <form role="form" method="post" enctype="multipart/form-data" action="{{route('hotdeal.update')}}">
                                                                                                    @csrf
                                                                                                    <input type="hidden" name="hotdeal_id" value="{{$hotdeal->id}}">
                                                                                                    <label  class="float-left"> Product Name: </label>

                                                                                                    <select name="product_id" class="c-select form-control boxed">
                                                                                                        <option value="">Select Product</option>
                                                                                                        @foreach ($products as $product )

                                                                                                        @if ($product->id == $hotdeal->product_id)
                                                                                                        <option selected value="{{$product->id}}">{{$product->id}}. {{$product->title}}</option>
                                                                                                        @else
                                                                                                        <option value="{{$product->id}}">{{$product->id}}. {{$product->title}}</option>
                                                                                                        @endif

                                                                                                        @endforeach
                                                                                                    </select>

                                                                                                    <div class="form-group">
                                                                                                        <label  class="float-left">Title:</label>
                                                                                                        <input type="text" value="{{$hotdeal->deal_title}}" class="form-control" name="hotdeal_name" placeholder="Enter hotdeal Title">
                                                                                                    </div>
                                                                                                    <div class="form-group ">

                                                                                                    </div>
                                                                                                    <div class="form-group">
                                                                                                        <label  class="float-left">Start Date:</label>
                                                                                                        <input value="{{$hotdeal->deal_starts}}" type="date" class="form-control" name="start_date">
                                                                                                    </div>
                                                                                                    <div class="form-group">
                                                                                                        <label class="float-left">End Date:</label>
                                                                                                        <input value="{{$hotdeal->deal_ends}}" type="date" class="form-control" name="end_date">
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

                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </section>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <nav class="text-right">
                    <ul class="pagination">
                        <li class="page-item">
                            {{ $hotdeals->links("pagination::bootstrap-4") }}
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
                                    <option value="" selected>Select Product</option>
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
            
    <script src="{{ asset('js/')}}/vendor.js"></script>
    <script src="{{ asset('js/')}}/app.js"></script>
</body>

</html>