<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Artículos de la Revista: <?php echo e($revista->titulo); ?></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-4">
        <h1>Artículos de la Revista: <?php echo e($revista->titulo); ?></h1>
        <a href="<?php echo e(route('revistas.index')); ?>" class="btn btn-secondary mb-3">Volver a Revistas</a>

        <?php if($articulos->isEmpty()): ?>
            <p>No hay artículos disponibles para esta revista.</p>
        <?php else: ?>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Título</th>
                        <th>Página Inicio</th>
                        <th>Página Fin</th>
                        <th>Año</th>
                        <th>Número</th>
                        <th>Revista</th>
                        <th>Autores</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $articulos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $articulo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($articulo->id); ?></td>
                            <td><?php echo e($articulo->titulo); ?></td>
                            <td><?php echo e($articulo->pagina_inicio); ?></td>
                            <td><?php echo e($articulo->pagina_fin); ?></td>
                            <td><?php echo e($articulo->anio); ?></td>
                            <td><?php echo e($articulo->numero); ?></td>
                            <td><?php echo e($articulo->revista->titulo); ?></td>
                            <td>
                                <ul class="list-unstyled">
                                    <?php $__currentLoopData = $articulo->autores; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $autor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <li><?php echo e($autor->nombre); ?> (Posición: <?php echo e($autor->pivot->posicion); ?>)</li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </ul>
                            </td>
                            <td>
                                <a href="<?php echo e(route('articulo.edit', $articulo)); ?>" class="btn btn-warning btn-sm">Editar</a>

                                <!-- Confirmación para eliminar -->
                                <form action="<?php echo e(route('articulo.destroy', $articulo)); ?>" method="POST" style="display:inline;" onsubmit="return confirm('¿Estás seguro de que deseas eliminar este artículo?');">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('DELETE'); ?>
                                    <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        <?php endif; ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html><?php /**PATH C:\laragon\www\Revistas\resources\views/revistas/articulos.blade.php ENDPATH**/ ?>