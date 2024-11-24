<!DOCTYPE html>
<html lang="en">
    @include('templates.head')
    <body>
        @include('templates.navbar')
        <main>
            @yield('content')
        </main>
        @include('templates.footer') 
        @include('templates.script') 
    </body>
</html>