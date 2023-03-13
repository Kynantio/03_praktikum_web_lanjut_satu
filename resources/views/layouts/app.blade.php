<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title>Halaman @yield('title')</title>
</head>
<body>
    @section('sidebar')
        Ini adalah master sidebar.
    @show
    <div class="container">
        @yield('content')
    </div>
</body>
</html>
