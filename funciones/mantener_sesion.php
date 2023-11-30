<?php
// Hay que meter un argumento y validar que el argumento haga match con el SESSION["id_user], para que se pueda tener
// permiso de ver dicha pagina,
function validarSesion($user_key) {
  session_start();

  // No existe una sesion iniciada, entonces se manda a la vista de inicio de sesion
  if (!isset($_SESSION["id_user"])) {
    redirigirAlIndex();
    
  } // Existe una sesion iniciada, se necesita verificar si el usuario tiene permiso de entrar a dicha vista
  else {
    $user_rol = $_SESSION["id_user"];

    if (($user_rol != 1 && $user_key == 1) || ($user_rol != 0 && $user_key == 0)) {
      redirigirAlIndex();
    }
  }
}

function iniciarSesion($cidlogin) {
  session_start();

  $_SESSION["id_user"] = $cidlogin;
}

function redirigirAlIndex() {
  $destino = "Location: http://localhost/niehs/index.php";
  header($destino);
  exit();
}
?>