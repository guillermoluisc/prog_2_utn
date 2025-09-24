<?php
require_once 'controlador/contactoControlador.php';
require_once 'controlador/articuloControlador.php';

$accion = $_GET['accion'] ?? 'listar';

switch ($accion) {
    case 'crear':
        mostrarFormularioCrear();
        break;
    case 'crear_articulo':
        mostrarFormularioCrearArticulo();
        break;
    case 'guardar':
        guardarNuevoContacto();
        break;
    case 'guardar_articulo':
        guardarNuevoArticulo();
        break;
    case 'editar':
        mostrarFormularioEditar();
        break;
    case 'editar_articulo':
        mostrarFormularioEditarArticulo();
        break;
    case 'actualizar':
        actualizarContactoExistente();
        break;
    case 'actualizar_articulo':
        actualizarArticuloExistente();
        break;
    case 'eliminar':
        eliminarContactoExistente();
        break;
    case 'eliminar_articulo':
        eliminarArticuloExistente();
        break;
    case 'listar_articulos':
        listarArticulos();
        break;
    default:
        listarContactos();
        break;
}
