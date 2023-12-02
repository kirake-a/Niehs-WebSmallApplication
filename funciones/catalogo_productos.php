<?php


    function traerProductosPorTipoGenero($gender="hombre", $type="conjunto"){
    $ccontenido = "";
	//Conexión con el servidor de base de datos
	$pconexion = abrirConexion();
	//Selección de la base de datos
	seleccionarBaseDatos($pconexion);
	//Construcción de la sentencia SQL
	
	if ($type == "noType") {
		$cquery = "SELECT id_producto, description, cost, image_name, type FROM product WHERE gender='$gender'";
	}else{
		$cquery = "SELECT id_producto, description, cost, image_name, type FROM product WHERE type='$type' AND gender='$gender'";
	}
	

	//Se ejecuta la sentencia SQL
	$lresult = mysqli_query($pconexion, $cquery);

	if (!$lresult) {
		$cerror = "No fue posible recuperar la informaci&oacute;n de la base de datos.<br>";
		$cerror .= "SQL: $cquery <br>";
		$cerror .= "Descripci&oacute;n: " . mysqli_connect_error($pconexion);
		die($cerror);
	} else {
		//Verifica que la consulta haya devuelto por lo menos un registro
		if (mysqli_num_rows($lresult) > 0) {
			//Recorre los registros arrojados por la consulta SQL
			while ($adatos = mysqli_fetch_array($lresult, MYSQLI_BOTH)) {
				$id_producto = $adatos["id_producto"];
				$genero = strtolower($gender);
				$tipoURL = encontrarCarpetaTipo($adatos["type"]);

				$urlIMG = '../imagenes/productos/'.$genero.'/'.$tipoURL.'/'.$adatos['image_name'];
				$hrefVistaIndividual = '../views/producto.php?id_producto='.$id_producto;

                //Primer producto de la fila del contenido
				$ccontenido .= '<div class="rectangulo-contenedor">';
				$ccontenido .= '<a href="'.$hrefVistaIndividual.'" class="rectangulo-enlace">';
				$ccontenido .= '<div class="rectangulo" style="background-image: url('.$urlIMG.');">';
				$ccontenido .= '<div class="rectangulo-azul">';
				$ccontenido .= '<div class="precio">$ '.$adatos["cost"].'</div>';
				$ccontenido .= '</div>';
				$ccontenido .= '</div>';
				$ccontenido .= '</a>';
				$ccontenido .= '<a href="#">';
				$ccontenido .= '<div class="descripcion-contenedor">'.$adatos["description"].'</div>';
				$ccontenido .= '</a>';
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

	function encontrarCarpetaTipo($tipo){
		switch($tipo){
			case "Conjunto": return "conjunto";
			case "Deportivo": return "deportivo";
			case "Sudadera": return "sudadera";
			case "Chaqueta/abrigo": return "chaqueta-abrigo";
			case "Accesorio": return "accesorio";
			case "Ropa interior": return "ropa-interior";
		}
	}
?>