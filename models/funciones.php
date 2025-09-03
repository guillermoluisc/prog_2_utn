<?php
function obtenerArticulos() {
  $string = file_get_contents(__DIR__ . "/base.txt");
  return json_decode($string, true);
}

function guardarArticulos($articulos) {
  $string = json_encode($articulos);
  file_put_contents(__DIR__ . "/base.txt", $string);
}

function obtenerProximoId($articulos) {
  $maximo = 0;
  foreach($articulos as $articulo) {
    $id = intval($articulo["id"]);
    if ($id > $maximo) {
      $maximo = $id;
    }
  }
  return $maximo + 1;
}

function buscarPorId($articulos, $id) {
  foreach($articulos as $articulo) {
    if ($articulo["id"] == $id) {
      return $articulo;
    }
  }
  return null;
}
?>