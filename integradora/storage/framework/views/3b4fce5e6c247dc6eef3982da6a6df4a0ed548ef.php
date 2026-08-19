

<?php $__env->startSection('titulo_cabecera', 'Librería El Lápiz'); ?> 

<?php $__env->startSection('contenido'); ?>
    <h1>Librería El Lápiz</h1>

    <?php if($errors->any()): ?>
        <div style="color: red; background: #f8d7da; padding: 10px; border-radius: 5px; margin-bottom: 15px;">
            <ul>
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><?php echo e($error); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
    <?php endif; ?>

    <form action="/libros/nuevo" method="POST">
        <?php echo csrf_field(); ?>
        
        <div class="grupo-campo">
            <label for="titulo">Título del libro:</label>
            <input type="text" id="titulo" name="titulo" value="<?php echo e(old('titulo')); ?>" placeholder="Ej. Don Quijote">
        </div>

        <br>

        <div class="grupo-campo">
            <label for="precio">Precio en Bs:</label>
            <input type="number" id="precio" name="precio" value="<?php echo e(old('precio')); ?>" placeholder="Ej. 45">
        </div>

        <br>

        <button type="submit">Registrar libro</button>
    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\veterinaria-laravel\resources\views/libros/formulario.blade.php ENDPATH**/ ?>