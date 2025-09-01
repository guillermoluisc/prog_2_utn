<?php
//Ejercicio de ejemplo Nuevos Temas


//USAR ESTO  para explicar las variables de sesion!!!! 
//y como persisitor temporalmente las cosas
session_start(); //sesiones

// Lista inicial de ventas
if (!isset($_SESSION['ventas'])) {
    $_SESSION['ventas'] = [
        ["nombre" => "El Principito", "cantidad" => 5, "precio" => 500],
        ["nombre" => "1984", "cantidad" => 6, "precio" => 750],
        ["nombre" => "Harry Potter", "cantidad" => 5, "precio" => 600],
    ];
}

// Cerrar sesión si se presionó el botón (usar para explicar
//que se puede enviar "cualquier cosa por post, respecto al nombre)
if (isset($_POST['cerrar_sesion'])) {
    session_unset();     // Elimina todas las variables de sesión
    session_destroy();   // Destruye la sesión
    header("Location: " . $_SERVER['PHP_SELF']); // Recarga la página
    exit;
}

$ventas = $_SESSION['ventas'];


// Funciones
function totalVenta($cantidad, $precio) {
    return $cantidad * $precio;
}

function totalRecaudado($ventas) {
    $total = 0;
    foreach($ventas as $v) {
        $total += totalVenta($v["cantidad"], $v["precio"]);
    }
    return $total;
}

function promedioVenta($ventas) {
    return count($ventas) > 0 ? totalRecaudado($ventas) / count($ventas) : 0;
}

function libroMasVendido($ventas) {
    $max = 0;
    $libro = "";
    foreach($ventas as $v) {
        if($v["cantidad"] > $max) {
            $max = $v["cantidad"];
            $libro = $v["nombre"];
        }
    }
    return $libro;
}

// Procesar formulario
if($_SERVER["REQUEST_METHOD"] == "POST") {
    $ventas[] = [
        "nombre" => $_POST["nombre"],
        "cantidad" => (int)$_POST["cantidad"],
        "precio" => (float)$_POST["precio"]
    ];
     $_SESSION['ventas'] = $ventas;
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ventas Librería</title>
</head>
<body>

<h1>Ventas del día</h1>

<table border="1">
    <tr>
        <th>Libro</th>
        <th>Cantidad</th>
        <th>Precio</th>
        <th>Total</th>
    </tr>
    <?php foreach($ventas as $v): ?>
    <tr>
        <td><?= htmlspecialchars($v["nombre"]) ?></td>
        <td><?= $v["cantidad"] ?></td>
        <td><?= $v["precio"] ?></td>
        <td><?= totalVenta($v["cantidad"], $v["precio"]) ?></td>
    </tr>
    <?php endforeach; ?>
</table>

<p>Total recaudado: <?= totalRecaudado($ventas) ?></p>
<p>Promedio por libro: <?= promedioVenta($ventas) ?></p>
<p>Libro más vendido: <?= libroMasVendido($ventas) ?></p>

<h2>Agregar nueva venta</h2>
<form method="POST">
    Nombre: <input type="text" name="nombre" required><br>
    Cantidad: <input type="number" name="cantidad" min="1" required><br>
    Precio: <input type="number" name="precio" min="0" step="0.01" required><br>
    <input type="submit" value="Agregar">
</form>
<form method="POST">
    <input type="submit" name="cerrar_sesion" value="Cerrar sesión">
</form>

</body>
</html>
