<?php
require_once 'modelo/Articulo.php';

function listarArticulos()
{
    $articulos = obtenerArticulos();
    include 'vista/listarArticulos.php';
}

function mostrarFormularioCrearArticulo()
{
    include 'vista/crearArticulo.php';
}

function guardarNuevoArticulo()
{
    guardarArticulo($_POST);
    header('Location: index.php');
}

function mostrarFormularioEditarArticulo()
{
    $articulo = obtenerArticuloPorId($_GET['id']);
    include 'vista/editarArticulo.php';
}

function actualizarArticuloExistente()
{
    actualizarArticulo($_POST);
    header('Location: index.php');
}

function eliminarArticuloExistente()
{
    eliminarArticulo($_GET['id']);
    header('Location: index.php');
}
function listarArticulosCards()
{
    $articulos = obtenerArticulos();
    include 'vista/articulosCard.php';
}

function agregarAlCarrito()
{
    if (!isset($_SESSION['carrito'])) {
        $_SESSION['carrito'] = [];
    }

    $id = $_POST['id'];
    $articulo = obtenerArticuloPorId($id);

    if (!$articulo) {
        header("Location: index.php?accion=listarArticulosCards&error=not_found");
        exit;
    }

    $stock = $articulo['stock'];

    // Si ya existe en el carrito
    if (isset($_SESSION['carrito'][$id])) {
        $cantidadActual = $_SESSION['carrito'][$id]['cantidad'];

        if ($cantidadActual < $stock) {
            $_SESSION['carrito'][$id]['cantidad']++;
        } else {
            // Ya llegó al stock máximo → no se permite
            header("Location: index.php?accion=ver_carrito&error=sin_stock");
            exit;
        }
    } else {
        if ($stock > 0) {
            $_SESSION['carrito'][$id] = [
                'id'       => $articulo['id'],
                'nombre'   => $articulo['nombre'],
                'precio'   => $articulo['precio'],
                'cantidad' => 1
            ];
        } else {
            header("Location: index.php?accion=listarArticulosCards&error=sin_stock");
            exit;
        }
    }

    header("Location: index.php?accion=ver_carrito");
}


function verCarrito()
{
    $carrito = $_SESSION['carrito'] ?? [];
    include 'vista/verCarrito.php';
}

function eliminarDelCarrito()
{
    $id = $_GET['id'];
    if (isset($_SESSION['carrito'][$id])) {
        if ($_SESSION['carrito'][$id]['cantidad'] > 1) {
            $_SESSION['carrito'][$id]['cantidad']--;
        } else {
            unset($_SESSION['carrito'][$id]);
        }
    }

    header("Location: index.php?accion=ver_carrito");
}

function checkout()
{
    $ventas = $_SESSION['carrito'] ?? [];
    foreach ($ventas as $item) {
        generarVenta($item);
    }

    //limpiar carrito
    unset($_SESSION['carrito']);

    include 'vista/articulosCard.php';
}
