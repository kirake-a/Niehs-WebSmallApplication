<?php
include_once("../config.inc.php");
include_once("acceder_base_datos.php");
include_once("mantener_sesion.php");

$mensajeError = '';
$url = "Location:" . $GLOBALS["root_site"] . "index.php";

if (isset($_POST["btn_enviar"]) && $_POST["btn_enviar"] == "Iniciar sesión") {

  $url = "Location:" . $GLOBALS["root_site"] . "index.php";
  $adatos = array();
  $pconexion = abrirConexion();
  seleccionarBaseDatos($pconexion);

  $usuario = $_POST["username"];
  $contrasena = $_POST["password"];

  $cquery = "SELECT id_user FROM user";
  $cquery .= " WHERE (email='$usuario')";
  $cquery .= " AND (password='$contrasena')";

  $adatos = extraerRegistro($pconexion, $cquery);

  if (!empty($adatos)) {
    $idsesion = $adatos["id_user"] . $usuario;
    $rolUsuario = $adatos["rol"];
    session_start();

    // Guarda el usuario con el atributo ["x"] en la sesion
    $_SESSION["cidusuario"] = $idsesion;
    $_SESSION["rol"] = $rolUsuario;

    // Redirigir a diferentes paginas segun el rol del usuario
    if ($rolUsuario == 0) {
      $url = "Location:" . $GLOBALS["root_site"] . "views/carritoVacio.html";
    } elseif ($rolUsuario == 1) {
      $url = "Location:" . $GLOBALS["root_site"] . "views/carritoVacio.html";
    }

    echo "Ruta de redireccionaiento $url";
    
  } else {
    mensajeError();
  }

  cerrarConexion($pconexion);
  //echo $curl;
  header($url);
  exit();
}

function mensajeError() {
  $mensajeError = "Se ha producido un problema al iniciar sesion.\nVerifica tu correo y contraseña";
}
?>