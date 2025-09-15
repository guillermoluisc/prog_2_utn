<?php
require "../models/funciones.php";
$id = isset($_GET["id"]) ? $_GET["id"] : 0;

if ($id != 0) {
  // Lo vamos a buscar a la base de datos
  $articulo = buscarPorId($id);
  if ($articulo === false) {
    header("Location: /index.php");
  }
} else {
  // Si es nuevo, creamos un articulo vacio
  $articulo = [
    "nombre" => "",
    "precio" => 0,
  ];
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
<form method="post" action="../controllers/articulo_guardar.php">

  <?php if ($id != 0) { ?>
    <input type="hidden" name="id" value="<?php echo $articulo["id"] ?>" />
  <?php } ?>

  <h2><?php echo ($id == 0) ? "Nuevo Articulo" : "Modificar Articulo" ?></h2>
  
  <div>
    <label>Nombre</label>
    <input type="text" value="<?php echo $articulo["nombre"] ?>" name="nombre">
  </div>

  <div>
    <label>Precio</label>
    <input type="text" value="<?php echo $articulo["precio"] ?>" name="precio">
  </div>
  <button>Guardar</button>
</form>
</body>
</html>