<?php
// Si se envió el formulario

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $fecha = $_POST["fecha"] ?? null;

    echo "<h3>Resultado:</h3>";
    echo "Valor recibido con var_dump(): ";
    var_dump($fecha);

    echo "<br>";

    // Intentar convertirlo en objeto DateTime

        $fechaNuevaObjDate = new DateTime($fecha);
        echo "Convertido a DateTime: ";
        var_dump($fechaNuevaObjDate);
    echo "<br><br><a href=''>Volver</a>";
    exit;
}

$nacimiento = new DateTime("2000-05-15");
$hoy = new DateTime();
$edad = $hoy->diff($nacimiento);
echo "Tiene " . $edad->y . " años.";
?>

<!-- Formulario HTML -->
<!-- Como no se especifica la ruta se envia a si mismo -->


<form method="post">
    <label for="fecha">Seleccione una fecha:</label>
    <input type="date" name="fecha" id="fecha" required>
    <button type="submit">Enviar</button>
</form>
