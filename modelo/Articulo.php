<?php
require_once 'conexion.php';

function obtenerArticulos() {
    $db = getConnection();
    $sql = "SELECT * FROM articulos ORDER BY nombre ASC";
    $stmt = $db->query($sql);
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function guardarArticulo($data) {
    $db = getConnection();
    $sql = "INSERT INTO articulos (nombre, descripcion, descripcion_breve, precio, calificacion) VALUES (?, ?, ?, ?, ?)";
    $stmt = $db->prepare($sql);
    $stmt->execute([
        $data['nombre'],
        $data['descripcion'],
        $data['descripcionBreve'],
        $data['precio'],
        $data['calificacion']
    ]);
}

function obtenerArticuloPorId($id) {
    $db = getConnection();
    $stmt = $db->prepare("SELECT * FROM articulos WHERE id = ?");
    $stmt->execute([$id]);
    return $stmt->fetch(PDO::FETCH_ASSOC);
}

function actualizarArticulo($data) {
    $db = getConnection();
    $sql = "UPDATE articulos SET nombre = ?, descripcion = ?, descripcion_breve = ?, precio = ?, calificacion = ? WHERE id = ?";
    $stmt = $db->prepare($sql);
    $stmt->execute([
        $data['nombre'],
        $data['descripcion'],
        $data['descripcion_breve'],
        $data['precio'],
        $data['calificacion'],
        $data['id']
    ]);
}

function eliminarArticulo($id) {
    $db = getConnection();
    $stmt = $db->prepare("DELETE FROM articulos WHERE id = ?");
    $stmt->execute([$id]);
}
