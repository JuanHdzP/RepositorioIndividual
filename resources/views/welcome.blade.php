<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>DSM41</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
    </head>
    <body>
        <!----section define una seccion de un contenido --->
        @section('sidebar')
        este es nuestro header desde nuestro layout
        @show
        <div class="container">
        <!----yield es utilizada para mostrar el contenido de una seccion determinada--->
            @yield('content')
        </div>
    </body>
</html>
