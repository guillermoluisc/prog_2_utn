<?php
require "../models/funciones.php";

$articulo = [
  "nombre" => $_POST["nombre"],
  "precio" => $_POST["precio"],
];
if (isset($_POST["id"])) {
  $articulo["id"] = $_POST["id"];
}
guardarArticulo($articulo);

header("Location: ../index.php");
?>