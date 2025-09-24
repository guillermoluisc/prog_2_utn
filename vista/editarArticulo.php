<?php include 'header.php'; ?>
<div class="container mt-4">
    <h2>Editar Contacto</h2>
<form action="index.php?accion=actualizar_articulo" method="POST" class="row g-3">
    <input type="hidden" name="id" value="<?= $articulo['id'] ?>">
        <div class="col-md-6">
            <label for="nombre" class="form-label">Nombre del Articulo</label>
            <input type="text" name="nombre" id="nombre" class="form-control" value="<?= $articulo['nombre'] ?>" required>
        </div>
        <div class="col-md-6">
            <label for="descripcion" class="form-label">Descripción</label>
            <textarea name="descripcion" id="descripcion" class="form-control" required><?= $articulo['descripcion'] ?></textarea>
        </div>
        <div class="col-md-6">
            <label for="descripcionBreve" class="form-label">Descripción Breve</label>
            <input type="text" name="descripcionBreve" id="descripcionBreve" class="form-control" value="<?= $articulo['descripcion_breve'] ?>" required>
        </div>
        <div class="col-md-6">
            <label for="precio" class="form-label">Precio</label>
            <input type="number" name="precio" id="precio" class="form-control" value="<?= $articulo['precio'] ?>" required>
        </div>
        <div class="col-md-6">
            <label for="calificacion" class="form-label">Calificación</label>
            <input type="number" name="calificacion" id="calificacion" class="form-control" min="1" max="5" value="<?= $articulo['calificacion'] ?>">
        </div>
        <div class="col-12">
            <button type="submit" class="btn btn-success">Guardar</button>
            <a href="index.php" class="btn btn-secondary">Cancelar</a>
        </div>
    </form>
</div>
<?php include 'footer.php'; ?>


