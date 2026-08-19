@extends('layouts.base')

@section('titulo_cabecera', 'Librería El Lápiz') 

@section('contenido')
    <h1>Librería El Lápiz</h1>

    @if ($errors->any())
        <div style="color: red; background: #f8d7da; padding: 10px; border-radius: 5px; margin-bottom: 15px;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="/libros/nuevo" method="POST">
        @csrf
        
        <div class="grupo-campo">
            <label for="titulo">Título del libro:</label>
            <input type="text" id="titulo" name="titulo" value="{{ old('titulo') }}" placeholder="Ej. Don Quijote">
        </div>

        <br>

        <div class="grupo-campo">
            <label for="precio">Precio en Bs:</label>
            <input type="number" id="precio" name="precio" value="{{ old('precio') }}" placeholder="Ej. 45">
        </div>

        <br>

        <button type="submit">Registrar libro</button>
    </form>
@endsection
