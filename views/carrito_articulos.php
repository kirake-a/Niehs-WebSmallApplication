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
    <header class="header">
        <div class="header_nav">
            <div class="logo">
                <a href="">
                    <h1 id="logoNav" class="logo_texto h-1">NIEHS</h1>
                </a>
            </div>
            <div class="buscador">
                <form class="buscador_contenedor">
                    <div class="">
                        <input type="search" id="default-search" class="buscador_input" placeholder="Buscar artículos" required>
                        <button type="submit" class="buscador_btn">Buscar</button>
                        <span class="material-symbols-outlined">
                            search
                        </span>
                    </div>
                </form>
            </div>
            <div class="contenedor_genero">
                <ul class="nav_lista">
                    <li class="nav_lista_elemento">
                        <a name="btn_nav" class="btn_nav">
                            Hombre
                        </a>
                    </li>
                    <li class="nav_lista_elemento">
                        <a name="btn_nav" class="btn_nav">
                            Mujer   
                        </a>
                    </li>
                </ul>
            </div>
            <div class="contenedor_carrito_usuario">
                <div class="carrito">
                    <a href="">
                        <span class="material-symbols-outlined">
                            shopping_cart
                        </span>
                    </a>
                </div>
                <div class="usuario_icono">
                    <a href="">
                        <span class="material-symbols-outlined">
                            person
                        </span>
                    </a>
                </div>
            </div>
        </div>

        <nav id="sidebar" class="nav_principal">
            <ul class="nav_principal_lista">
                <li class="nav_principal_elemento">
                    <a href="#" class="">
                        <span>Conjuntos</span>
                    </a>
                </li>
                <li class="nav_principal_elemento">
                    <a href="#" class=" ">
                        <span>Ropa deportiva</span>
                    </a>
                </li>
                <li class="nav_principal_elemento">
                    <a href="#" class=" ">
                        <span >Sudadera</span>
                    </a>
                </li>
                <li class="nav_principal_elemento">
                    <a href="#" class=" ">
                        <span>Chaquetas y abrigos</span>
                    </a>
                </li>
                <li class="nav_principal_elemento">
                    <a href="#" class=" ">
                        <span>Accesorios</span>
                    </a>
                </li>
                <li class="nav_principal_elemento">
                    <a href="#" class=" ">
                        <span>Ropa interior</span>
                    </a>
                </li>
            </ul>

        </nav>
        
    </header>

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

    <div class="grid">
        <footer class="footer">
            <div class="footer_nav">
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
                <h2 class="nav_navegacion">Navegación</h2>
                <ul class="nav_lista1_navegacion">
                    <li class="nav_lista1_navegacion_elemento">
                        <a href="#" class="">
                            <p class="lista_elemento">Conjuntos</p>
                        </a>
                    </li>
                    <li class="nav_lista1_navegacion_elemento">
                        <a href="#" class="">
                            <p class="lista_elemento">Ropa Deportiva</p>
                        </a>
                    </li>
                    <li class="nav_lista1_navegacion_elemento">
                        <a href="#" class="">
                            <p class="lista_elemento">Sudaderas</p>
                        </a>
                    </li>
                </ul>
                <ul class="nav_lista2_navegacion">
                    <li class="nav_lista1_navegacion_elemento">
                        <a href="#" class="">
                            <p class="lista_elemento">Chaquetas y Abrigos</p>
                        </a>
                    </li>
                    <li class="nav_lista2_navegacion_elemento">
                        <a href="#" class="">
                            <p class="lista_elemento">Accesorios</p>
                        </a>
                    </li>
                    <li class="nav_lista2_navegacion_elemento">
                        <a href="#" class="">
                            <p class="lista_elemento">Ropa interior</p>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="footer_copyright">
                <p class="copyright">&copy; 2023</p>
            </div>
            <div class="footer_niehs">
                <h1 class="niehs">Niehs</h1>
            </div>
            <div class="footer_tarjetas">
                <img src="/imagenes/ImagenAmericanExpress.png" alt="American Express">
                <img src="/imagenes/ImagenPayPal.png" alt="PayPal">
                <img src="/imagenes/ImagenVisa.png" alt="Visa">
                <img src="/imagenes/ImagenMasterCard.png" alt="Master Card">
            </div>
        </footer>
    </div>

    <script src="/js/barra_navegacion.js"></script>
    
</body>
</html>