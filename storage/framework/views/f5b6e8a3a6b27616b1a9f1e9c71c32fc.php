<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Revista</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-4">
        <h1>Editar Revista</h1>
        <form action="<?php echo e(route('revistas.update', $revista)); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <?php echo method_field('PUT'); ?>
            <div class="mb-3">
                <label class="form-label">Título</label>
                <input type="text" name="titulo" class="form-control" value="<?php echo e(old('titulo', $revista->titulo)); ?>" required>
            </div>
            <div class="mb-3">
                <label class="form-label">ISSN</label>
                <input type="text" name="ISSN" class="form-control" value="<?php echo e($revista->ISSN); ?>">
            </div>
            <div class="mb-3">
                <label class="form-label">Número</label>
                <input type="number" name="numero" class="form-control" value="<?php echo e(old('numero', $revista->numero)); ?>" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Año de Publicación</label>
                <input type="number" name="anio_publicacion" class="form-control" value="<?php echo e(old('anio_publicacion', $revista->anio_publicacion)); ?>" required>
            </div>
            <button type="submit" class="btn btn-success">Actualizar</button>
            <a href="<?php echo e(route('revistas.index')); ?>" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>
</body>
</html>
<?php /**PATH C:\laragon\www\Revistas\resources\views/revistas/edit.blade.php ENDPATH**/ ?>