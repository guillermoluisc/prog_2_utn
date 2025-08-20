<?php
$nombre = '';
$edad = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre = $_REQUEST['nombre'];
    $edad = $_REQUEST['edad'];
    echo "Hola " . $nombre . ", tenés " . $edad . " años.";
}
else {
    echo "Hola " . $nombre . ", tenés " . $edad . " años.";
}
?>

<!-- Formulario HTML -->
<form method="post">
    Nombre: <input type="text" name="nombre" required>
    Edad: <input type="number" name="edad" required>
    <input type="submit" value="Enviar">
</form>
