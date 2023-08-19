<!doctype html>
<html lang="en">

<head>
    <title>  ACS Insights | @yield('title') </title>
    @include('frontend.layouts.header')

</head>

<body class="hamburger-menu dsn-effect-scroll dsn-ajax" data-dsn-mousemove="true">

    @include('frontend.layouts.nav')

    @yield('page')

    @include('frontend.layouts.footer')




</body>

</html>
