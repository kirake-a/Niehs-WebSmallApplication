<?php
require '../config/constants.php';

    function traerProductosPorTipoGenero($gender, $type){

		if(isset($gender) && isset($type)){
			$ccontenido = "";
			//Conexión con el servidor de base de datos
			$pconexion = abrirConexion();
			//Selección de la base de datos
			seleccionarBaseDatos($pconexion);
			//Construcción de la sentencia SQL
			
			if ($type == "noType") {
				$cquery = "SELECT id_producto, description, cost, image_name, amount, type FROM product WHERE gender='$gender'";
			}else{
				$cquery = "SELECT id_producto, description, cost, image_name, amount,  type FROM product WHERE type='$type' AND gender='$gender'";
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

						if($adatos["amount"] != 0){ //Si exite stock del prodcuto entonces se trae al catalogo
							$id_producto = $adatos["id_producto"];
							$genero = strtolower($gender);
							$tipoURL = encontrarCarpetaTipo($adatos["type"]);

							$urlIMG = '../imagenes/productos/'.$genero.'/'.$tipoURL.'/'.$adatos['image_name'];

							$token = hash_hmac('sha1', $id_producto, KEY_TOKEN);
							$hrefVistaIndividual = '../views/producto.php?id_producto='.$id_producto.'&token='.$token.'&genero='.$gender.'&tipo='.$tipoURL;

							//Primer producto de la fila del contenido
							$ccontenido .= '<div class="rectangulo-contenedor">';
							$ccontenido .= '<a href="'.$hrefVistaIndividual.'" class="rectangulo-enlace">';
							$ccontenido .= '<div class="rectangulo" style="background-image: url('.$urlIMG.');">';
							$ccontenido .= '<div class="rectangulo-azul">';
							$ccontenido .= '<div class="precio">$ '.$adatos["cost"].'</div>';
							$ccontenido .= '</div>';
							$ccontenido .= '</div>';
							$ccontenido .= '</a>';
							$ccontenido .= '<a href="'.$hrefVistaIndividual.'">';
							$ccontenido .= '<div class="descripcion-contenedor">'.$adatos["description"].'</div>';
							$ccontenido .= '</a>';
							$ccontenido .= '</div>';
						}else{
							$id_producto = $adatos["id_producto"];
							$genero = strtolower($gender);
							$tipoURL = encontrarCarpetaTipo($adatos["type"]);

							$urlIMG = '../imagenes/productos/'.$genero.'/'.$tipoURL.'/'.$adatos['image_name'];

							$token = hash_hmac('sha1', $id_producto, KEY_TOKEN);
							$hrefVistaIndividual = '../views/producto.php?id_producto='.$id_producto.'&token='.$token.'&genero='.$gender.'&tipo='.$tipoURL;

							//Primer producto de la fila del contenido
							$ccontenido .= '<div class="rectangulo-contenedor">';
							$ccontenido .= '<div class="rectangulo" style="background-image: url('.$urlIMG.'); display:flex; align-items: flex-end; justify-content: flex-end;">';
							$ccontenido .= '<h1 style="margin:0;color: white; text-align: center; background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)); width:100%; height:100%;"">NO DISPONIBLE</h1>
							';
							$ccontenido .= '<div class="">';
							$ccontenido .= '<div class=""></div>';
							$ccontenido .= '</div>';
							$ccontenido .= '</div>';
							$ccontenido .= '<div class="descripcion-contenedor">'.$adatos["description"].'</div>';
							$ccontenido .= '</div>';
						}

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
		}else{
			$pageNotFound404 = '<span style="font-size: 20px; font-weight: bold; font-family: sans-serif;">¡Discúlpanos, nos topamos con un error al procesar tu solicitud!</span></br>';
            $pageNotFound404 .= '</br><img src="../imagenes/error.jpg" style="text-align: center;"></br></br>';
            $pageNotFound404 .= '<span style="font-weight: BOLD; font-family: sans-serif;">ERROR: 404</span>';

            echo $pageNotFound404;
			exit();
		}
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