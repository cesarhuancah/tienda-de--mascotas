@extends('layouts.base')

@section('titulo_cabecera', 'Librería El Lápiz') 

@section('contenido')
    <h1>Librería El Lápiz</h1>

    <p>Bienvenidos a la librería El Lápiz. Aquí encontrarar lo que buscas .</p>

    <p><strong>Hay {{ count($libros) }} libros en el catálogo.</strong></p>

    <ul>
        @foreach($libros as $libro)
            <li><strong>{{ $libro->titulo }}</strong> - {{ $libro->precio }} Bs</li>
        @endforeach
    </ul>

    <p>Catálogo atendido por: <strong>[Cesar Huanca Huchani]</strong></p>

    <br>
    <a href="/libros/nuevo" style="padding: 10px; background: #28a745; color: white; text-decoration: none; border-radius: 5px;">Registrar otro libro</a>
@endsection
