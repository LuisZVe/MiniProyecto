<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Artículos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-4">

<h1 class="text-center mb-4">Lista de Artículos</h1>

<a href="/articulo/crear" class="btn btn-primary mb-3">Crear Artículo</a>

<table class="table table-striped table-bordered">
    <thead class="table-dark">
        <tr>
            <th>ID</th>
            <th>Título</th>
            <th>Página Inicio</th>
            <th>Página Fin</th>
            <th>Año</th>
            <th>Número</th>
            <th>Revista</th>
            <th>Autores</th>
            <th>Editar</th>
            <th>Eliminar</th>
        </tr>
    </thead>
    <tbody>
        <?php $__currentLoopData = $darticulo; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $articulo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
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
                <td><a href="/articulo/editar/<?php echo e($articulo->id); ?>" class="btn btn-warning btn-sm">Editar</a></td>
                <td><a href="/articuloa/<?php echo e($articulo->id); ?>" class="btn btn-danger btn-sm">Eliminar</a></td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html><?php /**PATH C:\laragon\www\Revistas\resources\views/articulos/index.blade.php ENDPATH**/ ?>