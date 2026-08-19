<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sistema Integrado</title>
    <link rel="stylesheet" href="{{ asset('styles.css') }}">
</head>

<body>

    <header>
        <h1>@yield('titulo_cabecera', 'Veterinaria')</h1>
        <button id="btn-tema">🌙 Modo Noche</button>
        <nav class="menu-navegacion">
            <a href="{{ url('/') }}">Inicio</a>
            <a href="{{ url('/') }}">Seccion</a>
            <a href="{{ url('/contacto') }}">Contacto</a>
            <a href="{{ url('/libros/nuevo') }}">Libros</a>
        </nav>
    </header>

    <main>
        {{-- Aquí se inyectará el contenido único de cada página --}}
        @yield('contenido')
    </main>

    <footer>
        <p>Integradora - [Cesar Huanca Huchani] - 18 de agosto de 2026</p>
    </footer>

    <script src="{{ asset('script.js') }}"></script>
</body>

</html>