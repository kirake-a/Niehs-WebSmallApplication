<?php
include_once("../config.inc.php"); 
include_once("../funciones/acceder_base_datos.php");
include_once("../funciones/mantener_sesion.php");
$user_key = 0;
validarSesion($user_key);
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrito vacío</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="../css/normalize.css">


    <!--Estilos del carrito vacio-->
    <link rel="stylesheet" href="../css/carrito_vacio.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" />

    <script src="../js/manejador_logout.js"></script>
</head>

<body>

    <div class="header-contenedor"></div>

    <main>
        <section class="main-frame">
            <div class="icon-container">
                <span class="material-symbols-outlined">
                    shopping_bag
                </span>
            </div>
            <div class="text-container">
                <div class="text-main">
                    <p>¡Tu carrito de Niehs está vacío!</p>
                </div>
                <div class="text-explanation">
                    <p>Tu carrito de compras vive para servirte. <br>Dale un propósito y llénalo de provisiones.</p>
                </div>
            </div>
            <div class="button-content">
                <a href="../views/catalogo_general.php?genero=Hombre&tipo=noType">Descubrir productos</a>
            </div>
        </section>

    </main>

    <div class="footer-contenedor"></div>

    <script src="../js/footer.js"></script>
    <script src="../js/header.js"></script>
    <script src="../js/ir_al_carrito.js"></script>
    <script src="../js/barra_navegacion.js"></script>
</body>

</html>