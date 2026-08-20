

<?php $__env->startSection('contenido'); ?>
<h2>Cuidamos a tu mejor amigo</h2>
<p>Bienvenidos al sistema para gestión de mascotas.</p>

<?php if(session('exito')): ?>
<p style="color: green; font-weight: bold; background: #e6f4ea; padding: 10px; border-radius: 5px; margin-bottom: 20px;">
    <?php echo e(session('exito')); ?>

</p>
<?php endif; ?>

<section class="tarjeta">
    <h3>Registrar Nueva Mascota</h3>
    <form action="<?php echo e(url('/procesar-mascota')); ?>" method="POST" id="form-mascota" class="formulario-contacto">
        <?php echo csrf_field(); ?>
        <div class="grupo-campo">
            <label for="nombre-mascota">Nombre de la Mascota:</label>
            <input type="text" id="nombre-mascota" name="nombre_mascota" required placeholder="Ej. Toby, Luna">
        </div>
        <div class="grupo-campo">
            <label for="especie">Especie:</label>
            <input type="text" id="especie" name="especie" required placeholder="Ej. Perro, Gato, Ave">
        </div>
        <div class="grupo-campo">
            <label for="edad">Edad (en años):</label>
            <input type="number" id="edad" name="edad" min="0" required placeholder="Ej. 3">
        </div>
        <div class="grupo-campo">
            <label for="propietario">Nombre del Propietario:</label>
            <input type="text" id="propietario" name="propietario" required placeholder="Nombre completo del dueño">
        </div>
        <div class="grupo-campo">
            <label for="sintomas">Síntomas / Motivo de consulta:</label>
            <textarea id="sintomas" name="sintomas" rows="4" placeholder="Escribe el motivo de la visita médica..."></textarea>
        </div>
        <div class="grupo-campo">
            <label for="stock">Turnos/Cupos Disponibles (Stock):</label>
            <input type="number" id="stock" name="stock" min="0" required placeholder="Ej. 5">
        </div>
        <br>

        <p id="error-pedido" class="aviso"></p>

        <button type="submit">Registrar Mascota</button>
    </form>
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\veterinaria-laravel\resources\views/inicio.blade.php ENDPATH**/ ?>