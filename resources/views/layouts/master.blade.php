<!DOCTYPE html>
<html lang="en">
<head>
    @include('partials.meta')
    @include('partials.css')
    <title>@yield('rhema salvation')</title>
    <!----paystack css-->
    @yield('css')
</head>
<body>

@include('partials.navigation')
@yield('content')
@include('partials.footer')
@include('partials.js')
@yield('js')

</body>
</html>

