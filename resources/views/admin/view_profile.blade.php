<!doctype html>
<html class="no-js" lang="en">

<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title> Profile </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="apple-touch-icon.html">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/images/favicon/favicon.png')}}" />
    <!-- Place favicon.ico in the root directory -->
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('css/vendor.css')}}">
    <!--===== Main Css Files =====-->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />
    <!-- ===== Responsive Css Files ===== -->
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">

</head>

<body>
    @include('admin.layouts.header')
    @include('admin.layouts.sidebar')
    <div class="auth">
        <div class="auth-container">
            <div class="card">
                <div class="auth-content">
                    <p class="text-center">Details</p>
                    @if (Session::has('admin_updated'))
                    <div class="text-success" role="alert">
                        {{ Session::get('admin_updated') }}
                    </div>
                    @endif
                    <!-- Image upload start -->
                    <form action="{{route('admin.uploadprofile')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="profile-pic mb-2">
                            <label class="-label" for="file">
                                <span class="glyphicon glyphicon-camera"></span>
                                <span>Change Image</span>
                            </label>
                            <input id="file" name="file" type="file" onchange="loadFile(event)" />
                            @if($admin->image === NULL)
                            <img src="{{ asset('assets\images\user-profile\default.jpg') }}" id="output" width="200" />
                            @else
                            <img src="{{asset($admin->image)}}" id="output" width="200" />
                            @endif
                        </div>
                        <div class="xname mb-3">
                            <input type="submit" value="Save Changes" class="btn btn-primary btn-sm mb-3" id="save_profile">
                            <h4>{{$admin->username}}</h4>
                        </div>
                    </form>
                    <!-- Image upload end  -->
                    <form id="signup-form" action="{{route('admin.updateprofile')}}" method="POST">
                        @csrf
                        <div class="form-group">
                            <div class="row">
                                <div class="col-sm-6">
                                    <label>First Name</label>
                                    <div>{{$admin->f_name}}</div>
                                   </div>

                                <div class="col-sm-6">
                                    <label>Last Name</label>
                                    <h6>{{$admin->l_name}}</h6>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-sm-6">
                                    <label>Phone Number</label>
                                    <h6>{{$admin->phone_no}}</h6>
                                </div>
                                <div class="col-sm-6">
                                    <label>Email</label>
                                    <h6>{{$admin->email}}</h6>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script>
        var loadFile = function(event) {
            var image = document.getElementById('output');
            image.src = URL.createObjectURL(event.target.files[0]);
            document.getElementById("save_profile").style.display = "inline";
        };
    </script>
    <script src="{{ asset('js/')}}/vendor.js"></script>
    <script src="{{ asset('js/')}}/app.js"></script>
</body>

</html>