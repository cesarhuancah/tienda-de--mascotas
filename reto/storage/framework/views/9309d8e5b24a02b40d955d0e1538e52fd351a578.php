

<?php $__env->startSection('contenido'); ?>
    <h2>Contáctanos</h2>
    <p>Ponte en contacto con nuestro equipo médico.</p>

    <?php if(session('exito')): ?>
        <p style="color: green; font-weight: bold; background: #e6f4ea; padding: 10px; border-radius: 5px; margin-bottom: 20px;">
            <?php echo e(session('exito')); ?>

        </p>
    <?php endif; ?>

    <section class="tarjeta">
        <h3>Formulario de Contacto</h3>
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

    <section class="tarjeta" style="margin-top: 30px;">
        <h3 Mensajes y Consultas Recibidas</h3>
        <?php if($listaContactos->isEmpty()): ?>
            <p>No hay mensajes en la bandeja de entrada en este momento.</p>
        <?php else: ?>
            <?php $__currentLoopData = $listaContactos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $contacto): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div style="border-left: 4px solid #28a745; background: #f9f9f9; padding: 15px; margin-bottom: 15px; border-radius: 4px; text-align: left;">
                    <strong>De:</strong> <?php echo e($contacto->nombre); ?> (<em><?php echo e($contacto->correo); ?></em>)<br>
                    <strong>Mensaje:</strong> <?php echo e($contacto->mensaje); ?>

                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php endif; ?>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\veterinaria-laravel\resources\views/contacto.blade.php ENDPATH**/ ?>