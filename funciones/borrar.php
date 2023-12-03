<?php
    include_once("../config.inc.php");
    include_once("acceder_base_datos.php");

    $redirection = "Location: " . $GLOBALS["root_site"] . "views/menu_administrador.php";

    $id_producto = $_GET['cid_producto'];
    $genero = $_GET['gender'];
    $tipo = $_GET['type'];
    $nombre_imagen = $_GET['image_name'];

    $ruta_destino = __DIR__ . "/../imagenes/productos/" . $genero . "/" . $tipo . "/"; 
    $ruta_final = $ruta_destino . $nombre_imagen;

    if (file_exists($ruta_final)) {
        if (unlink($ruta_final)) {
            $response = array("mensaje" => "Archivo eliminado.");
            echo json_encode($response);
        } else {
            $response = array("mensaje" => "No se pudo eliminar el archivo.");
            echo json_encode($response);
        }
    }

    if (isset($_GET["cid_producto"])) {
        $pconexion = abrirConexion();
        seleccionarBaseDatos($pconexion);
    
        $cid_producto = $_GET["cid_producto"];
    
        $cquery = "DELETE FROM product";
        $cquery .= " WHERE id_producto = $cid_producto";
    
        borrarDatos($pconexion, $cquery);
        cerrarConexion($pconexion);
    }      

    header($redirection);
    exit();
?>