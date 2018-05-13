<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="css/master.css">
        <title>@yield('title')</title>
    </head>
    <body>
        @include('layouts.navbar')
        <div class="page-header" style="padding-left: 50px; padding-right: 50px">
                <img src="http://smakstlouis1sby.sch.id/ver5/wp-content/uploads/2017/05/logo-smak-stlouis1.png" height="50" width="50" align="right">
                <h1>@yield('header')</h1>
        </div>
        <div class="container"> 
            @yield('content')
        </div>
    </body>
</html>
