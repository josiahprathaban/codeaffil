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
                                <h3 class="title"> SubCategories
                                    <a href="#" data-toggle="modal" data-target="#modal-add-ecommece" class="btn btn-primary btn-sm rounded-s"> Add New </a>
                                    <!--
				 -->
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div class="items-search">
                        <form class="form-inline" method="POST" action="{{ route('subcategories.get')}}">
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
                <!-- <div class="col-md-6 mx-auto">
                                <div class="card card-block sameheight-item">
                                    
                                            <form role="form" method="post" action="{{ route('brand.addsubmit')}}">
                                    @csrf
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Brand</label>
                                            <input type="text" name="brand_name" class="form-control" id="exampleInputEmail1" placeholder="Enter Brand Name"> </div>
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-primary">Add</button>
                                        </div>
                                    </form>
                                </div> -->
                @if (Session::has('sc_added'))
                <div class="alert alert-success" role="alert">
                    {{ Session::get('sc_added') }}
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
                <h4 class="text-success" >Results for {{$search}}</h4>
                @endif
                <section class="section">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-block">
                                    <div class="card-title-block">
                                        <h3 class="title"> All SubCategories </h3>
                                    </div>
                                    <section class="example">
                                        <div class="table-flip-scroll">
                                            <table class="table table-striped table-bordered table-hover flip-content">
                                                <thead class="flip-header">
                                                    <tr>
                                                        <th>ID</th>
                                                        <th>Image</th>
                                                        <th>SubCategory Name</th>
                                                        <th>Category Name</th>
                                                        <th>Total Products</th>
                                                        <th>Total Clicks</th>
                                                        <th>Manage</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($subcategories as $subcategory )
                                                    <tr>
                                                        <th scope="row">{{$subcategory->id}}</th>
                                                        <td><img src="{{$subcategory->image}}" alt="" style="max-width:60px;"></td>
                                                        <td>{{$subcategory->name}}</td>
                                                        <td>{{$subcategory->category_name}}</td>
                                                        <td>{{$subcategory->total_products}}</td>
                                                        <td>{{$subcategory->total_clicks}}</td>
                                                        <td>
                                                            <ul class="item-list striped">
                                                                <div class="item-col fixed item-col-actions-dropdown">
                                                                    <div class="item-actions-dropdown">
                                                                        <a class="item-actions-toggle-btn">
                                                                            <span class="inactive">
                                                                                <a class="edit" href="#" data-toggle="modal" data-target="#modal-add-update-{{$subcategory->id}}">
                                                                                    <i class="fa fa-pencil-alt"></i>
                                                                                </a>
                                                                            </span>

                                                                        </a>
                                                                        <div class="item-actions-block">
                                                                            <ul class="item-actions-list">

                                                                                <li>
                                                                                    <a class="edit" href="#" data-toggle="modal" data-target="#modal-add-update-{{$subcategory->id}}">
                                                                                        <i class="fa fa-pencil-alt"></i>
                                                                                    </a>
                                                                                </li>
                                                                                <!-- /.modal -->
                                                                                <div class="modal fade" id="confirm-modal-{{$subcategory->id}}">
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
                                                                                                <a href="/delete-subcategory/{{$subcategory->id}}">
                                                                                                    <button class="btn btn-primary">Yes</button>
                                                                                                </a>
                                                                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                                                                                            </div>
                                                                                        </div>
                                                                                        <!-- /.modal-content -->
                                                                                    </div>
                                                                                    <!-- /.modal-dialog -->
                                                                                </div>
                                                                                <!-- /.modal -->

                                                                                <div class="modal fade" id="modal-add-update-{{$subcategory->id}}">
                                                                                    <div class="modal-dialog modal-lg">
                                                                                        <div class="modal-content">
                                                                                            <div class="modal-header">
                                                                                                <h4 class="modal-title">Update SubCategories</h4>
                                                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                                    <span aria-hidden="true">&times;</span>
                                                                                                    <span class="sr-only">Close</span>
                                                                                                </button>
                                                                                            </div>
                                                                                            <div class="card card-block sameheight-item">
                                                                                                <form role="form" method="post" enctype="multipart/form-data" action="{{ route('subcategory.update')}}">
                                                                                                    @csrf
                                                                                                    <label> Category: </label>

                                                                                                    <select name="category_id" class="c-select form-control boxed">
                                                                                                        <option value="">Select Category</option>
                                                                                                        @foreach ($categories as $category )
                                                                                                        @if ($subcategory->category_id==$category->id)
                                                                                                        <option selected value="{{$category->id}}">{{$category->name}}</option>
                                                                                                        @else
                                                                                                        <option value="{{$category->id}}">{{$category->name}}</option>
                                                                                                        @endif
                                                                                                       

                                                                                                        @endforeach
                                                                                                    </select>

                                                                                                    <input type="hidden" name="subcategory_id" value="{{$subcategory->id}}">
                                                                                                    <div class="form-group">
                                                                                                        <label for="exampleInputEmail1">Subcategory</label>
                                                                                                        <input type="text" class="form-control" value="{{$subcategory->name}}" id="exampleInputEmail1" name="subcategory_name" placeholder="Enter Category Name">
                                                                                                    </div>
                                                                                                    <div class="form-group ">

                                                                                                    </div>
                                                                                                    <div class="form-group">
                                                                                                        <label> Image: </label>
                                                                                                        <input name="image" type="file" class="form-control boxed" id="image1">
                                                                                                        <img id="preview1" src="{{asset($subcategory->image)}}" onerror="this.style.display='none'" onload="this.style.display=''" style="max-height:130px; margin:20px; border: 2px solid #85CE36;" />
                                                                                                    </div>
                                                                                                    <div class="form-group">
                                                                                                        <button type="submit" class="btn btn-primary">Update</button>
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
                                        </div>
                                    </section>

                                </div>
                            </div>
                        </div>
                    </div>
                    <nav class="text-right">
                        <ul class="pagination">
                            <li class="page-item">
                                {{ $subcategories->links("pagination::bootstrap-4") }}
                            </li>
                        </ul>
                    </nav>
            </article>
            <div class="modal fade" id="modal-add-ecommece">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Add New SubCategory</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                <span class="sr-only">Close</span>
                            </button>
                        </div>
                        <div class="card card-block sameheight-item">
                            <form role="form" method="post" enctype="multipart/form-data" action="{{ route('subcategory.addsubmit')}}">
                                @csrf
                                <label> Category: </label>

                                <select name="subcategory_id" class="c-select form-control boxed">
                                    <option value="" selected>Select Category</option>
                                    @foreach ($categories as $category )

                                    <option value="{{$category->id}}">{{$category->name}}</option>

                                    @endforeach
                                </select>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">SubCategory</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" name="subcategory_name" placeholder="Enter SubCategory Name">
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
           
        </div>
    </div>
    <!-- Reference block for JS -->
    <script>
        image1.onchange = evt => {
            const [file] = image1.files
            if (file) {
                preview1.src = URL.createObjectURL(file)
            }
        }
        image2.onchange = evt => {
            const [file] = image2.files
            if (file) {
                preview2.src = URL.createObjectURL(file)
            }
        }
    </script>
    <script src="{{ asset('js/')}}/vendor.js"></script>
    <script src="{{ asset('js/')}}/app.js"></script>
</body>

</html>