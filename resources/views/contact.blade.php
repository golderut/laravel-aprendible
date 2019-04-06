<!-- LISTA DE NAVEGACION ENTRE PAGINAS-->
@extends('layout')

@section('title', 'Contact')
    <!-- Contact -->
<!-- @ endsection -->

<!-- @ section AGREGA ESTE CONTENIDO EN DONDE ESTA @ yield('content') ..pagina layout.blade.php -->
@section('content')
    <h1>Contact</h1>

    <form method="POST" action="{{ route('contact') }}">
        <input name="name" placeholder="Nombre.."><br>
        <input type="email" name="email" placeholder="Email.."><br>
        <input name="subject" placeholder="Asunto..."><br>
        <textarea name="content" placeholder="Mensaje.."></textarea><br> 
        <button>Enviar</button>
    </form>

@endsection