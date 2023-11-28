<?php
include_once("../config.inc.php");
include_once("acceder_base_datos.php");
include_once("../funciones/mantener_sesion.php");

if (isset($_POST["btn_enviar"]) && $_POST["btn_enviar"] == "Iniciar sesión") {

  $curl = "Location:" . $GLOBALS["root_site"] . "index.php";
  $adatos = array();
  $pconexion = abrirConexion();
  seleccionarBaseDatos($pconexion);

  $emailUser = $_POST["emailUser"];
  $passwordUser = $_POST["passwordUser"];

  $cquery = "SELECT id_user, rol FROM user";
  $cquery .= " WHERE (email='$emailUser')";
  $cquery .= " AND (password='$passwordUser')";

  $cnquery = "SELECT id_user, rol FROM user WHERE email = ? AND password = ?";

  $adatos = extraerRegistro($pconexion, $cquery);

  $stmt = mysqli_prepare($pconexion, $cnquery);
  mysqli_stmt_bind_param($stmt, "ss", $emailUser, $passwordUser);
  mysqli_stmt_execute($stmt);
  mysqli_stmt_bind_result($stmt, $id_user, $rol);

  if (mysqli_stmt_fetch($stmt)) {
    $user_key = $rol . $id_user;
    iniciarSesion($user_key);

    //Verificar si es administrador o es cliente
    if ($adatos["rol"] == 1) {
      $curl = "Location:" . $GLOBALS["root_site"] . "views/menu_administrador.php";
    } else if ($adatos["rol"] == 0) {
      $curl = "Location:" . $GLOBALS["root_site"] . "views/catalogo_general.php";
    }

  } else {
    // Usuario no encontrado, establecer mensaje de error
    $userNotFound = "* Su correo o contraseña son incorrectos.\nIntentelo nuevamente, por favor.";
    $curl = "Location:" . $GLOBALS["root_site"] . "index.php";
  }

  cerrarConexion($pconexion);
  header($curl);
  exit();
}
?>