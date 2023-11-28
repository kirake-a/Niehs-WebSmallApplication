<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrito vacío</title>

    <link rel="stylesheet" href="/css/normalize.css">
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">

    <!--Estilos del carrito vacio-->
    <link rel="stylesheet" href="../css/carrito_vacio.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" />
    
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
                <a href="#">Descubrir productos</a>
            </div>
        </section>
        
    </main>

    <div class="footer-contenedor"></div>

    <script src="../js/footer.js"></script>
    <script src="../js/header.js"></script>
    
</body>
</html>