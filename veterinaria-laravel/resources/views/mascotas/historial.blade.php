@extends('layouts.base')

@section('titulo_cabecera', 'Veterinaria - Historial Clínico')

@section('contenido')
    <h2>Historial de Pacientes</h2>
    <div style="text-align: right; margin-bottom: 20px;">
    <span style="margin-right: 15px; color: green; font-weight: bold;">👤 Conectado como: Admin</span>
    <a href="{{ url('/logout') }}" style="padding: 5px 10px; background: red; color: white; text-decoration: none; border-radius: 4px; font-size: 14px;">Cerrar Sesión</a>
</div>

    <p>Listado completo de las mascotas registradas en el sistema.</p>

    <section class="tarjeta" style="margin-top: 20px;">
        <h3>lista de mascotas</h3>
        
        @if($listaMascotas->isEmpty())
            <p>No hay mascotas registradas en este momento.</p>
        @else
            <table border="1" cellpadding="10" style="border-collapse: collapse; width: 100%; text-align: left; margin-top: 15px;">
                <tr style="background-color: lime;">
                    <th>ID</th>
                    <th>Mascota</th>
                    <th>Especie</th>
                    <th>Edad</th>
                    <th>Propietario</th>
                    <th>Síntomas / Motivo</th>
                </tr>
                @foreach($listaMascotas as $mascota)
                    <tr>
                        <td>{{ $mascota->id }}</td>
                        <td><strong>{{ $mascota->nombre_mascota }}</strong></td>
                        <td>{{ $mascota->especie }}</td>
                        <td>{{ $mascota->edad }} años</td>
                        <td>{{ $mascota->propietario }}</td>
                        <td>{{ $mascota->sintomas ?? 'Ninguno' }}</td>
                    </tr>
                @endforeach
            </table>
        @endif
    </section>

    <br>
    <a href="{{ url('/') }}" style="padding: 10px 15px; background: blue; color: white; text-decoration: none; border-radius: 5px;">Registrar Nueva Mascota</a>
@endsection
