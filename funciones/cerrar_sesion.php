<?php
    // Inicia la sesión
    session_start();

    // Borra todas las variables de sesión
    session_unset();
    
    // Destruye la sesión
    session_destroy();

    // Redirige al usuario a la página de inicio de sesión o a cualquier otra página
    $curl = "Location:http://localhost/niehs/"."index.php";
    header($curl);
    exit();
?>