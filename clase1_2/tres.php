<?php
// Par o impar
function par_o_impar($num) {
    if ($num % 2 == 0) {
        return "$num es par";
    } else {
        return "$num es impar";
    }
}

// Edad
function tipo_edad($edad) {
    if ($edad < 18) {
        return "Menor de edad";
    } elseif ($edad <= 64) {
        return "Adulto";
    } else {
        return "Adulto mayor";
    }
}
?>
