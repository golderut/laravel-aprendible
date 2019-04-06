<!-- LISTA DE NAVEGACION ENTRE PAGINAS -->
@extends('layout')

@section('title', 'Portfolio')
    <!-- Portfolio -->
<!-- @ endsection -->

<!-- @ section AGREGA ESTE CONTENIDO EN DONDE ESTA @ yield('content') ..pagina layout.blade.php -->
@section('content')
    <h1>Portfolio</h1>

    <ul>
    <!-- isset PARA VERIFICAR SI LA VARIABLE ESTA DEFINIDA -->
    <!-- @isset($portfolio)
        @foreach ($portfolio as $portfolioItem)
            <li>{{ $portfolioItem['title'] }}</li>
        @endforeach
        @else
            <li>No hay proyectos para mostrar</li>
        @endisset -->

        @forelse ($portfolio as $portfolioItem)
            <li>{{ $portfolioItem['title'] }} <!-- <small>{{ ($loop->first ? 'Es el primero' : '') }}</small>--> </li>

        <!-- empty EN CASO DE QUE LA VARIABLE ESTE VACIA -->
        @empty
            <li>No hay proyectos para mostrar</li>
        @endforelse

    </ul>

@endsection