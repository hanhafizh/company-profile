<aside class="main-sidebar sidebar-dark-danger elevation-4">

    <!-- Brand Logo -->
    <a href="#" class="brand-link">
        <span class="brand-text font-weight-light" style="font-size: 20px"><strong>Karya Prima Usahatama</strong></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="/lte/dist/img/logo-karyaprima.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                {{-- <a href="#" class="d-block">{{ $userName }}</a> --}}
                <a href="#" class="d-block">Admin</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <!-- Dashboard -->
                <li class="nav-item">
                    <a href="{{ route('dashboard') }}"
                        class="nav-link {{ Request::routeIs('dashboard') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>Dashboard</p>
                    </a>
                </li>

                <!-- Configuration -->
                <li
                    class="nav-item {{ Request::is('setting/*') || Request::routeIs('events.list') || Request::routeIs('organizations.list') || Request::routeIs('homesection.index') || Request::routeIs('homesection.index') || Request::routeIs('aboutsection.index') || Request::routeIs('eventsection.index') || Request::routeIs('partnersection.index') || Request::routeIs('servicesection.index') || Request::routeIs('careersection.index') || Request::routeIs('ourworks.index') ? 'menu-open' : '' }}">
                    <a href="#"
                        class="nav-link {{ Request::is('setting/*') || Request::routeIs('events.list') || Request::routeIs('organizations.list') || Request::routeIs('homesection.index') || Request::routeIs('aboutsection.index') || Request::routeIs('eventsection.index') || Request::routeIs('partnersection.index') || Request::routeIs('servicesection.index') || Request::routeIs('careersection.index') || Request::routeIs('ourworks.index') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-cogs"></i>
                        <p>
                            Pengaturan Content
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        {{-- <li class="nav-item">
                            <a href="{{ route('events.list') }}"
                                class="nav-link {{ Request::routeIs('events.list') ? 'active' : '' }}">
                                <p>Acara</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('organizations.list') }}"
                                class="nav-link {{ Request::routeIs('organizations.list') ? 'active' : '' }}">
                                <p>Organisasi</p>
                            </a>
                        </li> --}}
                        <li class="nav-item">
                            <a href="{{ route('homesection.index') }}"
                                class="nav-link {{ Request::routeIs('homesection.index') ? 'active' : '' }}">
                                <p>Home Section</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('aboutsection.index') }}"
                                class="nav-link {{ Request::routeIs('aboutsection.index') ? 'active' : '' }}">
                                <p>About Section</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('servicesection.index') }}"
                                class="nav-link {{ Request::routeIs('servicesection.index') ? 'active' : '' }}">
                                <p>Service Section</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('eventsection.index') }}"
                                class="nav-link {{ Request::routeIs('eventsection.index') ? 'active' : '' }}">
                                <p>Event Section</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ route('partnersection.index') }}"
                                class="nav-link {{ Request::routeIs('partnersection.index') ? 'active' : '' }}">
                                <p>Partner Section</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ route('careersection.index') }}"
                                class="nav-link {{ Request::routeIs('careersection.index') ? 'active' : '' }}">
                                <p>Career Section</p>
                            </a>
                        </li>
                        {{-- <li class="nav-item">
                            <a href="{{ route('ourworks.index') }}"
                                class="nav-link {{ Request::routeIs('ourworks.index') ? 'active' : '' }}">
                                <p>Ourwork Section</p>
                            </a>
                        </li> --}}
                    </ul>
                </li>


                <!-- Logout -->
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
