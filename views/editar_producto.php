<?php
include_once("../funciones/mantener_sesion.php");
validarSesion();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Producto</title>

    <!--Estilos del header-->
    <link rel="stylesheet" href="../css/normalize.css">
    <link rel="stylesheet" href="../css/estilos_administrador.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">

    <!--Estilos de la vista editar producto-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" />
    <link rel="stylesheet" href="../css/editar_producto.css">
</head>
<body>
    <header class="header">
        <div class="header_nav">
            <div class="logo">
                <a href="">
                    <h1 id="logoNav" class="logo_texto">NIEHS</h1>
                </a>
            </div>
            <div class="contenedor_titulo">
                <ul class="nav_lista">
                    <h2>Administrador</h2>
                </ul>
            </div>
            <div class="contenedor_titulo">
                <ul class="nav_lista">
                    <h2 id="tipo_operacion"></h2>
                </ul>
            </div>
            <div class="contenedor_usuario">
                <div class="usuario_icono">
                    <a href="">
                        <span class="material-symbols-outlined">
                            person
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </header>  

    <main>
        <form class="main-frame" id="datosProducto" method="post" enctype="multipart/form-data">
            <div class="contenedor-atributo-imagen">
                <div class="contenedor-imagen" id="contenedor-imagen"></div>
                <div class="contenedor-boton-imagen">
                    <input type="file" class="file-input" name="imagen" id="imagen_producto" value="Elegir Imagen" accept="image/*">
                    <label for="imagen_producto" class="file-label">Seleccionar Imagen</label>
                </div>
            </div>
            <div class="contenedor-atributos">
                <div class="contenedor-superior">
                    <div class="contenedor-id">
                        <p>ID: </p><p id=id_label></p>
                    </div>
                    <div class="contenedor-boton-salir">
                        <a href="menu_administrador.php">
                            <span class="material-symbols-outlined">
                                Close
                            </span>
                        </a>
                    </div>
                </div>
                <div class="contenedor-atributo-tipo">
                    <div class="nombre-atributo"><p class="text-explanation">TIPO:</p></div>
                    <div class="contenido-atributo">
                        <select class="seleccion" id=tipo_producto>
                            <option value="NULL"></option>
                            <option value="Conjunto">Conjunto</option>
                            <option value="Ropa deportiva">Ropa deportiva</option>
                            <option value="Sudadera">Sudadera</option>
                            <option value="Chaqueta/abrigo">Chaqueta/abrigo</option>
                            <option value="Accesorio">Accesorio</option>
                            <option value="Ropa interior">Ropa interior</option>
                        </select>
                    </div>
                </div>
                <div class="contenedor-atributo-talla">
                    <div class="nombre-atributo"><p class="text-explanation">TALLA:</p></div>
                    <div class="contenido-atributo">
                        <select class="seleccion" id=talla_producto>
                            <option value="NULL"></option>
                            <option value="C">C</option>
                            <option value="M">M</option>
                            <option value="G">G</option>
                        </select>
                    </div>
                </div>
                <div class="contenedor-atributo-genero">
                    <div class="nombre-atributo"><p class="text-explanation">GÉNERO:</p></div>
                    <div class="contenido-atributo">
                        <select class="seleccion" id=genero_producto>
                            <option value="NULL"></option>
                            <option value="Mujer">Mujer</option>
                            <option value="Hombre">Hombre</option>
                        </select>
                    </div>
                </div>
                <div class="contenedor-atributo-descripcion">
                    <div class="nombre-atributo"><p class="text-explanation">DESCRIPCIÓN:</p></div>
                    <div class="contenido-atributo"><textarea class="seleccion" id="descripcion_producto" maxlength="110" placeholder="Escribe una descripción..."></textarea></div>
                </div>
                <div class="contenedor-atributo-color">
                    <div class="nombre-atributo"><p class="text-explanation">COLOR:</p></div>
                    <div class="contenido-atributo">
                        <input type="text" id="color_producto" class="seleccion" placeholder="Escribe un color...">
                    </div>
                </div>
                <div class="contenedor-atributo-precio">
                    <div class="nombre-atributo"><pre class="text-explanation"> PRECIO:             $</pre></div>
                    <div class="contenido-atributo">
                        <input type="number" min="0" step="0.01" id="precio_producto" class="seleccion" placeholder="Escribe un precio...">
                    </div>
                </div>
                <div class="contenedor-atributo-existencia">
                    <div class="nombre-atributo"><p class="text-explanation">EXISTENCIA:</p></div>
                    <div class="contenido-atributo">
                        <input type="number" min="0" id="existencia_producto" class="seleccion" placeholder="Escribe una cantidad...">
                    </div>
                </div>
                <div class="contenedor-boton-atributos">
                    <input type="submit" class="button-content" id="boton-form" value="Subir Datos">
                </div>  
            </div>
        </form>
    </main>
    <script src="../js/insertar_imagen.js"></script>
    <script src="../js/modo_administrar_producto.js"></script>
</body>
</html>