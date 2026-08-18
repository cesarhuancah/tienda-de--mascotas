<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Veterinaria - Gestión de Mascotas</title>
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
        <h2>Cuidamos a tu mejor amigo</h2>
        <p>Bienvenidos al sistema para gestión de mascotas.</p>

        <!-- Alerta de éxito de Laravel al registrar -->
        <?php if(session('exito')): ?>
            <p style="color: green; font-weight: bold; background: #e6f4ea; padding: 10px; border-radius: 5px; margin-bottom: 20px;">
                <?php echo e(session('exito')); ?>

            </p>
        <?php endif; ?>

        <!-- ======================================================= -->
        <!-- 1. FORMULARIO DE REGISTRO (ARRIBA) -->
        <!-- ======================================================= -->
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
                
                <!-- Aquí se inyectan las respuestas de tu script.js -->
                <p id="error-pedido" class="aviso"></p>
                
                <button type="submit">Registrar Mascota</button>
            </form>
        </section>

        <!-- ======================================================= -->
        <!-- 2. TABLA HISTÓRICA DE PACIENTES (ABAJO) -->
        <!-- ======================================================= -->
        <section class="tarjeta" style="margin-top: 30px;">
            <h3>📋 Pacientes Registrados en el Sistema</h3>
            
            <?php if($listaMascotas->isEmpty()): ?>
                <p>No hay mascotas registradas en este momento.</p>
            <?php else: ?>
                <table border="1" cellpadding="10" style="border-collapse: collapse; width: 100%; text-align: left; margin-top: 15px;">
                    <tr style="background-color: #f2f2f2;">
                        <th>ID</th>
                        <th>Mascota</th>
                        <th>Especie</th>
                        <th>Edad</th>
                        <th>Propietario</th>
                        <th>Síntomas / Motivo</th>
                    </tr>
                    <?php $__currentLoopData = $listaMascotas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $mascota): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($mascota->id); ?></td>
                            <td><strong><?php echo e($mascota->nombre_mascota); ?></strong></td>
                            <td><?php echo e($mascota->especie); ?></td>
                            <td><?php echo e($mascota->edad); ?> años</td>
                            <td><?php echo e($mascota->propietario); ?></td>
                            <td><?php echo e($mascota->sintomas ?? 'Ninguno'); ?></td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </table>
            <?php endif; ?>
        </section>
    </main>

    <footer>
        <p>&copy; 2026 Veterinaria - Ubicado en CBBA - Av. Blanco Galindo km 11</p>
    </footer>

    <script src="<?php echo e(asset('script.js')); ?>"></script>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\veterinaria-laravel\resources\views/inicio.blade.php ENDPATH**/ ?>