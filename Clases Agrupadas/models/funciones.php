<?php
function getConnection() {
  $host = 'localhost';      // o la IP del servidor
  $db   = 'base';        // nombre de la base
  $user = 'root';     // usuario de la base
  $pass = '';    // contraseña
  $charset = 'utf8mb4';
  $dsn = "mysql:host=$host;dbname=$db;charset=$charset";
  return new PDO($dsn, $user, $pass);
}

function obtenerArticulos() {
  $pdo = getConnection();
  $sql = "SELECT * FROM articulos ";
  $sql.= " ORDER BY precio DESC ";
  $stmt = $pdo->query($sql);
  $articulos = [];
  while ($fila = $stmt->fetch(PDO::FETCH_ASSOC)) {
    $articulos[] = $fila;
  }
  return $articulos;
}

function guardarArticulo($array) {
  $pdo = getConnection();
  if (isset($array["id"])) {
    $sql = "UPDATE articulos SET ";
    $sql.= " nombre = :nombre, ";
    $sql.= " precio = :precio ";
    $sql.= "WHERE id = :id ";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':id', $array["id"], PDO::PARAM_INT);
  } else {
    $sql = "INSERT INTO articulos (nombre, precio) VALUES (:nombre, :precio) ";
    $stmt = $pdo->prepare($sql);
  }
  
  $stmt->bindParam(':nombre', $array["nombre"], PDO::PARAM_STR);
  $stmt->bindParam(':precio', $array["precio"], PDO::PARAM_INT);
  $stmt->execute();
}

function eliminarArticulo($id) {
  $pdo = getConnection();
  $sql = "DELETE FROM articulos WHERE id = :id ";
  $stmt = $pdo->prepare($sql);
  $stmt->bindParam(':id', $id, PDO::PARAM_INT);
  $stmt->execute();
}

function buscarPorId($id) {
  $pdo = getConnection();
  $sql = "SELECT * FROM articulos WHERE id = ? ";
  $stmt = $pdo->prepare($sql);
  $stmt->bindParam(1, $id, PDO::PARAM_INT);
  $stmt->execute();
  return $stmt->fetch(PDO::FETCH_ASSOC);
}
?>