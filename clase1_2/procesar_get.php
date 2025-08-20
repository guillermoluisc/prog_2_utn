<?php

include "ejerSuma.php";

if (isset($_GET['numA']) && isset($_GET['numB'])) {
    $a = (int) $_GET['numA'];
    $b = (int) $_GET['numB'];
    echo suma($a,$b);
} else {
    echo "Por favor, completa el formulario.";
}
?>
