<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Revistas</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-4">
        <h1>Lista de Revistas</h1>
        <?php if(session('success')): ?>
            <div class="alert alert-success">
                <?php echo e(session('success')); ?>

            </div>
        <?php endif; ?>
        <a href="<?php echo e(route('revistas.create')); ?>" class="btn btn-primary">Crear Revista</a>
        <table class="table mt-3">
            <thead>
                <tr>
                    <th>Título</th>
                    <th>ISSN</th>
                    <th>Número</th>
                    <th>Año de Publicación</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $revistas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $revista): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($revista->titulo); ?></td>
                        <td><?php echo e($revista->ISSN); ?></td>
                        <td><?php echo e($revista->numero); ?></td>
                        <td><?php echo e($revista->anio_publicacion); ?></td>
                        <td>
                            <a href="<?php echo e(route('revistas.edit', $revista)); ?>" class="btn btn-warning">Editar</a>
                            <form action="<?php echo e(route('revistas.destroy', $revista)); ?>" method="POST" style="display:inline;" class="delete-form">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('DELETE'); ?>
                                <button type="submit" class="btn btn-danger">Eliminar</button>
                            </form>
                            <a href="<?php echo e(route('revistas.articulos', $revista)); ?>" class="btn btn-info">Ver Artículos</a>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>

    <!-- JavaScript para confirmación de eliminación -->
    <script>
        document.querySelectorAll('.delete-form').forEach(form => {
            form.addEventListener('submit', function(event) {
                if (!confirm('¿Estás seguro de que deseas eliminar esta revista?')) {
                    event.preventDefault();
                }
            });
        });
    </script>
</body>
</html><?php /**PATH C:\laragon\www\Revistas\resources\views/revistas/index.blade.php ENDPATH**/ ?>