<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Artículo</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body class="bg-light">

<div class="container mt-5">
    <div class="card shadow">
        <div class="card-header bg-primary text-white">
            <h2 class="text-center">Crear Artículo</h2>
        </div>
        <div class="card-body">
            <form action="/articulo" method="POST">
                <?php echo csrf_field(); ?>

                <div class="mb-3">
                    <label for="titulo" class="form-label">Título</label>
                    <input type="text" class="form-control" name="titulo" id="titulo" required>
                </div>

                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="pagina_inicio" class="form-label">Página de Inicio</label>
                        <input type="number" class="form-control" name="pagina_inicio" id="pagina_inicio" required>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="pagina_fin" class="form-label">Página de Fin</label>
                        <input type="number" class="form-control" name="pagina_fin" id="pagina_fin" required>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="anio" class="form-label">Año</label>
                        <input type="number" class="form-control" name="anio" id="anio" required>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="numero" class="form-label">Número</label>
                        <input type="number" class="form-control" name="numero" id="numero" required>
                    </div>
                </div>

                <div class="mb-3">
                    <label for="revista_id" class="form-label">Revista</label>
                    <select class="form-select" name="revista_id" id="revista_id" required>
                        <?php $__currentLoopData = $drevista; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $revista): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($revista->id); ?>"><?php echo e($revista->titulo); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>

                <h4 class="mt-4">Asignar Autores</h4>
                <?php for($i = 1; $i <= 2; $i++): ?>
                    <div class="border p-3 mb-3">
                        <h5>Autor <?php echo e($i); ?></h5>
                        <div class="mb-3">
                            <label class="form-label">Seleccionar Autor</label>
                            <select class="form-select autor-select" data-index="<?php echo e($i); ?>" name="autores[<?php echo e($i); ?>][id]">
                                <option value="">-- Nuevo Autor --</option>
                                <?php $__currentLoopData = $autores; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $autor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($autor->id); ?>" data-correo="<?php echo e($autor->correo_electronico); ?>" data-adscripcion="<?php echo e($autor->adscripcion); ?>">
                                        <?php echo e($autor->nombre); ?>

                                    </option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Nombre</label>
                            <input type="text" class="form-control autor-nombre" name="autores[<?php echo e($i); ?>][nombre]">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Correo</label>
                            <input type="email" class="form-control autor-correo" name="autores[<?php echo e($i); ?>][correo_electronico]">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Adscripción</label>
                            <input type="text" class="form-control autor-adscripcion" name="autores[<?php echo e($i); ?>][adscripcion]">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Posición</label>
                            <input type="number" class="form-control" name="autores[<?php echo e($i); ?>][posicion]" min="1">
                        </div>
                    </div>
                <?php endfor; ?>

                <div class="text-center">
                    <button type="submit" class="btn btn-success">Crear Artículo</button>
                    <a href="/articulo" class="btn btn-secondary">Cancelar</a>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<script>
    $(document).ready(function () {
        $(".autor-select").change(function () {
            let index = $(this).data("index");
            let selectedOption = $(this).find(":selected");

            let nombre = selectedOption.text().trim() !== "-- Nuevo Autor --" ? selectedOption.text().trim() : "";
            let correo = selectedOption.data("correo") || "";
            let adscripcion = selectedOption.data("adscripcion") || "";

            // Autocompletar los campos
            $("input[name='autores[" + index + "][nombre]']").val(nombre);
            $("input[name='autores[" + index + "][correo_electronico]']").val(correo);
            $("input[name='autores[" + index + "][adscripcion]']").val(adscripcion);
        });
    });
</script>

</body>
</html>
<?php /**PATH C:\laragon\www\Revistas\resources\views/articulos/create.blade.php ENDPATH**/ ?>