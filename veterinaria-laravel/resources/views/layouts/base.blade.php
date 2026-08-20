<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Veterinaria</title>
    <link rel="stylesheet" href="{{ asset('styles.css') }}">
</head>
<body>

    <header>
        <h1>Veterinaria</h1>
        <button id="btn-tema">🌙 Modo Noche</button>
        <nav class="menu-navegacion">
            <a href="{{ url('/') }}">Inicio</a>
            <a href="{{ url('/contacto') }}">Contacto</a>
            <a href="{{ url('/historial') }}">Historial</a>
        </nav>
    </header>

    <main>
        @yield('contenido')
    </main>

    <footer>
        <p>&copy; 2026 Veterinaria - Ubicado en CBBA - Av. Blanco Galindo km 11</p>
    </footer>

    <script src="{{ asset('script.js') }}"></script>
</body>
</html>
