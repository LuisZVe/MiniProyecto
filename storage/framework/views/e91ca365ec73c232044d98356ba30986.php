<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
    <h1 class="text-center mb-4">Lista Autores</h1>
    <a href="/autor/create" class="btn btn-primary mb-3">Crear Autor</a>
    <table class="table table-striped border">
        <thead class="table-dark">
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Correo Electrónico</th>
                <th>Adscripción</th>
                <th>Editar</th>
                <th>Eliminar</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $dautor; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $autor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($autor->id); ?></td>
                <td><?php echo e($autor->nombre); ?></td>
                <td><?php echo e($autor->correo_electronico); ?></td>
                <td><?php echo e($autor->adscripcion); ?></td>
                <td><a href="/autor/<?php echo e($autor->id); ?>/edit" class="btn btn-warning btn-sm">Editar</a></td>
                <td><a href="/autor/<?php echo e($autor->id); ?>/eliminar" class="btn btn-danger btn-sm">Eliminar</a></td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
<?php /**PATH C:\laragon\www\Revistas\resources\views/autor/index.blade.php ENDPATH**/ ?>