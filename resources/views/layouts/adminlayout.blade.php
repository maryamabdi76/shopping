<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include('layouts.admin.head')
    </head>

    <body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
        <div class="wrapper">
            @include('layouts.admin.nav')
            @include('layouts.admin.sidebar')
            {{-- <main class="py-4"> --}}
            <div class="content-wrapper">
                @yield('content')
            </div>
            {{-- </main> --}}
        </div>
        @include('layouts.admin.footer')
        @include('layouts.admin.footer-scripts')
    </body>

</html>
