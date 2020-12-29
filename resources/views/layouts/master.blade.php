<!DOCTYPE html>
<html lang="en">
<head>

    @include('layouts.meta')

    @yield('title')

    @include('layouts.css')

    @yield('css')

    <title>{{ config('app.name', 'Laravel') }}</title>

</head>

@yield('content')

@include('layouts.scripts')

@yield('plugins')

@yield('scripts')

</body>
</html>
