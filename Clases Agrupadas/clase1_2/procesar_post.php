<?php
include "ejerSuma.php";

if (isset($_POST['claveUno']) && isset($_POST['claveDos'])) {
    $claveUno = $_POST['claveUno'];
    $claveDos = $_POST['claveDos'];
    echo suma($claveUno,$claveDos);
} else {
    echo "Por favor, completa todos los campos.";
}


// entonces
/**
 * Hacer una Calculadorea +,-,*,/
 * el usuario debe ingresar ambos valores
 * y la operacion a realizar
 * si el segundo valor es 0 que por defecto se la calculadora retorne
 * el primer valor
 */
?>
