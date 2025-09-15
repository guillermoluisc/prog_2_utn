<?php
require_once 'conexion.php';

function obtenerContactos() {
    $db = getConnection();
    $sql = "SELECT * FROM contactos ORDER BY nombre ASC";
    $stmt = $db->query($sql);
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function guardarContacto($data) {
    $db = getConnection();
    $sql = "INSERT INTO contactos (nombre, telefono, email, direccion) VALUES (?, ?, ?, ?)";
    $stmt = $db->prepare($sql);
    $stmt->execute([
        $data['nombre'],
        $data['telefono'],
        $data['email'],
        $data['direccion']
    ]);
}

function obtenerContactoPorId($id) {
    $db = getConnection();
    $stmt = $db->prepare("SELECT * FROM contactos WHERE id = ?");
    $stmt->execute([$id]);
    return $stmt->fetch(PDO::FETCH_ASSOC);
}

function actualizarContacto($data) {
    $db = getConnection();
    $sql = "UPDATE contactos SET nombre = ?, telefono = ?, email = ?, direccion = ? WHERE id = ?";
    $stmt = $db->prepare($sql);
    $stmt->execute([
        $data['nombre'],
        $data['telefono'],
        $data['email'],
        $data['direccion'],
        $data['id']
    ]);
}

function eliminarContacto($id) {
    $db = getConnection();
    $stmt = $db->prepare("DELETE FROM contactos WHERE id = ?");
    $stmt->execute([$id]);
}
