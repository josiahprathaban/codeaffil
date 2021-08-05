<header class="main-header">
                <!-- Header Top Start -->

                <div class="header-top-nav">
                    <div class="container-fluid">
                        <div class="row pt-2">
                            <!--Left Start-->
                            <div class="col-lg-4 col-md-4 pt-2 pb-2">
                                <div class="left-text">
                                    <p>Hello {{session('user')}}! Welcome you to CODEAFFIL!</p>
                                </div>
                            </div>
                            <!--Left End-->
                            <!--Right Start-->
                            <div class="col-lg-8 col-md-8 text-right">
                            
                                <div class="header-right-nav">
                                    @if(!session('user'))
                                    <ul class="res-xs-flex">
                                        <li class="after-n">
                                            <a href="/login">Login</a>
                                        </li>
                                        <li>
                                            <a href="/login">Register Now</a>
                                        </li>
                                    </ul>
                                    @else
                                    <div class="dropdown-navs">
                                        <ul>
                                            <!-- Settings Start  -->
                                            <li class="dropdown after-n">
                                            <a class="angle-icon xprofile" href="#"><img src="{{ asset(session('profile'))}}" alt="">
                                                {{session('user')}}</a>
                                                <ul class="dropdown-nav">
                                                    @if(session('type') == "admin")
                                                    <li><a href="/admin">Admin Panel</a></li>
                                                    @else
                                                    <li><a href="/profile">Profile</a></li>
                                                    @endif
                                                    <li><a href="/logout">Logout</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                    @endif
                                </div>
                            </div>
                            <!--Right End-->
                        </div>
                    </div>
                </div>
                <!-- Header Top End -->
                <!-- Header Buttom Start -->
                <div class="header-navigation sticky-nav head-grid">
                    <div class="container-fluid">
                        <div class="row">
                            <!-- Logo Start -->
                            <div class="col-md-4 col-sm-4">
                                <div class="logo">
                                    <a href="/"><img src="{{ asset('assets/images/logo/logo.jpg')}}" alt="" /></a>
                                </div>
                            </div>
                            <!-- Logo End -->
                            <!-- Navigation Start -->
                            <div class="col-md-8 col-sm-8">
                                <!--Main Navigation Start -->
                                <div class="main-navigation d-none d-lg-block">
                                    <ul>
                                        <li><a href="/">Home</a></li>
                                        <li class="menu-dropdown">
                                            <a href="#">Categories <i class="ion-ios-arrow-down"></i></a>
                                            <ul class="mega-menu-wrap">
                                                @foreach ($categories as $category )
                                                    <li>
                                                        <a href="/products/category/{{$category->name}}">{{$category->name}}</a>
                                                        <ul>
                                                            @foreach ($subcategories as $subcategory )
                                                                @if($subcategory->category_id == $category->id)
                                                                    <li><a href="/products/subcategory/{{$subcategory->name}}">{{$subcategory->name}}</a></li>
                                                                @endif
                                                            @endforeach
                                                        </ul>
                                                    </li>
                                                @endforeach
                                                <li class="banner-wrapper">
                                                    <a href="#"><img src="{{ asset('assets/images/banner-image/banner-menu.jpg')}}" alt="" /></a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="menu-dropdown">
                                            <a href="#">E-Commerce <i class="ion-ios-arrow-down"></i></a>
                                            <ul class="mega-menu-wrap" style="width:200px">
                                                @foreach ($ecommerces as $ecommerce )
                                                        <a href="/products/ecommerce/{{$ecommerce->name}}"><img src="{{ asset($ecommerce -> logo)}}" alt="" width="100px"></a>
                                                @endforeach
                                            </ul>
                                        </li>
                                        <li><a href="/contact">Contact Us</a></li>
                                    </ul>
                                </div>
                                <!--Main Navigation End -->
                            </div>
                        </div>
                        <!-- mobile menu -->
                        <div class="mobile-menu-area">
                            <div class="mobile-menu">
                                <nav id="mobile-menu-active">
                                    <ul class="menu-overflow">
                                        <li><a href="#">Home</a></li>
                                        <li>
                                            <a href="#">Categories</a>
                                            <ul>
                                                @foreach ($categories as $category )
                                                    <li>
                                                        <a href="/products/category/{{$category->name}}">{{$category->name}}</a>
                                                        <ul>
                                                            @foreach ($subcategories as $subcategory )
                                                                @if($subcategory->category_id == $category->id)
                                                                    <li><a href="/products/subcategory/{{$subcategory->name}}">{{$subcategory->name}}</a></li>
                                                                @endif
                                                            @endforeach
                                                        </ul>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#">E-Commerce</a>
                                            <ul>
                                                @foreach ($ecommerces as $ecommerce )
                                                    <li>
                                                        <a href="/products/ecommerce/{{$ecommerce->name}}">{{$ecommerce -> name}}</a>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </li>
                                        <li><a href="contact.html">Contact Us</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <!-- mobile menu end-->
                    </div>  
                    <div class="x_search">
                                    <div class="search_wrap">
                                    <select class="x_search_select" size="5" style="height: auto">
                                    <option selected>All categories</option>
                                    @foreach ($categories as $category )
                                            <option value="{{$category->id}}">
                                                {{$category->name}}
                                            </option>
                                            @foreach ($subcategories as $subcategory )
                                            @if($subcategory->category_id == $category->id)
                                            <option value="{{$subcategory->id}}">
                                                &nbsp &nbsp {{$subcategory->name}}
                                            </option>
                                            @endif
                                            @endforeach
                                    @endforeach
                                    </select>
                                    </div>
                                    <input type="text" class="x_search_text">
                                    <!-- <input type="submit" class="x_search_button" value="Search"> -->
                                    <button type="submit" class="x_search_button">
                                    <i class="ion-ios-search-strong"></i>
                                    </button>
                    </div>
                </div>
                <!--Header Bottom Account End -->                          
            </header>