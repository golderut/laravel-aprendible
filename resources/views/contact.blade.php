<!-- LISTA DE NAVEGACION ENTRE PAGINAS-->
@extends('layout')

@section('title', 'Contact')
    <!-- Contact -->
<!-- @ endsection -->

<!-- @ section AGREGA ESTE CONTENIDO EN DONDE ESTA @ yield('content') ..pagina layout.blade.php -->
@section('content')
    <h1>{{ __('Contact') }}</h1>
    <!-- $errors NOS DEVUELVE UN ARREGLO -->
    <!-- false CUANDO NO HAY ERROR
         true CUANDO SI HAY ERROR -->
    <!-- {{ var_dump($errors->any()) }} -->

    <!-- UNA FORMA DE MOSTRAR LOS ERRORES (<P>) -->
    <!-- @if ($errors->any())
        @foreach($errors->all() as $error)
            <p>{{ $error }}</p>
        @endforeach
    @endif -->

    <form method="POST" action="{{ route('contact') }}">
        @csrf
        <!-- { !! SIRVE PARA IMPRIMIR HTML-->
        <input name="name" placeholder="Nombre.." value="{{ old('name') }}"><br>
        {!! $errors->first('name', '<small>:message</small> <br>') !!}

        <input type="email" name="email" placeholder="Email.." value="{{ old('email') }}"><br>
        {!! $errors->first('email', '<small>:message</small> <br>') !!}

        <input name="subject" placeholder="Asunto..." value="{{ old('subject') }}"><br>
        {!! $errors->first('subject', '<small>:message</small> <br>') !!}

        <textarea name="content" placeholder="Mensaje..">{{ old('content') }}</textarea><br>
        {!! $errors->first('content', '<small>:message</small> <br>') !!}

        <button>Enviar</button>
    </form>

@endsection