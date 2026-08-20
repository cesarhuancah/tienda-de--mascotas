<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Veterinaria</title>
    <link rel="stylesheet" href="<?php echo e(asset('styles.css')); ?>">
</head>
<body>

    <header>
        <h1>Veterinaria</h1>
        <button id="btn-tema">🌙 Modo Noche</button>
        <nav class="menu-navegacion">
            <a href="<?php echo e(url('/')); ?>">Inicio</a>
            <a href="<?php echo e(url('/contacto')); ?>">Contacto</a>
            <a href="<?php echo e(url('/historial')); ?>">Historial</a>
        </nav>
    </header>

    <main>
        <?php echo $__env->yieldContent('contenido'); ?>
    </main>

    <footer>
        <p>&copy; 2026 Veterinaria - Ubicado en CBBA - Av. Blanco Galindo km 11</p>
    </footer>

    <script src="<?php echo e(asset('script.js')); ?>"></script>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\veterinaria-laravel\resources\views/layouts/base.blade.php ENDPATH**/ ?>