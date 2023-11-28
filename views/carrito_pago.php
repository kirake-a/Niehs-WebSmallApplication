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
                <img src="/imagenes/productos/hombre/accesorios/accesorioHombre1.jpg" class="imagen-producto">
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
                <img src="/imagenes/footer/ImagenTarjetaCredito.png" class="pago-tarjeta-imagen">
            </button>
        </div>
        <div class="pago-paypal">
            <button class="pago-paypal-boton">
                <img src="/imagenes/footer/ImagenSimboloPaypal.png" class="pago-paypal-imagen">
            </button>
            
        </div>
        
    </div>
    </div>

    <div class="grid">
        <footer class="footer">
            <div class="footer_micuenta_nav">
                <div class="mi_cuenta_contenedor">
                    <h2 class="nav_mi_cuenta">Mi Cuenta</h2>
                    <ul class="nav_lista_mi_cuenta">
                        <li class="nav_lista_mi_cuenta_elemento">
                            <a href="#" class="">
                                <p class="lista_elemento">Cerrar sesión</p>
                            </a>
                        </li>
                        <li class="nav_lista_mi_cuenta_elemento"> 
                            <a href="#" class="">
                                <p class="lista_elemento">Mi carrito</p>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="footer_nav">
                    <div class="footer_titulo_nav">
                        <h2 class="titulo_nav">Navegación</h2>
                    </div>
                    <ul class="nav_lista_navegacion">
                        <li class="">
                            <a href="#" class="">
                                <p class="lista_elemento">Conjuntos</p>
                            </a>
                        </li>
                        <li class="">
                            <a href="#" class="">
                                <p class="lista_elemento">Ropa Deportiva</p>
                            </a>
                        </li>
                        <li class="">
                            <a href="#" class="">
                                <p class="lista_elemento">Sudaderas</p>
                            </a>
                        </li>
                    </ul>
                    <ul class="nav_lista_navegacion">
                        <li class="">
                            <a href="#" class="">
                                <p class="lista_elemento">Chaquetas y Abrigos</p>
                            </a>
                        </li>
                        <li class="">
                            <a href="#" class="">
                                <p class="lista_elemento">Accesorios</p>
                            </a>
                        </li>
                        <li class="">
                            <a href="#" class="">
                                <p class="lista_elemento">Ropa interior</p>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="footer_Nies_Img">
                <div class="footer_niehs">
                    <h1 class="niehs">Niehs</h1>
                </div>
                <div class="footer_tarjetas">
                    <img src="/imagenes/footer/ImagenAmericanExpress.png" alt="American Express">
                    <img src="/imagenes/footer/ImagenPayPal.png" alt="PayPal">
                    <img src="/imagenes/footer/ImagenVisa.png" alt="Visa">
                    <img src="/imagenes/footer/ImagenMasterCard.png" alt="Master Card">
                </div>
            </div>
        </footer>
    </div>
    <script src="../js/header.js"></script>
</body>
</html>