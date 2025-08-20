<?php

$nombreArchivo = "clase1_2.exe";
$contenido = "Hola, este es un texto de prueba.";

// Crear el archivo y escribir el contenido
file_put_contents($nombreArchivo, $contenido);

echo "Archivo '$nombreArchivo' creado con contenido: <br>";