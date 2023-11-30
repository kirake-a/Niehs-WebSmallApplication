<?php

include_once("../config.inc.php");
include_once("acceder_base_datos.php");

$data = json_decode(file_get_contents('php://input'), true);

$id = $data['id'];


$cquery = "SELECT ";
$cquery .= "id_producto, description, cost,amount, image_name, type, size, color, gender FROM product"; 
$cquery .= " WHERE id_producto = $id";

$producto_datos = array();

$pconexion = abrirConexion();
seleccionarBaseDatos($pconexion);
$producto_datos = extraerRegistro($pconexion, $cquery);

$response = array("descripcion" => $producto_datos["description"], "precio" => $producto_datos["cost"], "existencia" => $producto_datos["amount"], "imagen" => $producto_datos["image_name"], "tipo" => $producto_datos["type"], "talla" => $producto_datos["size"], "color" => $producto_datos["color"], "genero" => $producto_datos["gender"]);
echo json_encode($response);

cerrarConexion($pconexion);
exit();

?>