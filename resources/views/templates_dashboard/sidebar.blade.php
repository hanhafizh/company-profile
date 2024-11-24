<div class="sidebar bg-dark text-white vh-100 p-3" style="width: 250px;">
    <h5 class="text-center mb-4">Dashboard</h5>
    <ul class="nav flex-column">
        <!-- Dashboard Menu -->
        <li class="nav-item">
            <a href="{{ route('dashboard') }}" class="nav-link text-white {{ Request::routeIs('dashboard') ? 'active' : '' }}">
                <i class="fa fa-home me-2"></i> Dashboard
            </a>
        </li>

        <!-- Configuration Menu with Submenu -->
        <li class="nav-item">
            <a class="nav-link text-white dropdown-toggle" data-bs-toggle="collapse" href="#configurationSubmenu" role="button" aria-expanded="false" aria-controls="configurationSubmenu">
                <i class="fa fa-cogs me-2"></i> Configuration
            </a>
            <div class="collapse ps-3" id="configurationSubmenu">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a href="{{ route('configuration.organization') }}" class="nav-link text-white {{ Request::routeIs('configuration.organization') ? 'active' : '' }}">
                            <i class="fa fa-users me-2"></i> Organization
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('configuration.event') }}" class="nav-link text-white {{ Request::routeIs('configuration.event') ? 'active' : '' }}">
                            <i class="fa fa-calendar-alt me-2"></i> Event
                        </a>
                    </li>
                </ul>
            </div>
        </li>

        <!-- Logout Menu -->
        <li class="nav-item">
            <a href="{{ route('logout') }}" class="nav-link text-white">
                <i class="fa fa-sign-out-alt me-2"></i> Logout
            </a>
        </li>
    </ul>
</div>