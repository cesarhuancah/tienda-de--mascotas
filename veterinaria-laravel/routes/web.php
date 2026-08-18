<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

// 1. Mostrar la página de inicio sacando la lista de mascotas de la base de datos
Route::get('/', function () {
    // Jalamos todos los registros ordenados desde el más nuevo
    $listaMascotas = DB::table('mascotas')->orderBy('id', 'desc')->get();
    
    // Le pasamos esa lista a nuestra vista Blade
    return view('inicio', compact('listaMascotas')); 
});

// 2. Mostrar la página de contacto con su bandeja de mensajes abajo
Route::get('/contacto', function () {
    $listaContactos = DB::table('contactos')->orderBy('id', 'desc')->get();
    return view('contacto', compact('listaContactos')); 
});

// 3. Procesar, guardar en SQLite y REDIRIGIR para ver el cambio instantáneo
Route::post('/procesar-mascota', function (Request $request) {
    DB::table('mascotas')->insert([
        'nombre_mascota' => $request->input('nombre_mascota'),
        'especie'        => $request->input('especie'),
        'edad'           => $request->input('edad'),
        'propietario'    => $request->input('propietario'),
        'sintomas'       => $request->input('sintomas'),
    ]);

    // Redirige al inicio para actualizar la lista de inmediato
    return redirect('/')->with('exito', '¡Mascota registrada exitosamente!');
});

// 4. Procesar y guardar mensaje de contacto en SQLite
Route::post('/procesar-contacto', function (Request $request) {
    DB::table('contactos')->insert([
        'nombre'  => $request->input('nombre'),
        'correo'  => $request->input('correo'),
        'mensaje' => $request->input('mensaje'),
    ]);

    return redirect('/contacto')->with('exito', '¡Mensaje enviado con éxito!');
});
