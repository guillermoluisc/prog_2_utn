<?php
require_once 'modelo/contacto.php';

function listarContactos() {
    $contactos = obtenerContactos();
    include 'vista/listar.php';
}

function mostrarFormularioCrear() {
    include 'vista/crear.php';
}

function guardarNuevoContacto() {
    guardarContacto($_POST);
    header('Location: index.php');
}

function mostrarFormularioEditar() {
    $contacto = obtenerContactoPorId($_GET['id']);
    include 'vista/editar.php';
}

function actualizarContactoExistente() {
    actualizarContacto($_POST);
    header('Location: index.php');
}

function eliminarContactoExistente() {
    eliminarContacto($_GET['id']);
    header('Location: index.php');
}
