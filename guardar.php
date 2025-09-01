<?php
function guardarJSON($array) { //7
  $string = json_encode($array);
  file_put_contents("datos.txt", $string);
}

function obtenerJSON() { //4
  if (!file_exists("datos.txt")) return [];
  $string = file_get_contents("datos.txt");
  if (empty($string)) return [];
  return json_decode($string,true);
}

$nombre = $_POST["nombre"]; //1
$apellido = $_POST["apellido"]; //2

$array = obtenerJSON(); //3

$array[] = array( //5
  "nombre" => $nombre,
  "apellido" => $apellido,
);

guardarJSON($array); //6;
?>