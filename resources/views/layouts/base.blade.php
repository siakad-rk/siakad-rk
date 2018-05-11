<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" type="text/css" href="css/welcome.css">
        <title>@yield('title')</title>
    </head>
    <body>
      <div class="flex-center position-ref full-height">
           <div class="content">
               <div class="title m-b-md">
                   SIAKAD
                   <h3>Sistem Informasi Akademik</h3>
                   <h4>SMAK St.Louis 1</h4>
                   <h5>Surabaya</h5>
               </div>
               @yield('content')
           </div>
       </div>
    </body>
</html>
