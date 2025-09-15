<?php
require "../models/funciones.php";
$id = $_GET["id"];
$articulos = obtenerArticulos();

$articulo = buscarPorId($articulos, $id);
if ($articulo === null) {
  header("Location: /index.php");
}

?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>
</head>
<body>
<form method="post" action="../controllers/articulo_modificar.php">
  <h2>Modificar Articulo</h2>
  <div>
    <label>Nombre</label>
    <input type="text" value="<?php echo $articulo["nombre"] ?>" name="nombre">
  </div>
  <div>
    <label>Precio</label>
    <input type="number" value="<?php echo $articulo["precio"] ?>" name="precio">
  </div>
  <button>Guardar</button>
</form>
</body>
</html>