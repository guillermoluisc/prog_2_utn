<?php
require "../models/funciones.php";
$id = $_GET["id"];

$articulos = obtenerArticulos();

$articulos2 = [];
foreach($articulos as $articulo) {
  if ($articulo["id"] != $id) {
    $articulos2[] = $articulo;
  }
}

guardarArticulos($articulos2);

header("Location: ../index.php");
?>