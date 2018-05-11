<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <title>@yield('title')</title>
    </head>
    <body>
        @include('layouts.navbar')
        <div class="page-header">@yield('header')</div>
        <div class="container"> @yield('content')</div>
    </body>
</html>
