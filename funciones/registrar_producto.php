<?php

include_once("../config.inc.php");
include_once("acceder_base_datos.php");


$pconexion = abrirConexion();
seleccionarBaseDatos($pconexion);

// Datos del producto
$data = json_decode(file_get_contents('php://input'), true);

$descripcion = $data['descripcion'];
$precio = $data['precio'];
$existencia = $data['existencia'];
$imagen = $data['imagen'];
$tipo = $data['tipo'];
$talla = $data['talla'];
$color = $data['color'];
$genero = $data['genero'];


$cquery = "INSERT INTO product "; 
$cquery .= " (description,cost,amount,image_name,type,size,color,gender) VALUES ";
$cquery .= "('$descripcion', $precio, $existencia, '$imagen', '$tipo', '$talla', '$color', '$genero')";

insertarDatos($pconexion, $cquery);

cerrarConexion($pconexion);
$response = array("mensaje" => "Producto añadido");
echo json_encode($response);


exit();

?>