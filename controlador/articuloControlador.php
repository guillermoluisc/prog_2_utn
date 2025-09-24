<?php
require_once 'modelo/Articulo.php';

function listarArticulos() {
    $articulos = obtenerArticulos();
    include 'vista/listarArticulos.php';
}

function mostrarFormularioCrearArticulo() {
    include 'vista/crearArticulo.php';
}

function guardarNuevoArticulo() {
    guardarArticulo($_POST);
    header('Location: index.php');
}

function mostrarFormularioEditarArticulo() {
    $articulo = obtenerArticuloPorId($_GET['id']);
    include 'vista/editarArticulo.php';
}

function actualizarArticuloExistente() {
    actualizarArticulo($_POST);
    header('Location: index.php');
}

function eliminarArticuloExistente() {
    eliminarArticulo($_GET['id']);
    header('Location: index.php');
}
