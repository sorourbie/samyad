<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>@yield('title')</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="/assets/favicon.ico" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="/css/styles.css" rel="stylesheet" />
    </head>
    <body>

        <!-- Responsive navbar-->
@include('layouts.nav')
<!-- Responsive navbar-->

<!--header-->
@include('layouts.header')
<!--header-->

<!--contents-->
@yield('login')
@yield('content')
<!--contents-->

        <!-- Footer-->
        @include('layouts.footer')
        <!-- Footer-->

    </body>
</html>