<!doctype html>
<html class="no-js" lang="en">

<meta http-equiv="content-type" content="text/html;charset=utf-8" />

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title> All Brands </title>
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
                                <h3 class="title"> Brands
                                    <a href="#" data-toggle="modal" data-target="#modal-add-ecommece" class="btn btn-primary btn-sm rounded-s"> Add New </a>
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div class="items-search">
                        <form class="form-inline" method="POST" action="{{ route('brand.search')}}">
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
                @if (Session::has('b_added'))
                <div class="alert alert-success" role="alert">
                    {{ Session::get('b_added') }}
                </div>
                @endif
                @if (Session::has('b_deleted'))
                <div class="alert alert-success" role="alert">
                    {{ Session::get('b_deleted') }}
                </div>
                @endif
                @if (Session::has('b_updated'))
                <div class="alert alert-success" role="alert">
                    {{ Session::get('b_updated') }}
                </div>
                @endif
                @error('brand_name')
                <div class="alert alert-danger" role="alert">{{$message}}</div>
                @enderror
                @if (isset($search))
                <h4 class="text-success">Results for {{$search}}</h4>
                @endif
                <section class="section">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-block">
                                    <div class="card-title-block">
                                        <h3 class="title"> All Brands </h3>
                                    </div>
                                    <section class="example">
                                        <div class="table-flip-scroll">
                                            <table class="table table-striped table-bordered table-hover flip-content">
                                                <thead class="flip-header">
                                                    <tr>
                                                        <th>ID</th>
                                                        <th style="text-align:center">Brand Name</th>
                                                        <th style="text-align:center">Total Product</th>
                                                        <th style="text-align:center">Total Clicks</th>
                                                        <th style="text-align:center">Manage</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($brands as $brand )
                                                    <tr>
                                                        <th scope="row">{{$brand->id}}</th>
                                                        <td>{{$brand->name}}</td>
                                                        <td style="text-align:center">{{$brand->total_products}}</td>
                                                        <td style="text-align:center">{{$brand->no_of_clicks}}</td>
                                                        <td style="text-align:center">
                                                            <span class="inactive">
                                                                <a class="edit" href="#" data-toggle="modal" data-target="#modal-add-update-{{$brand->id}}">
                                                                    <i class="fa fa-pencil-alt"></i>
                                                                </a>
                                                            </span>
                                                            <div class="modal fade" id="modal-add-update-{{$brand->id}}">
                                                                <div class="modal-dialog modal-lg">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h4 class="modal-title">Update Brand</h4>
                                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                <span aria-hidden="true">&times;</span>
                                                                                <span class="sr-only">Close</span>
                                                                            </button>
                                                                        </div>
                                                                        <div class="card card-block sameheight-item">
                                                                            <form role="form" method="post" action="{{ route('brand.update')}}">
                                                                                @csrf
                                                                                <input type="hidden" name="id" value="{{$brand->id}}">
                                                                                <div class="form-group">
                                                                                    <label class="float-left" for="exampleInputEmail1">Brand:</label>
                                                                                    <input type="text" class="form-control" value="{{$brand->name}}" id="exampleInputEmail1" name="brand_name" placeholder="Enter Brand Name">
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
                                                        </td>
                                                        @endforeach
                                                    </tr>
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
                            {{ $brands->links("pagination::bootstrap-4") }}
                        </li>
                    </ul>
                </nav>
            </article>
            <div class="modal fade" id="modal-add-ecommece">
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

                            <form role="form" method="post" action="{{ route('brand.addsubmit')}}">
                                @csrf
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Brand</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" name="brand_name" placeholder="Enter Brand Name">
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
        </div>
    </div>
    <script src="{{ asset('js/')}}/vendor.js"></script>
    <script src="{{ asset('js/')}}/app.js"></script>
</body>

</html>