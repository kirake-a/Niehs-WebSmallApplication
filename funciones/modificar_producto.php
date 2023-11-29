<?php

    include_once("../config.inc.php");
    include_once("acceder_base_datos.php");

    $id = $_POST['id'];
    $descripcion = $_POST['descripcion'];
    $precio = $_POST['precio'];
    $existencia = $_POST['existencia'];
    $tipo = $_POST['tipo'];
    $talla = $_POST['talla'];
    $color = $_POST['color'];
    $genero = $_POST['genero'];


    if(isset($_FILES['imagen'])){
        $tipo_directorio = strtolower($tipo);
        $genero_directorio = strtolower($genero);
        if(tieneCaracterEspecifico($tipo_directorio,'/') || tieneCaracterEspecifico($tipo_directorio,' ')){
            $tipo_directorio = str_replace('/', '-', $tipo_directorio);
            $tipo_directorio = str_replace(' ', '-', $tipo_directorio);
        }
    
        $ruta_destino = __DIR__ . "/../imagenes/productos/" . $genero_directorio . "/" . $tipo_directorio . "/"; 
        $nombre_archivo = $_FILES['imagen']['name'];
        $ruta_temporal = $_FILES['imagen']['tmp_name'];
        $ruta_final = $ruta_destino . $nombre_archivo;
    
    
        if (file_exists($ruta_final)) {
            unlink($ruta_final); 
        }
    
        if (move_uploaded_file($ruta_temporal, $ruta_final)) {
            $pconexion = abrirConexion();
            seleccionarBaseDatos($pconexion);
    
            $cquery = "UPDATE product ";
            $cquery .= "SET description = '$descripcion', cost = $precio, amount = $existencia, image_name = '$nombre_archivo', type = '$tipo', size = '$talla', color = '$color', gender = '$genero'"; 
            $cquery .= " WHERE id_producto = $id";
    
            editarDatos($pconexion, $cquery);
    
            cerrarConexion($pconexion);
            $response = array("mensaje" => "Producto modificado");
            echo json_encode($response);
        } else {
            $response = array("mensaje" => "Producto no modificado");
            echo json_encode($response);
        }
    }else{
        $pconexion = abrirConexion();
        seleccionarBaseDatos($pconexion);

        $cquery = "UPDATE product ";
        $cquery .= "SET description = '$descripcion', cost = $precio, amount = $existencia, type = '$tipo', size = '$talla', color = '$color', gender = '$genero'"; 
        $cquery .= " WHERE id_producto = $id";

        editarDatos($pconexion, $cquery);

        cerrarConexion($pconexion);
        $response = array("mensaje" => "Producto modificado");
        echo json_encode($response);
    }


    function tieneCaracterEspecifico($cadena, $caracter) {
        return strpos($cadena, $caracter) !== false;
    }

    exit();



?>