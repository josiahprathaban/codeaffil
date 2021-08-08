<!doctype html>
<html class="no-js" lang="en">

<meta http-equiv="content-type" content="text/html;charset=utf-8" />

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title> All Customers </title>
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
                                <h3 class="title pb-2"> Customers </h3>
                                <div class="btn-group">
                                    <form class="form-inline" method="POST" action="{{ route('customer.filter')}}">
                                        @csrf
                                        <select name="filter" class="c-select form-control boxed">
                                            <option selected>Sort By:</option>
                                            <option value="1">A to Z</option>
                                            <option value="2">Z to A</option>
                                            <option value="3">Visits</option>
                                            <option value="4">Views</option>
                                            <option value="5">Clicks</option>
                                        </select>
                                        <button type="submit" class="btn btn-primary m-1">Sort</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="items-search">
                        <form class="form-inline" method="POST" action="{{ route('customer.filter')}}">
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
                @if (isset($search))
                <h4 class="text-success" >Results for {{$search}}</h4>
                @endif
                <section class="section">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-block">

                                    <section class="example">
                                        <div class="table-responsive">
                                            <table class="table table-striped table-bordered table-hover">
                                                <thead>
                                                    <tr>
                                                        <th>id</th>
                                                        <th>Username</th>
                                                        <th>First Name</th>
                                                        <th>Last Name</th>
                                                        <th>Email</th>
                                                        <th>phone number</th>
                                                        <th>Visits</th>
                                                        <th>Views</th>
                                                        <th>Clicks</th>
                                                        <th>Last Visit</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($customers as $customer )
                                                    <tr>
                                                        <th scope="row">{{$customer->id}}</th>
                                                        <td>{{$customer -> username}}</td>
                                                        <td>{{$customer -> f_name}}</td>
                                                        <td>{{$customer -> l_name}}</td>
                                                        <td>{{$customer -> email}}</td>
                                                        <td>{{ $customer -> phone_no}}</td>
                                                        <td>{{ $customer -> total_visits}}</td>
                                                        <td>{{ $customer -> total_views}}</td>
                                                        <td>{{ $customer -> total_clicks}}</td>
                                                        <td>{{$customer->last_visit}}</td>
                                                    </tr>
                                                    @endforeach

                                                </tbody>
                                        </div>
                                        </table>
                                    </section>
                                </div>
                            </div>
                        </div>
                    </div>

                    <nav class="text-right pt-3">
                        <ul class="pagination">
                            <li class="page-item">
                                {{ $customers->links("pagination::bootstrap-4") }}
                            </li>
                        </ul>
                    </nav>
        </div>
    </div>
    </div>
    </div>
    </section>
    </article>

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
    <script src="{{ asset('js/')}}/vendor.js"></script>
    <script src="{{ asset('js/')}}/app.js"></script>
</body>

</html>