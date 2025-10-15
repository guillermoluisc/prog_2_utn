<?php
require_once 'conexion.php';

//inicio vale 0 y 5 por pagina
function obtenerContactos($inicio = 0, $porPagina = 5) {
    $db = getConnection();
    $sql = "SELECT * FROM contactos ORDER BY nombre ASC LIMIT $inicio, $porPagina";
    $stmt = $db->query($sql);
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function contarContactos() {
    $db = getConnection();
    $stmt = $db->query("SELECT COUNT(*) as total FROM contactos");
    $fila = $stmt->fetch(PDO::FETCH_ASSOC);
    return $fila['total'];
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


// function guardarArticulo($array) {
//   $pdo = getConnection();
//   if (($array["id"]!= 0)) {
//     $sql = "UPDATE articulos SET ";
//     $sql.= " nombre = :nombre, ";
//     $sql.= " precio = :precio, ";
//     $sql.= " stock = :stock, ";
//     $sql.= " marca = :id_marca, ";
//     $sql.= " imagen = :imagen ";
//     $sql.= "WHERE id = :id ";
//     $stmt = $pdo->prepare($sql);
//     $stmt->bindParam(':id', $array["id"], PDO::PARAM_INT);
//   } else {
//     $sql = "INSERT INTO articulos (nombre, precio, stock, id_marca, imagen) VALUES (:nombre, :precio, :stock, :id_marca :imagen) ";
//     $stmt = $pdo->prepare($sql);
//   }
  
//   $stmt->bindParam(':nombre', $array["nombre"], PDO::PARAM_STR);
//   $stmt->bindParam(':precio', $array["precio"], PDO::PARAM_INT);
//   $stmt->bindParam(':stock', $array["stock"], PDO::PARAM_INT);
//   $stmt->bindParam(':marca', $array["id_marca"], PDO::PARAM_INT);
//   $stmt->bindParam(':imagen', $array["imagen"], PDO::PARAM_STR);
//   $stmt->execute();
// }