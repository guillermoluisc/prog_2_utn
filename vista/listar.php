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
<?php include 'footer.php'; ?>
