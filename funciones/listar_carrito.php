<?php

function listarCarrito()
{
    $ccontenido = "";
    //Conexión con el servidor de base de datos
    $pconexion = abrirConexion();
    //Selección de la base de datos
    seleccionarBaseDatos($pconexion);

    //Array para guardar las filas recuperadas de la base de datos
    $queries = array();

    //Se guarda el valor de la cookie de la sesión para no considerarla en la sentencia SQL
    $valorSesion = reset($_COOKIE);

    $numeroCookies = count($_COOKIE);
    if($numeroCookies < 2){
        header("Location: ../views/carrito_vacio.php");
    }

    //foreach para recorrer todas las cookies
    foreach($_COOKIE as $nombreCookie => $valorCookie){
        //If para saltar la cookie con el valor de la sesión
        if($valorCookie !== $valorSesion){
            //Construcción de la sentencia SQL
            $queries[] = "SELECT * FROM product WHERE id_producto = $valorCookie";
        }
       
    }

    //foreach para listar los productos en el carrito
    foreach($queries as $cquery){
        $lresult = mysqli_query($pconexion, $cquery);

        if (!$lresult) {
            $cerror = "No fue posible recuperar la informaci&oacute;n de la base de datos.<br>";
            $cerror .= "SQL: $cquery <br>";
            $cerror .= "Descripci&oacute;n: " . mysqli_connect_error($pconexion);
            die($cerror);
        }else {
            //Verifica que la consulta no esté vacía
            if (mysqli_num_rows($lresult) > 0) {
                $adatos = mysqli_fetch_array($lresult, MYSQLI_BOTH);
                    $cid_producto = $adatos["id_producto"];
                    $tipo_directorio = strtolower($adatos["type"]);
                    $genero_directorio = strtolower($adatos["gender"]);
                    if(tieneCaracterEspecifico($tipo_directorio,'/') || tieneCaracterEspecifico($tipo_directorio,' ')){
                        $tipo_directorio = str_replace('/', '-', $tipo_directorio);
                        $tipo_directorio = str_replace(' ', '-', $tipo_directorio);
                    }

                    $ccontenido .= '<div class="contenedor-producto">';

                    //Se concatena el id oculto para identificar al momento de pagar
                    $ccontenido .= '<p class="producto-id">' . $adatos["id_producto"] . '</p> ';

                    //Se concatena con el html para poner la imagen del producto
                    $ccontenido .= '<div class="producto-imagen"> ';
                    $ccontenido .= '<img src= "../imagenes/productos/';
                    $ccontenido .= $genero_directorio . '/';
                    $ccontenido .= $tipo_directorio . '/';
                    $ccontenido .= $adatos["image_name"] . '" class="imagen-producto"> ';
                    $ccontenido .= '</div> ';

                    //Se contatena con el html para poner los detalles del producto
                    $ccontenido .= '<div class="producto-detalles"> ';
                    $ccontenido .= '<p class="producto-descripcion">' . $adatos["description"] . '</p> ';
                    $ccontenido .= '<p class="producto-costo">$' . $adatos["cost"] . '</p> ';
                    $ccontenido .= '<p class="producto-disponible">Disponibles: ' . $adatos["amount"] . '</p> ';
                    $ccontenido .= '<div class="producto-detalles-finales"> ';
                    $ccontenido .= '<label>Cantidad: <input type="number" name="cantidad" id="cantidad" value="1" min="1" max="' . $adatos["amount"] . '" step="1"/></label> ';
                    $ccontenido .= '<button class="producto-boton-eliminar">Eliminar</button>';
                    $ccontenido .= '</div> </div>';

                    $ccontenido .= '</div>';
                }
            }
        

    }
    mysqli_free_result($lresult);
    if (empty($ccontenido)) {
		$ccontenido .= "<tr>";
		$ccontenido .= "<td colspan=\"11\">No se obtuvieron resultados</td>";
		$ccontenido .= "</tr>";
	}
    cerrarConexion($pconexion);
    return $ccontenido;
}

function tieneCaracterEspecifico($cadena, $caracter) {
    return strpos($cadena, $caracter) !== false;
}


?>