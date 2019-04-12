<!-- LISTA DE NAVEGACION ENTRE PAGINAS-->
<nav>
<!-- dd o dumb ES PARA QUE NOS MUESTRE LA INFORMACION EN FORMATO JSON -->
    <!-- url() y path() NOS MUESTRA LA URL EN LA QUE ESTAMOS -->
    <!-- routeIs() NOS DEVUELVE TRUE O FALSE SI NOS ENCONTRAMOS EN LA RUTA DEL PARAMETRO -->
    <!-- {{ dump(request()->path()) }} -->
    <ul>
        <!-- AGRAGAMOS LA CLASE active DINAMICAMENTE DEPENDIENDO LA PAGINA (LINK) EN LA QUE ESTEMOS-->
        <!-- <li class="{{ request()->routeIs('home') ? 'active' : '' }}"><a href="/">Home</a></li>
        <li class="{{ request()->routeIs('about') ? 'active' : '' }}"><a href="/about">About</a></li>
        <li class="{{ request()->routeIs('portfolio') ? 'active' : '' }}"><a href="/portfolio">Portfolio</a></li>
        <li class="{{ request()->routeIs('contact') ? 'active' : '' }}"><a href="/contact">Contact</a></li> -->

        <!-- CREAMOS UNA FUNCION (HELPER) QUE HAGA LO DEL request() -->
            <!-- helpers.php -->
        <li class="{{ setActive('home')}}"><a href="/">@lang('Home')</a></li>
        <li class="{{ setActive('about') }}"><a href="/about">@lang('About')</a></li>
        <li class="{{ setActive('portfolio') }}"><a href="/portfolio">@lang('Portfolio')</a></li>
        <li class="{{ setActive('contact') }}"><a href="/contact">@lang('Contact')</a></li>
    </ul>
</nav>