<?php
function multiplicar($a, $b) {
    return $a * $b;
}

function saludar($nombre) {
    return "Hola, $nombre!";
}

function par_o_impar($num) {
    return ($num % 2 == 0) ? "$num es par" : "$num es impar";
}

function tipo_edad($edad) {
    if ($edad < 18) return "Menor de edad";
    elseif ($edad <= 64) return "Adulto";
    else return "Adulto mayor";
}
?>
