<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Aprendible.com = Route::get('/', function)
// Aprendible.com/contacto = Route::get('contacto', function)


// -------------------------------------------------------------------
/*
# PARAMETROS EN LAS URLS
## ...'saludo/{nombre?}'... EL SIGNO ? SIRVE PARA INDICAR QUE EL PARAMETRO NO ES OBLIGATORIO
## ...$nombre = "Invitado"... LE DAMOS UN VALOR POR DEFECTO A LA VARIABLE EN CASO DE NO PASAR PARAMETRO
Route::get('saludo/{nombre?}', function ($nombre = "Invitado") {
    return "Saludos " . $nombre;
});
*/
// -------------------------------------------------------------------


// -------------------------------------------------------------------
# RUTAS CON NOMBRE (NAME ROUTES)
## ... ->name ... ESTE METODO ES PARA DARLE NOMBRE A LAS RUTAS
/*
Route::get('contactame', function(){
    return "Seccion de contactos";

})->name('contactos');

Route::get('/', function(){
    echo "<a href=" . route('contactos') . ">Contactos 1</a><br>";
    echo "<a href=" . route('contactos') . ">Contactos 2</a><br>";
    echo "<a href=" . route('contactos') . ">Contactos 3</a><br>";
    echo "<a href=" . route('contactos') . ">Contactos 4</a><br>";
    echo "<a href=" . route('contactos') . ">Contactos 5</a><br>";
});
*/
// ------------------------------------------------------------------------


# RETORNAR VISTAS (VIEWS)
## ...return view()...
/*
Route::get('/', function(){
    $nombre = "Jorge";
    ## ENVIAR LA VARIABLE A LA VISTA (WITH)
    // return view('home')->with('nombre', $nombre); 
    ## ENVIAR LA VARIABLE A LA VISTA (WITH) COMO ARRAY
    // return view('home')->with(['nombre' => $nombre]); 
    ## PASAR EL ARRAY COMO SEGUNDO PARAMETRO DE LA FUNCION VIEW (SIN EL METODO WITH)
    // return view('home', ['nombre' => $nombre]); 

    ## COMPACT DEVUELVE EL MISMO ARRAY
    return view('home', compact('nombre')); // ['nombre' => $nombre]
})->name('home');
*/


# ************* TODO ESTO SE COMENTA CUANDO SE USA EL METODO RESOURCES

## UTILIZAR EL METODO VIEW D IRECTAMENTE (EN VEZ DE GET)
# para vistas con poca o ninguna informacion
Route::view('/', 'home')->name('home');
// Route::view('/', 'home', ['nombre' => "Jorge"]);
Route::view('/about', 'about')->name('about');
Route::view('/contact', 'contact')->name('contact');

## QUITAMOS ESTA LINEA POR QUE YA LA PASAMOS AL CONTROLADOR
    // Route::view('/portfolio', 'portfolio', compact('portfolio'))->name('portfolio');

## ASI PARA EJECUTAR EL METODO INVOKE DEL CONTROLADOR

// Route::get('/portfolio', 'PortfolioController')->name('portfolio');

## CON EL @ ESPECIFICAMOS EL METODO QUE QUEREMOS QUE SE EJECUTE CUANDO ACCEDEMOS A ESTA RUTA
Route::get('/portfolio', 'PortfolioController@index')->name('portfolio');

Route::post('contact', 'MessagesController@store');

# *************

## PARA GENERAR LAS RUTAS QUE NOS GENERA EL METODO resource (index, create, etc..)
### PRIMER PARAMETRO ES EL NOMBRE DEL RECURSO (URI en route:list)
### SEGUNDO PARAMETRO ES EL NOMBRE DEL CONTROLADOR RESOURCE
### comentamos todas las rutas de arriba para que solo nos salgan las rutas resources
### only PARA DECIRLE CUALES DE LOS 7 METODOS QUEREMOS QUE SE REGISTREN
### except ES LO OPUESTO DE only
// Route::resource('projects', 'PortfolioController')->except(['index', 'show']);

// Route::apiResource('projects', 'PortfolioController');






/* OTRAS PETICIONES
Route::get()
Route::post() // form action="POST"
Route::put()
Route::patch()
Route::delete()
*/