<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <!-- Update link to match route from sidebar.blade.php -->
        <a href="{{ route('configuration.event') }}" class="nav-link {{ Request::routeIs('configuration.event') ? 'active' : '' }}">Acara</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <!-- Update link to match route from sidebar.blade.php -->
        <a href="{{ route('configuration.organization') }}" class="nav-link {{ Request::routeIs('configuration.organization') ? 'active' : '' }}">Organisasi</a>
      </li>
      <a href="{{ route('logout') }}" class="nav-link">
        <i class="fas fa-sign-out-alt"></i> Logout
      </a>
    </ul>
    <ul class="navbar-nav ml-auto">
      <!-- Add navbar components -->
    </ul>
  </nav>
