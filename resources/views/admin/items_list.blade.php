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
            <article class="content items-list-page">
                <div class="title-search-block">
                    <div class="title-block">
                        <div class="row">
                            <div class="col-md-6">
                                <h3 class="title"> Items
                                    <a href="/add-product" class="btn btn-primary btn-sm rounded-s"> Add New </a>
                                    <!--
				 -->
                                </h3>
                                <div class="btn-group">
                                    <form class="form-inline" method="POST" action="{{ route('product.get')}}">
                                        @csrf
                                    <select name="filter"  class="c-select form-control boxed">
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
                <h4 class="text-success" >Results for {{$search}}</h4>
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
                                        
                                        
                                                    
                                                    <img  width="100%" src="{{ asset($product->image_1) }}" alt="">
                                                    
                                    </a>
                                </div>
                                <div class="item-col fixed pull-left item-col-title">
                                    <div class="item-heading">Title</div>
                                    <div>
                                        <a href="/single-product/{{ $product->id }}" class="">
                                            <h4 class="item-title">{{$product->title}}</h4>
                                        </a>
                                    </div>
                                </div>
                                <div class="item-col item-col-date">
                                    <div class="item-heading">Views</div>
                                    <div> {{ $product->total_views }} </div>
                                </div>
                                <div class="item-col item-col-date">
                                    <div class="item-heading">Clicks</div>
                                    <div> {{$product->total_clicks }} </div>
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
                                    <div class="item-heading">Published</div>
                                    <div class="no-overflow"> {{ $product->updated_at }} </div>
                                </div>
                                <div class="item-col fixed item-col-actions-dropdown">
                                    <div class="item-actions-dropdown">
                                        <a class="item-actions-toggle-btn">
                                            <span class="inactive">
                                            <a class="edit" href="/edit-product/{{$product->id}}">
                                                        <i class="fa fa-pencil-alt"></i>
                                                    </a>
                                            </span>
                                            <a class="edit"href="/single-product/{{ $product->id }}">
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
    <script src="{{ asset('js/')}}/vendor.js"></script>
    <script src="{{ asset('js/')}}/app.js"></script>
</body>

</html>