<!DOCTYPE html>
<html lang="en">
    <head>
        @include('layouts.propartials.head')
    </head>

    <body>
        @include('layouts.propartials.nav')
        @include('layouts.propartials.header')
        @include('layouts.propartials.sidebar')
        @yield('content')
    </div>
</div>
        @include('layouts.propartials.footer')
        @include('layouts.propartials.footer-scripts')
    </body>

</html>
