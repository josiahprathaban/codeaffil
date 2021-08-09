<aside class="sidebar">
@if(session('type') != "admin")
        <script>window.location = "/login";</script>
        @endif
                    <div class="sidebar-container">
                        <div class="sidebar-header">
                        <div class="logo pt-2">
                        <a href="/"><img src="{{ asset('assets/images/logo/admin-logo.png') }}" alt="" /></a>
                    </div>
                        <nav class="menu pt-5">
                            <ul class="sidebar-menu metismenu" id="sidebar-menu">
                                <li class="active">
                                    <a href="/admin">
                                        <i class="fa fa-home"></i> Dashboard </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-th-large"></i> Items Manager
                                        <i class="fa arrow"></i>
                                    </a>
                                    <ul class="sidebar-nav">
                                        <li>
                                            <a href="/admin/all-products"> Items List </a>
                                        </li>
                                        <li>
                                            <a href="/admin/add-product"> Add Item </a>
                                        </li>
                                    </ul>
                                </li>
                                
                                <li>
                                    <a href="/admin/all-customers">
                                    <i class="fas fa-users-cog"></i> Customers List
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                    <i class="fas fa-user-tie"></i> Admin Manager
                                        <i class="fa arrow"></i>
                                    </a>
                                    <ul class="sidebar-nav">
                                        <li>
                                            <a href="/admin/all-admin"> Admins List </a>
                                        </li>
                                        <li>
                                            <a href="/admin/add-admin"> Add Admin </a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="/admin/brands">
                                        <i class="fa fa-cogs"></i> Brands Manager
                                    </a>
                                </li>
                                <li>
                                    <a href="/admin/categories">
                                        <i class="fa fa-layer-group"></i> Categories Manager
                                    </a>
                                </li>
                                <li>
                                    <a href="/admin/subcategories">
                                        <i class="fa fa-network-wired"></i> SubCategories Manager
                                    </a>
                                </li>
                                <li>
                                    <a href="/admin/ecommerces">
                                        <i class="fas fa-store"></i> Ecommerce Manager
                                    </a>
                                </li>
                                <li>
                                    <a href="/admin/hot-deals">
                                        <i class="fas fa-tags"></i> Hot Deals Manager
                                    </a>
                                </li>
                                <li>
                                    <a href="/admin/sliders">
                                        <i class="fas fa-flag"></i> Index Baner Manager
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </aside>
                