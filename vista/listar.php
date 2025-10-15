<?php include 'header.php'; ?>
<div class="container mt-4">
    <h2>Agenda de Contactos</h2>
    <a href="index.php?accion=crear" class="btn btn-primary mb-3">Nuevo Contacto</a>
    <table class="table table-bordered">
        <thead>
            <tr><th>Nombre</th><th>Teléfono</th><th>Email</th><th>Dirección</th><th>Acciones</th></tr>
        </thead>
        <tbody>
            <?php foreach ($contactos as $c): ?>
            <tr>
                <td><?= $c['nombre'] ?></td>
                <td><?= $c['telefono'] ?></td>
                <td><?= $c['email'] ?></td>
                <td><?= $c['direccion'] ?></td>
                <td>
                    <a href="index.php?accion=editar&id=<?= $c['id'] ?>" class="btn btn-sm btn-warning">Editar</a>
                    <a href="index.php?accion=eliminar&id=<?= $c['id'] ?>" class="btn btn-sm btn-danger">Eliminar</a>
                </td>
            </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</div>

<div class="d-flex justify-content-center mt-3">
    <?php if($pagina > 1): ?>
        <a href="index.php?pagina=<?= $pagina-1 ?>" class="btn btn-secondary me-2">Anterior</a>
    <?php endif; ?>

    <span class="align-self-center">Página <?= $pagina ?> de <?= $totalPaginas ?></span>

    <?php if($pagina < $totalPaginas): ?>
        <a href="index.php?pagina=<?= $pagina+1 ?>" class="btn btn-secondary ms-2">Siguiente</a>
    <?php endif; ?>
</div>

<!-- Limit es cuantas filas vamos a traer y offset desde donde empezamos -->
<div class="mb-5"></div>
<?php include 'footer.php'; ?>
