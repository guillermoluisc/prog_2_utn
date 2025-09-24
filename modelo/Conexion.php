<?php
function getConnection() {
    $host = 'localhost';
    $db   = 'base';
    $user = 'root';
    $pass = '';
    $charset = 'utf8mb4';
    $dsn = "mysql:host=$host;dbname=$db;charset=$charset";
    return new PDO($dsn, $user, $pass);
}
