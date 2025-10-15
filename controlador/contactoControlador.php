<?php
require_once 'modelo/contacto.php';

function listarContactos() {
    $porPagina = 5; // Cantidad de contactos por página
    $pagina = isset($_GET['pagina']) ? (int)$_GET['pagina'] : 1;
    $inicio = ($pagina - 1) * $porPagina;
    //por ahora 5 en inicio y 5 en porPagina (elementos por pagina)

    $contactos = obtenerContactos($inicio, $porPagina); //5 (todos esos 5)

    $totalContactos = contarContactos(); //29
    $totalPaginas = ceil($totalContactos / $porPagina);

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


// $nombre_final = 'default.jpg';
// $directorio_destino = '../assets/img/';


// if (isset($_FILES['imagen']) && $_FILES['imagen']['error'] !== UPLOAD_ERR_NO_FILE) {
    
//     $nombre_archivo_original = $_FILES['imagen']['name'];
//     $archivo_temporal = $_FILES['imagen']['tmp_name'];
//     $error_codigo = $_FILES['imagen']['error'];

    
//     if ($error_codigo === UPLOAD_ERR_OK) {
        
        
//         $extension = strtolower(pathinfo($nombre_archivo_original, PATHINFO_EXTENSION));
//         $extensiones_permitidas = ['jpg', 'jpeg', 'png', 'gif', 'webp'];
        
//         if (in_array($extension, $extensiones_permitidas)) {
            
           
//             $nombre_final_upload = uniqid('img_', true) . '.' . $extension;
//             $ruta_destino = $directorio_destino . $nombre_final_upload;

            
//             if (move_uploaded_file($archivo_temporal, $ruta_destino)) {
              
//                 $nombre_final = $nombre_final_upload;
//             } else {
                
//                 error_log("Error al mover el archivo temporal. Permisos o destino incorrecto: $ruta_destino");
                
//             }
//         }
//     } else {
//         // FALLO EN LA SUBIDA INICIAL (ej: tamaño, archivo corrupto)
//         error_log("Fallo de subida: Código de error $error_codigo. Archivo: $nombre_archivo_original");
//     }
// }

// $nombre_articulo = trim($_POST["nombre"] ?? 'Artículo sin Nombre');
// $precio = (float)($_POST["precio"] ?? 0.00);
// $stock = (int)($_POST["stock"] ?? 0);
// $marca = $_POST["id_marca"];

// $articulo = [
//     "nombre" => $nombre_articulo,
//     "precio" => $precio,
//     "stock" => $stock,
//     "id_marca" => $marca,
//     "imagen" => $nombre_final 
// ];

// if (isset($_POST["id"])) {
//     $articulo["id"] = (int)$_POST["id"];
// }

// guardarArticulo($articulo);
// header("Location: ../index.php");
// exit;