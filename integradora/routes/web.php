<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Libro; 

Route::get('/', function () {
 
    $listaMascotas = DB::table('mascotas')->orderBy('id', 'desc')->get();
    
    return view('inicio', compact('listaMascotas')); 
});


Route::get('/contacto', function () {
    $listaContactos = DB::table('contactos')->orderBy('id', 'desc')->get();
    return view('contacto', compact('listaContactos')); 
});

Route::post('/procesar-mascota', function (Request $request) {
    DB::table('mascotas')->insert([
        'nombre_mascota' => $request->input('nombre_mascota'),
        'especie'        => $request->input('especie'),
        'edad'           => $request->input('edad'),
        'propietario'    => $request->input('propietario'),
        'sintomas'       => $request->input('sintomas'),
    ]);


    return redirect('/')->with('exito', '¡Mascota registrada exitosamente!');
});


Route::post('/procesar-contacto', function (Request $request) {
    DB::table('contactos')->insert([
        'nombre'  => $request->input('nombre'),
        'correo'  => $request->input('correo'),
        'mensaje' => $request->input('mensaje'),
    ]);

    return redirect('/contacto')->with('exito', '¡Mensaje enviado con éxito!');
});


//tienda libreria el lapiz

Route::get('/libros', function () {
    $libros = Libro::all();
    return view('libros.lista', compact('libros'));
});


Route::get('/libros/nuevo', function () {
    return view('libros.formulario');
});
Route::post('/libros/nuevo', function () {
    $reglas = [
        'titulo' => 'required',
        'precio' => 'required|integer',
    ];

    $mensajes = [
        'titulo.required' => 'Falta el título del libro.',
        'precio.required' => 'Falta el precio del libro.',
        'precio.integer'  => 'Ese precio no es un número entero.',
    ];

    request()->validate($reglas, $mensajes);

    Libro::create([
        'titulo' => request()->input('titulo'),
        'precio' => request()->input('precio'),
    ]);

    return redirect('/libros');
});
