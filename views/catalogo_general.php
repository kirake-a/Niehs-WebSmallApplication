<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catalogo general</title>


    <!--Estilos del carrito vacio-->
    <link rel="stylesheet" href="../css/catalogo_general.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" />
</head>
<body>

    <div class="header-contenedor"></div>
    
    <main>
        <div class="contenedor">
            <div class="rectangulo-contenedor">
                <a href="#">
                  <div class="rectangulo" id="imagenProducto1">
                    <div class="rectangulo-azul">
                      <div class="precio" id="precioProducto1">$750</div>
                    </div>
                  </div>
                </a>
                <a href="#">
                  <div class="descripcion-contenedor" id="descripcionProducto1">DESCRIPCION DEL PRODUCTO</div>
                </a>
            </div>
            
            <div class="rectangulo-contenedor">
                <a href="#">
                  <div class="rectangulo" id="imagenProducto2">
                    <div class="rectangulo-azul">
                      <div class="precio" id="precioProducto2">$750</div>
                    </div>
                  </div>
                </a>
                <a href="#">
                  <div class="descripcion-contenedor" id="descripcionProducto2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris nisl lorem, gravida a auctor non.</div>
                </a>
            </div>
            
            <div class="rectangulo-contenedor">
                <a href="#">
                  <div class="rectangulo" id="imagenProducto3">
                    <div class="rectangulo-azul">
                      <div class="precio" id="precioProducto3">$750</div>
                    </div>
                  </div>
                </a>
                <a href="">
                  <div class="descripcion-contenedor" id="descripcionProducto3">DESCRIPCION MUY LARGA DEL PRODUCTO QUE PODRIA ARRUINAR LA ALINEACION</div>
                </a>
            </div>
        </div>
    </main>

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
                    <img src="../imagenes/footer/ImagenAmericanExpress.png" alt="American Express">
                    <img src="../imagenes/footer/ImagenPayPal.png" alt="PayPal">
                    <img src="../imagenes/footer/ImagenVisa.png" alt="Visa">
                    <img src="../imagenes/footer/ImagenMasterCard.png" alt="Master Card">
                </div>
            </div>
        </footer>
    </div>
    <script src="../js/header.js"></script>
</body>
</html>