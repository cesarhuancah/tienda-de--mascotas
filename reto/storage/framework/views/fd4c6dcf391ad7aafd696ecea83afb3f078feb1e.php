

<?php $__env->startSection('titulo_cabecera', 'Veterinaria - Historial Clínico'); ?>

<?php $__env->startSection('contenido'); ?>
    <h2>Historial de Pacientes</h2>
    <div style="text-align: right; margin-bottom: 20px;">
    <span style="margin-right: 15px; color: green; font-weight: bold;"> Conectado como: Admin</span>
    <a href="<?php echo e(url('/logout')); ?>" style="padding: 5px 10px; background: red; color: white; text-decoration: none; border-radius: 4px; font-size: 14px;">Cerrar Sesión</a>
</div>

    <p>Listado completo de las mascotas registradas en el sistema.</p>

    <section class="tarjeta" style="margin-top: 20px;">
        <h3>lista de mascotas</h3>
        
        <?php if($listaMascotas->isEmpty()): ?>
            <p>No hay mascotas registradas en este momento.</p>
        <?php else: ?>
            <table border="1" cellpadding="10" style="border-collapse: collapse; width: 100%; text-align: left; margin-top: 15px;">
                <tr style="background-color: lime;">
                    <th>ID</th>
                    <th>Mascota</th>
                    <th>Especie</th>
                    <th>Edad</th>
                    <th>Propietario</th>
                    <th>Síntomas / Motivo</th>
                    <th>Turnos Disp. (Stock)</th>
                </tr>
                <?php $__currentLoopData = $listaMascotas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $mascota): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($mascota->id); ?></td>
                        <td><strong><?php echo e($mascota->nombre_mascota); ?></strong></td>
                        <td><?php echo e($mascota->especie); ?></td>
                        <td><?php echo e($mascota->edad); ?> años</td>
                        <td><?php echo e($mascota->propietario); ?></td>
                        <td><?php echo e($mascota->sintomas ?? 'Ninguno'); ?></td>
                        <td><strong><?php echo e($mascota->stock); ?></strong></td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </table>
        <?php endif; ?>
    </section>

    <br>
    <a href="<?php echo e(url('/')); ?>" style="padding: 10px 15px; background: blue; color: white; text-decoration: none; border-radius: 5px;">Registrar Nueva Mascota</a>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\veterinaria-laravel\resources\views/mascotas/historial.blade.php ENDPATH**/ ?>