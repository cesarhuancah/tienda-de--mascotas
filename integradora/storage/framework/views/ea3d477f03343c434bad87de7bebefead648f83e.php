

<?php $__env->startSection('titulo_cabecera', 'Librería El Lápiz'); ?> 

<?php $__env->startSection('contenido'); ?>
    <h1>Librería El Lápiz</h1>

    <p>Bienvenidos a la librería El Lápiz. Aquí encontrarar lo que buscas .</p>

    <p><strong>Hay <?php echo e(count($libros)); ?> libros en el catálogo.</strong></p>

    <ul>
        <?php $__currentLoopData = $libros; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $libro): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li><strong><?php echo e($libro->titulo); ?></strong> - <?php echo e($libro->precio); ?> Bs</li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>

    <p>Catálogo atendido por: <strong>[Cesar Huanca Huchani]</strong></p>

    <br>
    <a href="/libros/nuevo" style="padding: 10px; background: #28a745; color: white; text-decoration: none; border-radius: 5px;">Registrar otro libro</a>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\veterinaria-laravel\resources\views/libros/lista.blade.php ENDPATH**/ ?>