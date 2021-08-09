<!doctype html>
<html class="no-js" lang="en">

<meta http-equiv="content-type" content="text/html;charset=utf-8" />

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title> All Products </title>
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
                                <h3 class="title"> Items
                                    <a href="/admin/add-product" class="btn btn-primary btn-sm rounded-s"> Add New </a>
                                    <!--
				 -->
                                </h3>
                                <div class="btn-group">
                                    <form class="form-inline" method="POST" action="{{ route('product.get')}}">
                                        @csrf
                                        <select name="filter" class="c-select form-control boxed">
                                            <option selected>Sort By:</option>
                                            <option value="1">A to Z</option>
                                            <option value="2">Z to A</option>
                                            <option value="3">Views</option>
                                            <option value="4">Clicks</option>
                                        </select>
                                        <button type="submit" class="btn btn-primary m-1">Sort</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="items-search">
                        <form class="form-inline" method="POST" action="{{ route('product.get')}}">
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
                @if (Session::has('product_deleted'))
                <div class="alert alert-success" role="alert">
                    {{ Session::get('product_deleted') }}
                </div>
                @endif
                @if (isset($search))
                <h4 class="text-success">Results for {{$search}}</h4>
                @endif
                @foreach ($products as $product )
                <div class="card items">
                    <ul class="item-list striped">
                        <li class="item item-list-header">
                            <div class="item-row">
                                <div class="item-col item-col-header fixed item-col-img md">
                                    <div>
                                        <span>Image</span>
                                    </div>
                                </div>
                                <div class="item-col item-col-header item-col-title">
                                    <div>
                                        <span>Title</span>
                                    </div>
                                </div>
                                <div class="item-col item-col-header item-col-date">
                                    <div>
                                        <span>Views</span>
                                    </div>
                                </div>
                                <div class="item-col item-col-header item-col-date">
                                    <div>
                                        <span>Clicks</span>
                                    </div>
                                </div>
                                <div class="item-col item-col-header item-col-date">
                                    <div class="no-overflow">
                                        <span>Stats</span>
                                    </div>
                                </div>
                                <div class="item-col item-col-header item-col-date">
                                    <div class="no-overflow">
                                        <span>Ecommers</span>
                                    </div>
                                </div>
                                <div class="item-col item-col-header item-col-date">
                                    <div class="no-overflow">
                                        <span>Created By</span>
                                    </div>
                                </div>
                                <div class="item-col item-col-header item-col-date">
                                    <div class="no-overflow">
                                        <span>Updated By</span>
                                    </div>
                                </div>
                                <div class="item-col item-col-header item-col-date">
                                    <div>
                                        <span>Published</span>
                                    </div>
                                </div>
                                <div class="item-col item-col-header fixed item-col-actions-dropdown"> </div>
                            </div>
                        </li>
                        <li class="item">
                            <div class="item-row">
                                <div class="item-col fixed item-col-img md">
                                    <a href="item-editor.html">
                                        <img width="100%" src="{{ asset($product->image_1) }}" alt="">
                                    </a>
                                </div>
                                <div class="item-col fixed pull-left item-col-title">
                                    <div class="item-heading">Title</div>
                                    <div>
                                        <a href="/admin/single-product/{{ $product->id }}" class="">
                                            <h4 class="item-title">{{$product->title}}</h4>
                                        </a>
                                    </div>
                                </div>
                                <div class="item-col item-col-date">
                                    <div class="item-heading">Views</div>
                                    @if ($product->total_views==null)
                                        <div>0</div>
                                        @else
                                        <div> {{ $product->total_views }} </div>
                                    @endif
                                </div>
                                <div class="item-col item-col-date">
                                    <div class="item-heading">Clicks</div>
                                    @if ($product->total_clicks==null)
                                        <div>0</div>
                                        @else
                                        <div> {{$product->total_clicks }} </div>
                                    @endif
                                </div>
                                <div class="item-col item-col-date no-overflow">
                                    <div class="item-heading">Stats</div>
                                    @if ($product->stock_status ==1)
                                    <div class="text-success"> In Stock </div>
                                    @else
                                    <div class="text-danger"> Out Of Stock </div>
                                    @endif

                                </div>
                                <div class="item-col item-col-date no-overflow">
                                    <div class="item-heading">Ecommers</div>
                                    <div class="no-overflow">
                                        <a href="{{$product->affiliate_link}}">Amazon</a>
                                    </div>
                                </div>
                                <div class="item-col item-col-date">
                                    <div class="item-heading">Created By</div>
                                    @foreach ($admins as $admin)
                                        @if ($admin->id == $product->created_by)
                                        <div class="no-overflow"><a href="/admin/view-admin/{{$admin->id}}">{{ $admin->username }} </a> </div> 
                                        @endif
                                    @endforeach
                                </div>
                                <div class="item-col item-col-date">
                                    <div class="item-heading">Updated By</div>
                                    @foreach ($admins as $admin)
                                        @if ($admin->id == $product->updated_by)
                                        <div class="no-overflow"><a href="/admin/view-admin/{{$admin->id}}"> {{ $admin->username }}</a> </div> 
                                        @endif
                                    @endforeach
                                </div>
                                <div class="item-col item-col-date">
                                    <div class="item-heading">Published</div>
                                    <div class="no-overflow"> {{ $product->updated_at }} </div>
                                </div>
                                <div class="item-col fixed item-col-actions-dropdown">
                                    <div class="item-actions-dropdown">
                                        <a class="item-actions-toggle-btn">
                                            <span class="inactive">
                                                <a class="edit" href="/admin/edit-product/{{$product->id}}">
                                                    <i class="fa fa-pencil-alt"></i>
                                                </a>
                                            </span>
                                            <a class="edit" href="/admin/single-product/{{ $product->id }}">
                                                <i class="fa fa-eye"></i>
                                            </a>
                                        </a>
                                        <div class="item-actions-block">
                                            <ul class="item-actions-list">

                                                <li>

                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>

                    </ul>
                </div>
                @endforeach

                <nav class="text-right">
                    <ul class="pagination">
                        {{ $products->links("pagination::bootstrap-4") }}
                    </ul>
                </nav>
            </article>


        </div>
    </div>
    <script src="{{ asset('js/')}}/vendor.js"></script>
    <script src="{{ asset('js/')}}/app.js"></script>
</body>

</html>