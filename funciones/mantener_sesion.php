<?php
function validarSesion() {
  //La función session_start() carga las variables registradas en el arreglo $_SESSION
  //session_start();
  if (!isset($_SESSION["id_user"])) {
    $cdestino = "Location:index.php";
    header("Location:index.php");
    exit();
  }
}

function iniciarSesion($cidlogin) {
  session_start();
  $_SESSION["cidusuario"] = $cidlogin;
}
?>