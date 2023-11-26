<?php
include_once("../config.inc.php");
include_once("acceder_base_datos.php");

if ( isset($_POST["btn_enviar"]) && $_POST["btn_enviar"]=="Iniciar sesión"){
	
  //echo "se presiono el bot&oacute;n Enviar";	
  $curl = "Location:".$GLOBALS["root_site"]."views/index.php";
  $adatos = array();
  $pconexion = abrirConexion();	
  seleccionarBaseDatos($pconexion);
  
  $emailUser = $_POST["emailUser"];
  $passwordUser = $_POST["passwordUser"];
  
  $cquery = "SELECT id_user, rol FROM user"; 
  $cquery .= " WHERE (email='$emailUser')"; 
  $cquery .= " AND (contrasena='$passwordUser')";
  
  $adatos = extraerRegistro($pconexion, $cquery);

  if (!empty($adatos)){
	$id_session = $adatos["rol"].$usuario;
	session_start();
	$_SESSION["id_user"]=$id_session;

  //Verificar si es administrador o es cliente
    if($adatos["rol"] == 1){
      $curl = "Location:".$GLOBALS["root_site"]."views/menu_administrador.php";
    }else if($adatos["rol"] == 0){
      $curl = "Location:".$GLOBALS["root_site"]."views/catalogo_general.php";
    }
  
  }
  
  cerrarConexion($pconexion);
  //echo $curl;
  header($curl);
  exit();	
}
?> 