<?php
require_once 'controlador/contactoControlador.php';

$accion = $_GET['accion'] ?? 'listar';

switch ($accion) {
    case 'crear':
        mostrarFormularioCrear();
        break;
    case 'guardar':
        guardarNuevoContacto();
        break;
    case 'editar':
        mostrarFormularioEditar();
        break;
    case 'actualizar':
        actualizarContactoExistente();
        break;
    case 'eliminar':
        eliminarContactoExistente();
        break;
    default:
        listarContactos();
        break;
}
