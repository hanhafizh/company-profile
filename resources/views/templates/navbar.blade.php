<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top px-4 px-lg-5 py-3 py-lg-0">
    <div class="container-fluid">
        <a href="{{ route('home') }}" class="navbar-brand p-0">
            {{-- Mobile --}}
            <img src="{{ asset('img/karyaprima-teks.png') }}" alt="Logo" class="logo d-lg-none"
                style="height: 60px; width: auto;" />

            {{-- Desktop --}}
            <img src="{{ asset('img/karyaprima-teks.png') }}" alt="Logo" class="logo d-none d-lg-block"
                style="height: 80px; width: auto;" />
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
            aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="fa fa-bars"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a href="{{ route('home') }}" class="nav-link {{ Request::routeIs('home') ? 'active' : '' }}"
                        aria-current="{{ Request::routeIs('home') ? 'page' : '' }}">
                        Home
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('about') }}" class="nav-link {{ Request::routeIs('about') ? 'active' : '' }}">
                        About
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('services') }}"
                        class="nav-link {{ Request::routeIs('services') || Request::routeIs('serviceDetail') ? 'active' : '' }}">
                        Services
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('event') }}"
                        class="nav-link {{ Request::routeIs('event') || Request::routeIs('eventsDetail') ? 'active' : '' }}">
                        Events
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('partner') }}"
                        class="nav-link {{ Request::routeIs('partner') ? 'active' : '' }}">
                        Partners
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('career') }}"
                        class="nav-link {{ Request::routeIs('career') || Request::routeIs('careersDetail') ? 'active' : '' }}">
                        Careers
                    </a>
                </li>
            </ul>
            <a href="{{ route('contact') }}" class="btn btn-primary rounded-pill text-white py-2 px-4 ms-lg-3">
                Contact
            </a>
        </div>
    </div>
</nav>
