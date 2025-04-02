<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Artículo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-4">
    
    <h1 class="text-center mb-4">Editar Artículo</h1>

    <form action="/articulo/<?php echo e($articulo->id); ?>" method="POST" class="border p-4 rounded shadow">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>

        <div class="mb-3">
            <label class="form-label">ID</label>
            <input type="text" class="form-control" name="id" value="<?php echo e($articulo->id); ?>" readonly>
        </div>

        <div class="mb-3">
            <label class="form-label">Título</label>
            <input type="text" class="form-control" name="titulo" value="<?php echo e($articulo->titulo); ?>" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Página de Inicio</label>
            <input type="number" class="form-control" name="pagina_inicio" value="<?php echo e($articulo->pagina_inicio); ?>" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Página Fin</label>
            <input type="number" class="form-control" name="pagina_fin" value="<?php echo e($articulo->pagina_fin); ?>" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Revista</label>
            <select class="form-select" name="revista_id" required>
                <?php $__currentLoopData = $revistas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $revista): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($revista->id); ?>" 
                        <?php echo e($revista->id == $articulo->revista_id ? 'selected' : ''); ?>>
                        <?php echo e($revista->titulo); ?>

                    </option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
        </div>

        <div class="mb-3">
            <label class="form-label">Año</label>
            <input type="number" class="form-control" name="anio" value="<?php echo e($articulo->anio); ?>" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Número</label>
            <input type="number" class="form-control" name="numero" value="<?php echo e($articulo->numero); ?>" required>
        </div>

        <button type="submit" class="btn btn-success">Guardar Cambios</button>
        <a href="/articulo" class="btn btn-secondary">Cancelar</a>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
<?php /**PATH C:\laragon\www\Revistas\resources\views/articulos/edit.blade.php ENDPATH**/ ?>