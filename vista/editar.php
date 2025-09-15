<?php include 'header.php'; ?>
<div class="container mt-4">
    <h2>Editar Contacto</h2>
    <form action="index.php?accion=actualizar" method="POST" class="row g-3">
        <input type="hidden" name="id" value="<?= $contacto['id'] ?>">
        <div class="col-md-6">
            <label for="nombre" class="form-label">Nombre</label>
            <input type="text" name="nombre" id="nombre" class="form-control" value="<?= $contacto['nombre'] ?>" required>
        </div>
        <div class="col-md-6">
            <label for="telefono" class="form-label">Teléfono</label>
            <input type="text" name="telefono" id="telefono" class="form-control" value="<?= $contacto['telefono'] ?>" required>
        </div>
        <div class="col-md-6">
            <label for="email" class="form-label">Email</label>
            <input type="email" name="email" id="email" class="form-control" value="<?= $contacto['email'] ?>" required>
        </div>
        <div class="col-md-6">
            <label for="direccion" class="form-label">Dirección</label>
            <input type="text" name="direccion" id="direccion" class="form-control" value="<?= $contacto['direccion'] ?>">
        </div>
        <div class="col-12">
            <button type="submit" class="btn btn-primary">Actualizar</button>
            <a href="index.php" class="btn btn-secondary">Cancelar</a>
        </div>
    </form>
</div>
<?php include 'footer.php'; ?>
