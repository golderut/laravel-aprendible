<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title', 'Aprendible')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <script src="main.js"></script>

    <!-- CREAMOS LA CALSE active PARA EL ESTILO DE LOS LINKS DE LA NAVEGACION-->
    <style>
        .active a {
            color: red;
            text-decoration: none;
        }
    </style>

</head>
<body>
    
    <!-- INCLUIMOS LA NAVEGACION -->
    @include('partials.nav')

    @yield('content')
    
</body>
</html>