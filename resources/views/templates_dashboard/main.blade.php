<!DOCTYPE html>
<html lang="en">
    @include('templates_dashboard.head')
    <body>
        <div class="d-flex">
            <!-- Sidebar -->
            @include('templates_dashboard.sidebar')

            <!-- Main Content -->
            <div class="content flex-grow-1">
                <main class="p-4">
                    @yield('content')
                </main>
                @include('templates_dashboard.footer')
            </div>
        </div>
        @include('templates_dashboard.script')
    </body>
</html>