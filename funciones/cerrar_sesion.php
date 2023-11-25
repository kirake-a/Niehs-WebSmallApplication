<?php
    // Inicia la sesión
    //session_start();

    // Borra todas las variables de sesión
    $_SESSION = array();

    // Destruye la sesión
    session_destroy();

    // Redirige al usuario a la página de inicio de sesión o a cualquier otra página
    header("Location:".$GLOBALS["root_site"]."index.php");
    exit();
?>