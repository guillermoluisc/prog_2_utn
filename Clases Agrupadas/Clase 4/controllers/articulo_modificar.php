<?php
require "../models/funciones.php";
$id = $_POST["id"];
$nombre = $_POST["nombre"];
$precio = $_POST["precio"];

$articulos = obtenerArticulos();

/*
foreach($articulos as &$articulo) {
  if ($articulo["id"] == $id) {
    $articulo["nombre"] = $nombre;
    $articulo["precio"] = $precio;
  }
}
*/
for($i = 0; $i < sizeof($articulos); $i++) {
  if ($articulos[$i]["id"] == $id) {
    $articulos[$i]["nombre"] = $nombre;
    $articulos[$i]["precio"] = $precio;
  }
}

guardarArticulos($articulos);

header("Location: ../index.php");
?>