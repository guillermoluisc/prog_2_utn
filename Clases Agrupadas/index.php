<?php
require "models/funciones.php";
$articulos = obtenerArticulos();
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>
</head>
<body>
  <a href="./views/articulo.php">Agregar</a>
  <table>
    <thead>
      <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Precio</th>
        <th>Modificar</th>
        <th>Eliminar</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach($articulos as $articulo) { ?>
        <tr>
          <td><?php echo $articulo["id"] ?></td>
          <td><?php echo $articulo["nombre"] ?></td>
          <td><?php echo $articulo["precio"] ?></td>
          <td><a href="./views/articulo.php?id=<?php echo $articulo["id"] ?>">Modificar</a></td>
          <td><a href="./controllers/articulo_eliminar.php?id=<?php echo $articulo["id"] ?>">Eliminar</a></td>
        </tr>
      <?php } ?>
    </tbody>
  </table>
</body>
</html>