<!DOCTYPE html>
<html lang="en">
<head>
    @include('components.head')
</head>
<body>

    @include('components.header-user')

    @yield('content')

    @include('components.footer-user')

    @yield('scripts')

    
</body>
</html>

