<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eliminar Artículo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-4">
    
    <h1 class="text-center mb-4 text-danger">Eliminar Artículo</h1>

    <table class="table table-bordered">
        <thead class="table-danger">
            <tr>
                <th>ID</th>
                <th>Título</th>
                <th>Página Inicio</th>
                <th>Página Fin</th>
                <th>Año</th>
                <th>Número</th>
                <th>Revista</th>
                <th>Autores</th>
            </tr>
        </thead>
        <tbody>
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
            </tr>
        </tbody>
    </table>

    <form action="/articulo/<?php echo e($articulo->id); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <?php echo method_field('DELETE'); ?>
        <button type="submit" class="btn btn-danger">Confirmar Eliminación</button>
        <a href="/articulo" class="btn btn-secondary">Cancelar</a>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
<?php /**PATH C:\laragon\www\Revistas\resources\views/articulos/delete.blade.php ENDPATH**/ ?>