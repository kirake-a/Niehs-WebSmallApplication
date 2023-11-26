<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tu carrito</title>

    <!--Estilos del header-->
    <link rel="stylesheet" href="/css/normalize.css">
    <link rel="stylesheet" href="../css/header_footer.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">

    <!--Estilos del carrito vacio-->
    <link rel="stylesheet" href="../css/carrito_vacio.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" />

    <link rel="stylesheet" href="../css/carrito_articulos.css">
</head>
<body>

    <div class="header-contenedor"></div>

    <main class="container">
        <section class="productos">
            <div class="title">
                <h2>Productos en carrito</h2>
            </div>
            <div class="products"></div>
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
                    <input class="pay" type="submit" value="Proceder al pago">
                </div>
            </form>
        </section>
    </main>

    <div class="footer-contenedor"></div>


    <script src="../js/footer.js"></script>
    <script src="../js/header.js"></script>
    
</body>
</html>