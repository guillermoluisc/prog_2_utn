<?php
require "../models/funciones.php";
$id = $_GET["id"];
eliminarArticulo($id);

header("Location: ../index.php");
?>