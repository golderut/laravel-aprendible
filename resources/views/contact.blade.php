<!-- LISTA DE NAVEGACION ENTRE PAGINAS-->
@extends('layout')

@section('title', 'Contact')
    <!-- Contact -->
<!-- @ endsection -->

<!-- @ section AGREGA ESTE CONTENIDO EN DONDE ESTA @ yield('content') ..pagina layout.blade.php -->
@section('content')
    <h1>Contact</h1>
    <!-- $errors NOS DEVUELVE UN ARREGLO -->
    <!-- false CUANDO NO HAY ERROR
         true CUANDO SI HAY ERROR -->
    <!-- {{ var_dump($errors->any()) }} -->

    @if ($errors->any())
        @foreach($errors->all() as $error)
            <p>{{ $error }}</p>
        @endforeach
    @endif

    <form method="POST" action="{{ route('contact') }}">
        @csrf
        <input name="name" placeholder="Nombre.." value=""><br>
        <input type="email" name="email" placeholder="Email.." value=""><br>
        <input name="subject" placeholder="Asunto..." value="Asunto de prueba"><br>
        <textarea name="content" placeholder="Mensaje..">Mensaje de prueba</textarea><br> 
        <button>Enviar</button>
    </form>

@endsection