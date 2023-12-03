<?php
include_once("../config.inc.php");
include_once("acceder_base_datos.php");

//Conexión con el servidor de base de datos
$pconexion = abrirConexion();
//Selección de la base de datos
seleccionarBaseDatos($pconexion);

// Recuperar la matriz desde la solicitud POST
$data = json_decode(file_get_contents("php://input"), true);

// La matriz estará disponible en $data['productosVendidos']
$productosVendidos = $data['productosVendidos'];

foreach($productosVendidos as $fila){
    $cantidad = (int)$fila[1];
    $id = (int)$fila[0];
    //Se crea la sentencia SQL para reducir la cantidad en la base de datos
    $cquery = "UPDATE product SET amount = amount - ". $cantidad . " WHERE id_producto = ". $id .";";
    
    //Se ejecuta la sentencia SQL
    editarDatos($pconexion, $cquery);

}


cerrarConexion($pconexion);





?>