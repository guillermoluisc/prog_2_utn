<?php
// ===================== MODELO =====================
// Arreglo que simula la base de datos
$usuarios = [
    ['id' => 1, 'nombre' => 'Juan', 'edad' => 25],
    ['id' => 2, 'nombre' => 'Ana', 'edad' => 30],
    ['id' => 3, 'nombre' => 'Luis', 'edad' => 22],
];


// ===================== VISTAS =====================
function mostrarLista($usuarios) {
    echo "<h2>Lista de usuarios</h2><ul>";
    foreach ($usuarios as $u) {
        echo "<li>{$u['nombre']} ({$u['edad']} años)</li>";
    }
    echo "</ul>";
}

function mostrarDetalle($usuario) {
    echo "<h2>Detalle de usuario</h2>";
    echo "Nombre: {$usuario['nombre']}<br>";
    echo "Edad: {$usuario['edad']}<br>";
}

// ===================== CONTROLADOR =====================
function obtenerUsuarioPorId($usuarios, $id) {
    foreach ($usuarios as $u) {
        if ($u['id'] == $id) return $u;
    }
    return null;
}

// ===================== EJECUCIÓN =====================
// Mostramos toda la lista
mostrarLista($usuarios);

// Mostramos el detalle de un usuario específico
$usuario = obtenerUsuarioPorId($usuarios, 2); // por ejemplo, id = 2
mostrarDetalle($usuario);
?>
