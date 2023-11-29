<?php
include_once("../funciones/mantener_sesion.php");
validarSesion();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vista admin principal</title>

    <!--Estilos del header-->
    <link rel="stylesheet" href="../css/normalize.css">
    <link rel="stylesheet" href="../css/estilos_administrador.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">

    <!--Estilos del body-->
    <link rel="stylesheet" href="../css/menu_administrador.css" type="text/css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

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
                    <h2 id="tipo_operacion">Productos</h2>
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
        <div class="contenedor-principal">
            <div class="texto-principal titulo">Administrar lista de productos</div>
            <div class="rectangulo-principal">
                <div class="caja-ordenar texto-principal">
                    <div class="cuerpo">Ordenar por:</div>
                    <form action="">
                        <select name="" id="">
                            <option value="">ID</option>
                            <option value="">DESCRIPCION</option>
                            <option value="">COSTO</option>
                            <option value="">CANTIDAD</option>
                            <option value="">TIPO</option>
                            <option value="">TAMA&Ntilde;O</option>
                            <option value="">COLOR</option>
                        </select>
                    </form>
                </div>
                <table class="texto-principal tabla" id="tabla_admin">
                    <tr>
                        <th>ID</th>
                        <th>DESCRIPCI&Oacute;N</th>
                        <th>COSTO</th>
                        <th>CANTIDAD</th>
                        <th>TIPO</th>
                        <th>TAMA&Ntilde;O</th>
                        <th>COLOR</th>
                        <th>G&Eacute;NERO</th>
                        <th>ACCIONES</th>
                    </tr>

                    <tr>
                        <td id="id_producto">27</td>
                        <td class="celda-descripcion" id="description">HABIA UNA VEZ UN GATO GORDO PERO TAN GORDO</td>
                        <td id="cost">$5000</td>
                        <td id="amount">5</td>
                        <td id="type">Ropa interior</td>
                        <td id="size">Mediana</td>
                        <td id="color">Rosado</td>
                        <td id="gender">Masculino</td>
                        <td class="acciones">
                            <span class="material-symbols-outlined">
                                <a href="editar_producto.php?modo=editar&id=68">edit_square</a>                                
                            </span>
                            <span class="material-symbols-outlined">
                                <a href="">delete</a>
                            </span>
                        </td>
                    </tr>
                </table>
                <div class="boton-agregar-producto texto-principal"><a href="editar_producto.php?modo=agregar">Agregar producto</a></div>
            </div>
        </div>
    </main>
</body>
</html>