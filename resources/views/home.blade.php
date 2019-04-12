<!-- LISTA DE NAVEGACION ENTRE PAGINAS-->
@extends('layout')

@section('title', 'Home')

<!-- @ section AGREGA ESTE CONTENIDO EN DONDE ESTA @ yield('content') ..pagina layout.blade.php -->
@section('content')
    <h1>@lang('Home')</h1>
    <!-- Bienvenid@  < ? php echo $nombre ?? "Invitado" ?> -->

    <!-- CON BLADE SE UTILIZA { {  } } PARA IMPRIMIR UNA VARIABLE (SUSTITUYE ECHO) -->
    Bienvenid@ {{ $nombre ?? "Invitado" }}

    <!-- LO ANTERIOR NOS PROTEJE DE SCRIPTS -->
    <!-- Bienvenid@ {{ "<script> alert('hola') </script>" }} -->
    <!-- SI LO HACEMOS CON ECHO NORMAL, EL SCRIPT SI SE EJECUTA -->
    <!-- Bienvenid@  < ? php echo "<script> alert('hola') </script>" ?>  -->
@endsection