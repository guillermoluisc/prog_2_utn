<?php
require "../models/funciones.php";
$nombre = $_POST["nombre"];
$precio = $_POST["precio"];

$articulos = obtenerArticulos();

$articulos[] = [
  "id" => obtenerProximoId($articulos),
  "nombre" => $nombre,
  "precio" => $precio,
];

guardarArticulos($articulos);
header("Location: ../index.php");
?>