<header class="header">
    <div class="header-block header-block-buttons">
    @if (session('admin_name')==null)
    <h6 class="text-danger">Hello {{session('user')}}, Place update your information <span ><a href="/admin/admin-profile" class="btn btn-primary-outline btn-sm">Clik here</a></span></h6>
    @endif
    </div>
    <div class="header-block header-block-collapse d-lg-none d-xl-none">
        <button class="collapse-btn" id="sidebar-collapse-btn">

            <i class="fa fa-bars"></i>
        </button>
    </div>
    <div class="header-block header-block-nav">
        @if(session('type') != "admin")
        <script>
            window.location = "/login";
        </script>
        @endif
        <ul class="nav-profile">

            <li class="profile dropdown">
                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                    <div class="img"><img style="max-width: 40px;" src="{{ asset(session('profile'))}}"> </div>
                    <span class="name"> {{session('user')}} </span>
                </a>
                <div class="dropdown-menu profile-dropdown-menu" aria-labelledby="dropdownMenu1">
                    <a class="dropdown-item" href="/admin/admin-profile">
                        <i class="fa fa-user icon"></i> Profile </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="/logout">
                        <i class="fa fa-power-off icon"></i> Logout </a>
                </div>
            </li>
        </ul>
    </div>
</header>