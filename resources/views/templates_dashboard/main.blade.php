<!DOCTYPE html>
<html lang="en">
    @include('templates_dashboard.head')
    <body class="hold-transition sidebar-mini">
        <div class="wrapper">
            <!-- Navbar -->
            @include('templates_dashboard.navbar')
            <!-- Sidebar -->
            @include('templates_dashboard.sidebar')

            <!-- Content Wrapper -->
            <div class="content-wrapper">
                <!-- Main Content -->
                @yield('content')
                <!-- Footer -->
                @include('templates_dashboard.footer')
            </div>
        </div>
        <!-- Scripts -->
        @include('templates_dashboard.script')
    </body>
</html>
