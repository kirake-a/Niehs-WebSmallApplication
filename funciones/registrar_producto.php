<?php

include_once("../config.inc.php");
include_once("acceder_base_datos.php");


$descripcion = $_POST['descripcion'];
$precio = $_POST['precio'];
$existencia = $_POST['existencia'];
$tipo = $_POST['tipo'];
$talla = $_POST['talla'];
$color = $_POST['color'];
$genero = $_POST['genero'];


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


if (move_uploaded_file($ruta_temporal, $ruta_final)) {
    $pconexion = abrirConexion();
    seleccionarBaseDatos($pconexion);

    $cquery = "INSERT INTO product "; 
    $cquery .= " (description,cost,amount,image_name,type,size,color,gender) VALUES ";
    $cquery .= "('$descripcion', $precio, $existencia, '$nombre_archivo', '$tipo', '$talla', '$color', '$genero')";

    insertarDatos($pconexion, $cquery);

    cerrarConexion($pconexion);
    $response = array("mensaje" => "Producto añadido");
    echo json_encode($response);
} else {
    $response = array("mensaje" => "Producto no añadido");
    echo json_encode($response);
}


function tieneCaracterEspecifico($cadena, $caracter) {
    return strpos($cadena, $caracter) !== false;
}

exit();

?>