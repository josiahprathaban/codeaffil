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
    <!-- Place favicon.ico in the root directory -->
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('css/vendor.css')}}">
    <!--===== Main Css Files =====-->
    <link rel="stylesheet" href="assets/css/style.css" />
    <!-- ===== Responsive Css Files ===== -->
    <link rel="stylesheet" href="assets/css/responsive.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">

</head>

<body>
    @include('admin.layouts.header')
    @include('admin.layouts.sidebar')
    <div class="auth">
        <div class="auth-container">
            <div class="card">
                @if (Session::has('admin_added'))
                <div class="alert alert-success" role="alert">
                    {{ Session::get('admin_added') }}
                </div>
                @endif
                <div class="auth-content">
                    <p class="text-center">Update Your Information</p>
                    <form id="signup-form" action="{{route('admin.updateprofile')}}" method="POST">
                        @csrf
                        <div class="profile-pic mb-2">
                            <label class="-label" for="file">
                                <span class="glyphicon glyphicon-camera"></span>
                                <span>Change Image</span>
                            </label>
                            <input id="file" name="file" type="file" onchange="loadFile(event)" />
                            @if($user->image === NULL)
                            <img src="{{asset('assets\images\user-profile\default.jpg')}}" id="output" width="50%" />
                            @else
                            <img src="{{$user->image}}" id="output" width="200" />
                            @endif
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-sm-6">
                                    <label>First Name</label>

                                    <input type="text" value="{{$user->f_name}}" class="form-control underlined" name="f_name" placeholder="Enter first name" required="">

                                </div>

                                <div class="col-sm-6">
                                    <label>Last Name</label>

                                    <input type="text" value="{{$user->l_name}}" class="form-control underlined" name="l_name" placeholder="Enter last name" required="">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-sm-6">
                                    <label>Phone Number</label>
                                    <input type="text" value="{{$user->phone_no}}" class="form-control underlined" name="phone_no" placeholder="Enter phone number" required="">
                                </div>
                                <div class="col-sm-6">
                                    <label>Email</label>
                                    <input type="text" disabled value="{{$email}}" class="form-control underlined" name="f_name" placeholder="Enter last name" required="">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-block btn-primary">Update</button>
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