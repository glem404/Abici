
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/navegacion.css')}}">
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-thin-straight/css/uicons-thin-straight.css'>

    <title>nav</title>
</head>
@yield('nav')
<body>
    <div class="contenedor-nav">
        <nav>
            <div>
               <p><i class="fi fi-br-biking-mountain"></i> ABICI</p>
            </div>
            <ul>
                <a href="#">Inicio</a>
                <a href="#">Agregar Domicilio</a>
            </ul>
        </nav>
    </div>
</body>
</html>
