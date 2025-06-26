<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('site.partials.head')
    @stack('styles')
</head>
<body>
    @include('site.partials.header')

    @yield('content')

    @include('site.partials.footer')
    @stack('scripts')
</body>
</html>
