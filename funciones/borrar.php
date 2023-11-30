<?php
    include_once("../config.inc.php");
    include_once("acceder_base_datos.php");

    $redirection = "Location:".$GLOBALS["root_site"]."views/menu_administrador.php";

    if (isset($_GET["id_producto"])) {
        $pconexion = abrirConexion();
        seleccionarBaseDatos($pconexion);

        $cid_producto = $_GET["id_producto"];

        $cquery = "DELETE FROM product WHERE id_producto = '$cid_producto'";

        borrarDatos($pconexion, $cquery);
        cerrarConexion($pconexion);
    }

    header($redirection);
    exit();
?>