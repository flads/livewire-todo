<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <link rel="stylesheet" href="{{ asset('css/style.css') }}" media="all">
    <link rel="stylesheet" href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" media="all">

    @livewireStyles
</head>
<body>

    @yield('content')
    
    @livewireScripts

    <script src="{{ asset('vendor/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap/js/jquery-3.5.1.min.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap/js/popper.min.js') }}"></script>
</body>
</html>
