<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Veterinaria - Contacto</title>
    <link rel="stylesheet" href="<?php echo e(asset('styles.css')); ?>">
</head>
<body>

    <header>
        <h1>Veterinaria</h1>
        <button id="btn-tema">🌙 Modo Noche</button>
        <nav class="menu-navegacion">
            <a href="<?php echo e(url('/')); ?>">Inicio</a>
            <a href="<?php echo e(url('/contacto')); ?>">Contacto</a>
        </nav>
    </header>

    <main>
        <h2>Contáctanos</h2>
        <p>Ponte en contacto con nuestro equipo médico.</p>

        <section class="tarjeta">
            <h3>Formulario de Contacto</h3>
            <!-- Apuntamos al procesador de contactos de Laravel -->
            <form action="<?php echo e(url('/procesar-contacto')); ?>" method="POST" class="formulario-contacto">
                <?php echo csrf_field(); ?> 
                <div class="grupo-campo">
                    <label for="nombre">Tu Nombre:</label>
                    <input type="text" id="nombre" name="nombre" required placeholder="Ej. Juan Pérez">
                </div>
                <div class="grupo-campo">
                    <label for="correo">Correo Electrónico:</label>
                    <input type="email" id="correo" name="correo" required placeholder="ejemplo@correo.com">
                </div>
                <div class="grupo-campo">
                    <label for="mensaje">Mensaje:</label>
                    <textarea id="mensaje" name="mensaje" rows="4" required placeholder="Escribe tu consulta aquí..."></textarea>
                </div>
                <p id="error-pedido" class="aviso"></p> 
                <button type="submit">Enviar Mensaje</button>
            </form>
        </section>
    </main>

    <footer>
        <p>&copy; 2026 Veterinaria - Ubicado en CBBA - Av. Blanco Galindo km 11</p>
    </footer>

    <script src="<?php echo e(asset('script.js')); ?>"></script>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\veterinaria-laravel\resources\views/contacto.blade.php ENDPATH**/ ?>