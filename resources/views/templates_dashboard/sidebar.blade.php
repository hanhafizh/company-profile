<nav id="sidebar" class="sidebar bg-dark text-white vh-100 p-3 d-lg-block collapse">
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
</nav>