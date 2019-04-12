<?php

namespace App\Http\Controllers;

# Lo quitamos por que retornamos el metodo 'Request' en la funcion store
// use Illuminate\Http\Request;

class MessagesController extends Controller
{
    public function store(){

        request()->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'content' => 'required|min:3'
        ], [
            # Personalizar los mensajes de validacion solamente en el formulario, sin modificar los mensajes en los archivos de traduccion

            'name.required' => __('I need your name')
        ]);
        

        return 'Datos validados';

        # Para acceder a un metodo en especifico
        ## Para usar esta forma debemos para como parametros 'Request $request' y 'use Illuminate\Http\Request;'
        // return $request->get('name');
    }
}
