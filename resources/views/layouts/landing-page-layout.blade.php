<!DOCTYPE html>
<html lang="en">
<head>
    @include('components.head')
</head>
<body>

   
    @include('components.header-landing-page')

    @yield('content')

    @include('components.footer-landing-page')

    @yield('scripts')

    
</body>
</html>

