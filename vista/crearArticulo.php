<?php include 'header.php'; ?>
<div class="container mt-4">
    <h2>Nuevo Articulo</h2>
    <form action="index.php?accion=guardar_articulo" method="POST" class="row g-3">
        <div class="col-md-6">
            <label for="nombre" class="form-label">Nombre del Articulo</label>
            <input type="text" name="nombre" id="nombre" class="form-control" required>
        </div>
        <div class="col-md-6">
            <label for="descripcion" class="form-label">Descripción</label>
            <textarea name="descripcion" id="descripcion" class="form-control" required></textarea>
        </div>
        <div class="col-md-6">
            <label for="descripcionBreve" class="form-label">Descripción Breve</label>
            <input type="text" name="descripcionBreve" id="descripcionBreve" class="form-control" required>
        </div>
        <div class="col-md-6">
            <label for="precio" class="form-label">Precio</label>
            <input type="number" name="precio" id="precio" class="form-control">
        </div>
        <div class="col-md-6">
            <label for="calificacion" class="form-label">Calificación</label>
            <input type="number" name="calificacion" id="calificacion" class="form-control" min="1" max="5">
        </div>
        <div class="col-12">
            <button type="submit" class="btn btn-success">Guardar</button>
            <a href="index.php" class="btn btn-secondary">Cancelar</a>
        </div>
    </form>
</div>
<?php include 'footer.php'; ?>
