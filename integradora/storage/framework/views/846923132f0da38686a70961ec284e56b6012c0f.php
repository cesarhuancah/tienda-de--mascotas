<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sistema Integrado</title>
    <link rel="stylesheet" href="<?php echo e(asset('styles.css')); ?>">
</head>

<body>

    <header>
        <h1><?php echo $__env->yieldContent('titulo_cabecera', 'Veterinaria'); ?></h1>
        <button id="btn-tema">🌙 Modo Noche</button>
        <nav class="menu-navegacion">
            <a href="<?php echo e(url('/')); ?>">Inicio</a>
            <a href="<?php echo e(url('/')); ?>">Seccion</a>
            <a href="<?php echo e(url('/contacto')); ?>">Contacto</a>
            <a href="<?php echo e(url('/libros/nuevo')); ?>">Libros</a>
        </nav>
    </header>

    <main>
        
        <?php echo $__env->yieldContent('contenido'); ?>
    </main>

    <footer>
        <p>Integradora - [Cesar Huanca Huchani] - 18 de agosto de 2026</p>
    </footer>

    <script src="<?php echo e(asset('script.js')); ?>"></script>
</body>

</html><?php /**PATH C:\xampp\htdocs\veterinaria-laravel\resources\views/layouts/base.blade.php ENDPATH**/ ?>