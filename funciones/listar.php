<?php
include_once("../config.inc.php");
include_once("acceder_base_datos.php");

if (isset($_GET['type'])) {
    $type = $_GET['type'];
    echo listarProductos($type);
} else {
    echo "<p>Seleccione una opción para ver la información correspondiente.</p>";
}

function listarProductos($type = todo)
{

	$ccontenido = "";
	//Conexión con el servidor de base de datos
	$pconexion = abrirConexion();
	//Selección de la base de datos
	seleccionarBaseDatos($pconexion);
	//Construcción de la sentencia SQL
	$cquery = "SELECT * FROM product";

    // Si se especifica un tipo y no es "todo", agregar una condición WHERE al query
    if (!is_null($type) && strtolower($type) !== "todo") {
        $cquery .= " WHERE type = '" . mysqli_real_escape_string($pconexion, $type) . "'";
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
			$ccontenido .="<tr><th>ID</th><th>DESCRIPCI&Oacute;N</th><th>COSTO</th><th>CANTIDAD</th>";
			$ccontenido .="<th>TIPO</th><th>TAMA&Ntilde;O</th><th>COLOR</th><th>G&Eacute;NERO</th>";
			$ccontenido .="<th>ACCIONES</th></tr>";
			//Recorre los registros arrojados por la consulta SQL
			while ($adatos = mysqli_fetch_array($lresult, MYSQLI_BOTH)) {
				$cid_producto = $adatos["id_producto"]; //**

				$ccontenido .= "<tr>";

				$ccontenido .= '<td id="id_producto">' . $adatos["id_producto"] . '</td>';
				$ccontenido .= '<td class="celda-descripcion" id="description">' . $adatos["description"] . '</td>';
				$ccontenido .= '<td id="cost">'. $adatos["cost"] .'</td>';
				$ccontenido .= '<td id="amount">'. $adatos["amount"] .'</td>';
				$ccontenido .= '<td id="type">'. $adatos["type"] .'</td>';
				$ccontenido .= '<td id="size">'. $adatos["size"] .'</td>';
				$ccontenido .= '<td id="color">'. $adatos["color"] .'</td>';
				$ccontenido .= '<td id="gender">'. $adatos["gender"] .'</td>';

				$ccontenido .= '<td class="acciones">';
				$ccontenido .= '<span class="material-symbols-outlined edit"><a href="editar_producto.php?modo=editar&id='.$adatos["id_producto"].'">edit_square</a></span>';
				$ccontenido .= '<span class="material-symbols-outlined delete" id="delete" name="delete" data-id="<?php echo $adatos[\'id_producto\']; ?>">';
				$ccontenido .= '<a href="../funciones/borrar.php?cid_producto='. $adatos["id_producto"] .'">delete</a></span>';
				$ccontenido .= '</td>';

				$ccontenido .= "</tr>";
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
?>