<?php
include_once("../config.inc.php"); 
include_once("../funciones/acceder_base_datos.php");
include_once("../funciones/mantener_sesion.php");
include_once("../funciones/catalogo_productos.php");
$user_key = 0;
validarSesion($user_key);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catalogo general</title>

    <link rel="stylesheet" href="../css/header_footer.css">

    <!--Estilos del catalogo general-->
    <link rel="stylesheet" href="../css/catalogo_general.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" />

    <script src="../js/manejador_logout.js" defer></script>
    
</head>
<body>

    <div class="header-contenedor"></div>
    
    <main>
        <div class="contenedor">
        <?php
        if(isset($_GET["genero"]) && isset($_GET["tipo"])){
            echo traerProductosPorTipoGenero($_GET["genero"], $_GET["tipo"]);
        }
        ?>
        </div>
    </main>

    <div class="footer-contenedor"></div>

    

    <script src="../js/footer.js"></script>
    <script src="../js/header.js"></script>
    <script src="../js/barra_navegacion.js"></script>
</body>
</html>