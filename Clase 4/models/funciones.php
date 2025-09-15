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

  function obteberTotal()
  {
      $string = file_get_contents(__DIR__ . "/base.txt");
      $test = json_decode($string, true);
      $total = 0;
      foreach($test as $t){
        $total+=$t['precio'];
      }
  return $total;
  }

function obtenerArticulosOrdenadosPorPrecio() {
    $articulos = obtenerArticulos();
    // Ordenar usando usort
    usort($articulos, function($a, $b) {
      // return floatval($b['precio']) <=> floatval($a['precio']);
        return floatval($a['precio']) <=> floatval($b['precio']);
    });

    return $articulos;
}

?>
<!-- buscar unsort para string -->