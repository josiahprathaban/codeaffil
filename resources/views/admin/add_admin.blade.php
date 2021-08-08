<!doctype html>
<html class="no-js" lang="en">

<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title> Add admin</title>
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
    @include('admin.layouts.header')
    @include('admin.layouts.sidebar')
    @if (Session::has('admin_added'))
    <div class="alert alert-success" role="alert">
        {{ Session::get('admin_added') }}
    </div>
    @endif
    @if (Session::has('admin_updated'))
    <div class="alert alert-success" role="alert">
        {{ Session::get('admin_updated') }}
    </div>
    @endif
    <div class="auth">
        <div class="auth-container">
            <div class="card">
                <div class="auth-content">
                    <p class="text-center">Add New Admin</p>
                    <form id="signup-form" action="{{route('admin.addsubmit')}}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="firstname">Username</label>
                            <div class="row">
                                <div class="col-sm-6">
                                    <input type="text" class="form-control underlined" name="username" placeholder="Enter Username">
                                    @error('username')
                                    <div class="text-danger" role="alert">{{$message}}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control underlined" name="email" placeholder="Enter email address">
                            @error('email')
                            <div class="text-danger" role="alert">{{$message}}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <div class="row">
                                <div class="col-sm-6">
                                    <input id="password" type="password" class="form-control" name="password" placeholder="Enter password">
                                    @error('password')
                                    <div class="text-danger" role="alert">{{$message}}</div>
                                    @enderror
                                </div>
                                <div class="col-sm-6">
                                    <input id="retype_password" type="password" class="form-control" name="password_confirmation" placeholder="Re-type password">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-block btn-primary">Add</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('js/')}}/vendor.js"></script>
    <script src="{{ asset('js/')}}/app.js"></script>
</body>

</html>