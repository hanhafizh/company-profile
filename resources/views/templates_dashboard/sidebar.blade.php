<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
        {{-- <img src="/lte/dist/img/AdminLTELogo.png" alt="Logo" class="brand-image img-circle elevation-3" style="opacity: .8"> --}}
        <span class="brand-text font-weight-light" style="font-size: 20px">Karya Prima Usahatama</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="/lte/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">Alexander Pierce</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="{{ route('dashboard') }}" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                <li class="nav-item menu-open">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Configuration
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('configuration.organization') }}" class="nav-link">
                                {{-- <i class="far fa-circle nav-icon"></i> --}}
                                <p>Organization</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('configuration.event') }}"" class="nav-link">
                                {{-- <i class="far fa-circle nav-icon"></i> --}}
                                <p>Event</p>
                            </a>
                        </li>
                    </ul>
                </li>
                {{-- <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>Simple Link</p>
                    </a>
                </li> --}}
                <li class="nav-item">
                    <a href="{{ route('logout') }}" class="nav-link">
                        <i class="nav-icon fas fa-sign-out-alt"></i>
                        <p>Logout</p>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</aside>



{{-- <nav id="sidebar" class="sidebar bg-dark text-white vh-100 p-3 d-lg-block collapse">
    <h5 class="text-center mb-4">Dashboard</h5>
    <ul class="nav flex-column">
        <li class="nav-item">
            <a href="{{ route('dashboard') }}" class="nav-link text-white {{ Request::routeIs('dashboard') ? 'active' : '' }}">
                <i class="fa fa-home me-2"></i> Dashboard
            </a>
        </li>
        <li class="nav-item">
            <a href="#configSubmenu" data-bs-toggle="collapse" class="nav-link text-white">
                <i class="fa fa-cogs me-2"></i> Configuration
            </a>
            <ul id="configSubmenu" class="collapse list-unstyled ps-3">
                <li>
                    <a href="{{ route('configuration.organization') }}" class="nav-link text-white {{ Request::routeIs('configuration.organization') ? 'active' : '' }}">
                        <i class="fa fa-users me-2"></i> Organization
                    </a>
                </li>
                <li>
                    <a href="{{ route('configuration.event') }}" class="nav-link text-white {{ Request::routeIs('configuration.event') ? 'active' : '' }}">
                        <i class="fa fa-calendar me-2"></i> Event
                    </a>
                </li>
            </ul>
        </li>
        <li class="nav-item">
            <a href="{{ route('logout') }}" class="nav-link text-white">
                <i class="fa fa-sign-out-alt me-2"></i> Logout
            </a>
        </li>
    </ul>
</nav> --}}