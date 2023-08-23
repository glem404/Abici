<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{asset('css/index.css')}}">
        <title>Abici</title>
    </head>

    <body >
        @include('navegacion.nav')
        @yield('contenido')
    <footer>
        <p>&copy; 2023 Abici Domicilios. Todos los derechos reservados.</p>
    </footer>
       
    </body>
</html>
