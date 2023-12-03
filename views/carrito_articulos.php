<?php
include_once("../config.inc.php"); 
include_once("../funciones/acceder_base_datos.php");
include_once("../funciones/mantener_sesion.php");
include_once("../funciones/catalogo_productos.php");
include_once("../funciones/listar_carrito.php");
$user_key = 0;
validarSesion($user_key);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tu carrito</title>

    <link rel="stylesheet" href="../css/carrito_articulos.css">
</head>
<body>

    <div class="header-contenedor"></div>

    <main class="container">
        <section class="productos">
            <div class="title">
                <h2>Productos en carrito</h2>
            </div>
            <div class="products">
                <?php
                echo listarCarrito();
                ?>
            </div>
        </section>

        <section class="resumen-pago">
            <form action="" method="post">
                <div class="subtotal">
                    <label id="subtotal" for="">Subtotal:</label>
                    <label for="">$ <label id="subtotal-valor" for=""></label></label>
                </div>

                <div class="iva">
                    <label id="iva" for="">IVA:</label>
                    <label for="">$ <label id="iva-valor" for=""></label></label>
                </div>

                <div class="total">
                    <label id="total" for="">Total:</label>
                    <label for="">$ <label id="total-valor" for=""></label></label>
                </div>

                <div class="pay-container">
                    <input class="pay" type="submit" value="Pagar">
                </div>
            </form>
        </section>
    </main>

    <div class="footer-contenedor"></div>


    <script src="../js/footer.js"></script>
    <script src="../js/header.js"></script>
    <script src="../js/manejador_carrito.js"></script>
    <script src="../js/ir_al_carrito.js"></script>
    <script src="../js/manejador_logout.js"></script>

</body>
</html>