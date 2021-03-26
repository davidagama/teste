<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>
            <link rel="stylesheet" href="/css/style.css">
            <script src="/js/scripts.js"></script>

<!--google fonts-->
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">

<!-- bootstrap -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

           
           </head>
    <body >
<!--footer-->

@yield('content')
    <footer>

    <p>Eventos populares &copy;<?php echo date("Y"); ?></p>
    </footer>
   


    </body>
</html>
