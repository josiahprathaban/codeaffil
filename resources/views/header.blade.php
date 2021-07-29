<header class="main-header">
                <!-- Header Top Start -->
                <div class="header-top-nav">
                    <div class="container-fluid">
                        <div class="row">
                            <!--Left Start-->
                            <div class="col-lg-4 col-md-4">
                                <div class="left-text">
                                    <p>Hello {{session('user')}}! Welcome you to CODEAFFIL!</p>
                                </div>
                            </div>
                            <!--Left End-->
                            <!--Right Start-->
                            <div class="col-lg-8 col-md-8 text-right">
                                <div class="header-right-nav">
                                
                                    <ul class="res-xs-flex">
                                    @if(!session('user'))
                                        <li class="after-n">
                                            <a href="/login">Login</a>
                                        </li>
                                        <li>
                                            <a href="/login">Register Now</a>
                                        </li>
                                    </ul>
                                    @endif
                                    @if(session('user'))
                                    <div class="dropdown-navs">
                                        <ul>
                                            <!-- Settings Start -->
                                            <li class="dropdown xs-after-n">
                                                <a class="angle-icon" href="#">Settings</a>
                                                <ul class="dropdown-nav">
                                                    <li><a href="/profile">My Profile</a></li>
                                                    <li><a href="/logout">Logout</a></li>
                                                </ul>
                                            </li>
                                            <!-- Settings End -->
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
                <div class="header-navigation sticky-nav">
                    <div class="container-fluid">
                        <div class="row">
                            <!-- Logo Start -->
                            <div class="col-md-2 col-sm-2">
                                <div class="logo">
                                    <a href="/"><img src="assets/images/logo/logo.jpg" alt="" /></a>
                                </div>
                            </div>
                            <!-- Logo End -->
                            <!-- Navigation Start -->
                            <div class="col-md-10 col-sm-10">
                                <!--Main Navigation Start -->
                                <div class="main-navigation d-none d-lg-block">
                                    <ul>
                                        <li><a href="/">Home</a></li>
                                        <li class="menu-dropdown">
                                            <a href="#">Shop <i class="ion-ios-arrow-down"></i></a>
                                            <ul class="mega-menu-wrap">
                                                @for ($i = 0; $i < 4; $i++)
                                                    <li>
                                                        <ul>
                                                            <li class="mega-menu-title"><a href="#">Category</a></li>
                                                            @for ($j = 0; $j < 6; $j++)
                                                                <li><a href="shop-3-column.html">Subcategory</a></li>
                                                            @endfor
                                                        </ul>
                                                    </li>
                                                @endfor
                                                <li class="banner-wrapper">
                                                    <a href="single-product.html"><img src="assets/images/banner-image/banner-menu.jpg" alt="" /></a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a href="/contact">Contact Us</a></li>
                                    </ul>
                                </div>
                                <!--Main Navigation End -->
                                <!--Header Bottom Account Start -->
                                <div class="header_account_area">
                                    <!--Search Area Start -->
                                    <div class="header_account_list search_list">
                                        <a href="javascript:void(0)"><i class="ion-ios-search-strong"></i></a>
                                        <div class="dropdown_search">
                                            <form action="#">
                                                <input placeholder="Search entire store here ..." type="text" />
                                                <div class="search-category">
                                                    <select class="bootstrap-select" name="poscats">
                                                        <option value="0">All categories</option>
                                                        @for ($i = 0; $i < 3; $i++)
                                                            <option value="104">
                                                                Category
                                                            </option>
                                                            @for ($j = 0; $j < 5; $j++)
                                                                <option value="106">
                                                                    &nbsp &nbsp Subcategory
                                                                </option>
                                                            @endfor
                                                        @endfor
                                                        
                                                    </select>
                                                </div>
                                                <button type="submit"><i class="ion-ios-search-strong"></i></button>
                                            </form>
                                        </div>
                                    </div>
                                    <!--Seach Area End -->
                                    <!--Contact info Start -->
                                    <div class="contact-link">
                                    <ul>
                                    <li class="dropdown xs-after-n">
                                                <a class="angle-icon xprofile" href="#"><img src="assets/images/testimonial-image/1.png" alt=""> {{session('user')}}</a>
                                                <ul class="dropdown-nav">
                                                    <li><a href="/profile">My Profile</a></li>
                                                    <li><a href="/logout">Logout</a></li>
                                                </ul>
                                            </li>
                                    </ul>
                                    </div>
                                    <!--Contact info End -->
                                    @if(session('type') == "admin")
                                    <a type="button" class="btn ms-3" style="background-color: #253237; color:#ffffff" href="/admin">Admin Panel</a>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <!-- mobile menu -->
                        <div class="mobile-menu-area">
                            <div class="mobile-menu">
                                <nav id="mobile-menu-active">
                                    <ul class="menu-overflow">
                                        <li><a href="#">Home</a></li>
                                        <li>
                                            <a href="#">Shop</a>
                                            <ul>
                                                @for ($i = 0; $i < 4; $i++)
                                                    <li>
                                                        <a href="#">Category</a>
                                                        <ul>
                                                            @for ($j = 0; $j < 6; $j++)
                                                                <li><a href="shop-3-column.html">Subcategory</a></li>
                                                            @endfor
                                                        </ul>
                                                    </li>
                                                @endfor
                                            </ul>
                                        </li>
                                        <li><a href="contact.html">Contact Us</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <!-- mobile menu end-->
                    </div>
                </div>
                <!--Header Bottom Account End -->
            </header>