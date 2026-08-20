@extends('layouts.base')

@section('contenido')
    
    <p>Introduce tus usuario y contraseña para ingresar al historial de mascotas.</p>

    @if(session('error'))
        <p style="color: red; font-weight: bold; background: #f8d7da; padding: 10px; border-radius: 5px; margin-bottom: 20px;">
            {{ session('error') }}
        </p>
    @endif

    <section class="tarjeta" style="max-width: 400px; margin: 0 auto;">
        <h3>Iniciar Sesión</h3>
        <form action="{{ url('/login') }}" method="POST">
            @csrf
            <div class="grupo-campo">
                <label for="usuario">Usuario:</label>
                <input type="text" id="usuario" name="usuario" required placeholder="Ej. admin" style="width: 100%; padding: 8px;">
            </div>
            <br>
            <div class="grupo-campo">
                <label for="password">Contraseña:</label>
                <input type="password" id="password" name="password" required placeholder="••••" style="width: 100%; padding: 8px;">
            </div>
            <br>
            <button type="submit" style="width: 100%; padding: 10px;">Ingresar</button>
        </form>
    </section>
@endsection
