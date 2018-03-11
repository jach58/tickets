<html>
    <head>
        <title>@yield('title')</title>
        <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Roboto:300,400,500,700">
        <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Material+Icons">
        <link rel="stylesheet" type="text/css" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="/css/bootstrap-material-design.min.css">
        <link rel="stylesheet" type="text/css" href="/css/ripples.min.css">

    </head>
    <body>
        @include('shared.navbar')
        @yield('content')
        <script src="https://code.jquery.com/jquery-3.1.0.min.js"></script>
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="js/ripples.min.js"></script>
        <script src="js/material.min.js"></script>
        <script>
            $(document).ready(function(){
               $.material.init();
            });
        </script>
    </body>
</html>