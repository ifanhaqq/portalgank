<!DOCTYPE html>
<html lang="en">
<head>
    @include('components.head')
</head>
<body>

   
    @include('components.header-landing-page')
    @include('components.nav-admin')

    @yield('content')

    @include('components.footer-landing-page')

    @yield('scripts')

    
</body>
</html>

