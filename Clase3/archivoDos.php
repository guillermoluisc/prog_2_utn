<?php
$nombreArchivo = "ejemplo2.txt";
$contenido = "Hola, este es otro ejemplo. del segundo 22 \n";

// Abrir el archivo para escritura ("w" = write)
//$archivo = fopen($nombreArchivo, "w");

$archivo = fopen($nombreArchivo, "a");

// Escribir el contenido
fwrite($archivo, $contenido);

// Cerrar el archivo
fclose($archivo);

echo "Archivo '$nombreArchivo'";

