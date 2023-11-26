<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrito pago</title>

    <link rel="stylesheet" href="../css/carrito_pago.css">
</head>
<body>

    <div class="header-contenedor"></div>

    <div class="main-frame">
    <div class="carrito">
        <div class="producto">
            <div class="producto-imagen">
                <img src="../imagenes/productos/hombre/accesorios/accesorioHombre1.jpg" class="imagen-producto">
            </div>
            <div class="producto-detalles">
                <p class="producto-descripcion">Descripcion</p>
                <p class="producto-cantidad">0$</p>
                <div class="producto-detalles-finales">
                    <p class="producto-texto-cantidad">Cantidad: 0</p>
                    <button class="producto-boton-eliminar">Eliminar</button>  
                </div>             
            </div>
        </div>
    </div>
    <div class="por-pagar">
        <div class="total">
            <p class="total-texto">Total:</p>
            <p class="total-cantidad">$0</p>
        </div>
        <div class="fondos">
            <p class="fondos-texto">Fondos disponibles:</p>
            <p class="fondos-cantidad">$0</p>
        </div>
        <div class="restante">
            <p class="restante-texto">Total restante:</p>
            <p class="restante-cantidad">$0</p>
        </div>
        <div class="boton">
            <button class="boton-pagar">Pagar</button>
        </div>
    </div>
    <div class="metodos-pago">
        <div class="texto-pago">Selecciona la forma de pago</div>
        <div class="pago-tarjeta">
            <button class="pago-tarjeta-boton">
                <p class="pago-tarjeta-texto">Tarjeta de crédito</p>
                <img src="../imagenes/footer/ImagenTarjetaCredito.png" class="pago-tarjeta-imagen">
            </button>
        </div>
        <div class="pago-paypal">
            <button class="pago-paypal-boton">
                <img src="../imagenes/footer/ImagenSimboloPaypal.png" class="pago-paypal-imagen">
            </button>
            
        </div>
        
    </div>
    </div>

    <div class="footer-contenedor"></div>
    
    <script src="../js/footer.js"></script>
    <script src="../js/header.js"></script>
</body>
</html>