<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

Route::get('/', function () {
    return view('inicio'); 
});

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::post('/login', function (Request $request) {
    $usuario = $request->input('usuario');
    $contrasena = $request->input('password');   
    if ($usuario === 'admin' && $contrasena === '1234') {
       
        session(['autenticado' => true]);
        return redirect('/historial');
    }

    return redirect('/login')->with('error', 'Usuario o contraseña incorrectos, caserito.');
});

Route::get('/logout', function () {
    session()->forget('autenticado');
    return redirect('/');
});


Route::get('/historial', function () {
    
    if (!session('autenticado')) {
        return redirect('/login')->with('error', 'Debes iniciar sesión para ver el historial.');
    }

    $listaMascotas = DB::table('mascotas')->orderBy('id', 'desc')->get();
    return view('mascotas.historial', compact('listaMascotas')); 
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
    return redirect('/historial')->with('exito', '¡Mascota registrada exitosamente!');
});

Route::post('/procesar-contacto', function (Request $request) {
    DB::table('contactos')->insert([
        'nombre'  => $request->input('nombre'),
        'correo'  => $request->input('correo'),
        'mensaje' => $request->input('mensaje'),
    ]);
    return redirect('/contacto')->with('exito', '¡Mensaje enviado con éxito!');
});
