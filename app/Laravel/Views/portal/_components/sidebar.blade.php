<!-- Sidebar -->
<div class="sidebar" data-background-color="white">
    <div class="sidebar-logo">
        <!-- Logo Header -->
        <div class="logo-header" data-background-color="white">
            <a href="{{route('portal.index')}}" class="logo">
                <img src="{{asset('assets/portal/img/delivery_logo.png')}}" alt="navbar brand" class="navbar-brand" width="170"/>
            </a>
            <div class="nav-toggle">
                <button class="btn btn-toggle toggle-sidebar">
                    <i class="gg-menu-right"></i>
                </button>
                <button class="btn btn-toggle sidenav-toggler">
                    <i class="gg-menu-left"></i>
                </button>
            </div>
            <button class="topbar-toggler more">
                <i class="gg-more-vertical-alt"></i>
            </button>
        </div>
        <!-- End Logo Header -->
    </div>
    <div class="sidebar-wrapper scrollbar scrollbar-inner">
        <div class="sidebar-content">
            <ul class="nav nav-secondary">
                <li class="nav-item {{request()->segment(1) == "admin" ? "active" : ""}}">
                    <a href="{{route('portal.index')}}">
                        <i class="fas fa-home"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li class="nav-section">
                    <span class="sidebar-mini-icon">
                        <i class="fa fa-ellipsis-h"></i>
                    </span>
                    <h4 class="text-section">Menus</h4>
                </li>
                <li class="nav-item {{--active--}}">
                    <a data-bs-toggle="collapse" href="#cms" class="collapsed" aria-expanded="false">
                        <i class="fas fa-file"></i>
                        <p>Content Management</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse {{--show--}}" id="cms">
                        <ul class="nav nav-collapse">
                            <li>
                                <a href="#">
                                <span class="sub-item">Products</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                <span class="sub-item">Vehicles</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                <span class="sub-item">Pages</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                <span class="sub-item">FAQ</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- End Sidebar -->