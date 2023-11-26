<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Producto</title>
    <link rel="stylesheet" href="../css/producto.css">

    
</head>
<body>
   <div class="header-contenedor"></div>
   
   <div class="main-frame">
    <div class="imagen">
        <img src="../imagenes/productos/hombre/accesorios/accesorioHombre1.jpg" class="imagen-producto">
    </div>
    <div class="detalles">
        <p class="descripcion-producto">Descripcion</p>
        <p class="precio-producto">$ 0</p>
        <div class="color">
            <p class="color-texto">Color: </p>
            <p class="color-producto">Azul</p>
        </div>
        <div class="talla">
            <p class="talla-producto">Talla:</p>
            <select class="select-talla">
                <option value="NULL"></option>
                <option value="SMALL">S</option>
                <option value="MEDIA">M</option>
                <option value="LARGE">L</option>
                <option value="EXTRA LARGE">XL</option>
            </select>
        </div>
        <div class="boton">
            <button class="boton-agregar">AÑADIR A MI CARRITO</button>
        </div>
        <div class="servicios">
            <div class="detalles-envio">
                <img src="../imagenes/tabler_truck-delivery.jpg" class="imagen-envio">
                <p class="envio">Envío gratis</p>
            </div>
            <div class="detalles-devoluciones">
                <img src="../imagenes/carbon_delivery-parcel.jpg" class="imagen-devoluciones">
                <p class="devoluciones">Devoluciones gratis</p>
            </div>
            <p class="politicas">Consulte la política de envíos y devoluciones</p>
        </div>
    </div>
    </div>

    <div class="footer-contenedor"></div>

    <script src="../js/footer.js"></script>
    <script src="../js/header.js"></script>
    
</body>