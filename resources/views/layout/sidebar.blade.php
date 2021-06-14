<div id="sidebar" class="active">
            <div class="sidebar-wrapper active">
                <div class="sidebar-header">
                    <div class="d-flex justify-content-between">
                        <div class="logo">
                            <a href="index.html"><img src="/dist/assets/images/logo/logo.png" alt="Logo" srcset=""></a>
                        </div>
                        <div class="toggler">
                            <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                        </div>
                    </div>
                </div>
                <div class="sidebar-menu">
                    <ul class="menu">
                        <li class="sidebar-title">Menu</li>

                        <li class="sidebar-item @yield('active1') ">
                            <a href="{{url('dashboard')}}" class='sidebar-link'>
                                <i class="bi bi-grid-fill"></i>
                                <span>Dashboard</span>
                            </a>
                        </li>

                        <li class="sidebar-item @yield('active2')">
                            <a href="{{ url('users/all') }}" class='sidebar-link'>
                                <i class="bi bi-stack"></i>
                                <span>Users</span>
                            </a>
                        </li>

                        <li class="sidebar-item @yield('active3')">
                            <a href="{{ url('articles/all') }}" class='sidebar-link'>
                                <i class="bi bi-stack"></i>
                                <span>Articles</span>
                            </a>
                        </li>

                        <li class="sidebar-item @yield('active4')">
                            <a href="{{ url('categories/all') }}" class='sidebar-link'>
                                <i class="bi bi-stack"></i>
                                <span>Categories</span>
                            </a>
                        </li>

                    </ul>
                </div>
                <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
            </div>
        </div>