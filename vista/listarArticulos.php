<?php include 'header.php'; ?>
<div class="container mt-4">
    <h2>Lista de Articulos</h2>
    <a href="index.php?accion=crear_articulo" class="btn btn-primary mb-3">Nuevo Articulo</a>
    <table class="table table-bordered">
        <thead>
            <tr><th>Id</th><th>Nombre</th><th>Descripción Breve</th><th>Precio</th><th>Acciones</th></tr>
        </thead>
        <tbody>
            <?php foreach ($articulos as $a): ?>
            <tr>
                <td><?= $a['id'] ?></td>
                <td><?= $a['nombre'] ?></td>
                <td><?= $a['descripcion_breve'] ?></td>
                <td><?= $a['precio'] ?></td>
                <td>
                    <a href="index.php?accion=editar_articulo&id=<?= $a['id'] ?>" class="btn btn-sm btn-warning">Editar</a>
                    <a href="index.php?accion=eliminar_articulo&id=<?= $a['id'] ?>" class="btn btn-sm btn-danger">Eliminar</a>
                </td>
            </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</div>
<?php include 'footer.php'; ?>
