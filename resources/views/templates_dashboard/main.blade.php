<!DOCTYPE html>
<html lang="en">
    @include('templates_dashboard.head')
    <body>
        <div class="d-flex flex-column flex-lg-row">
            <!-- Sidebar -->
            @include('templates_dashboard.sidebar')

            <!-- Main Content -->
            <div class="content flex-grow-1">
                <!-- Toggle Sidebar Button for Mobile -->
                <button class="btn btn-primary d-lg-none m-3" type="button" data-bs-toggle="collapse" data-bs-target="#sidebar" aria-expanded="false" aria-controls="sidebar">
                    <i class="fa fa-bars"></i>
                </button>
                
                <main class="p-4">
                    @yield('content')
                </main>
                @include('templates_dashboard.footer')
            </div>
        </div>
        @include('templates_dashboard.script')
    </body>
</html>