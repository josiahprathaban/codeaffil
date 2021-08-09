<!doctype html>
<html class="no-js" lang="en">

<meta http-equiv="content-type" content="text/html;charset=utf-8" />

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title> All Admin </title>
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
                                <h3 class="title"> Admins
                                    <a href="/admin/add-admin" class="btn btn-primary btn-sm rounded-s"> Add New Admin</a>
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- admin list table start -->
                <section class="section">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-block">
                                    <div class="card-title-block">
                                        <h3 class="title"> All Admins </h3>
                                    </div>
                                    <section class="example">
                                        <div class="table-flip-scroll">
                                            <table class="table table-striped table-bordered table-hover flip-content">
                                                <thead class="flip-header">
                                                    <tr>
                                                        <th>First Name</th>
                                                        <th>Last Name</th>
                                                        <th>Username</th>
                                                        <th>Email</th>
                                                        <th>Phone Number</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ( $admins as $admin )
                                                    <tr class="odd gradeX">
                                                        <td>{{$admin -> f_name}}</td>
                                                        <td>{{$admin -> l_name}}</td>
                                                        <td>{{$admin -> username}}</td>
                                                        <td><a href="mailto:{{$admin -> email}}">{{ $admin->email }}</a></td>
                                                        <td class="center"><a href="tel:{{$admin -> phone_no}}">{{$admin -> phone_no}}</a></td>
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </section>
                                    <!-- admin list table end -->
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
        </div>
    </div>
    </div>
    </div>
    </section>
    </article>
    </div>
    </div>
    <script src="{{ asset('js/')}}/vendor.js"></script>
    <script src="{{ asset('js/')}}/app.js"></script>
</body>

</html>