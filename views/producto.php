<?php
include_once("../config.inc.php"); 
include_once("../funciones/acceder_base_datos.php");
include_once("../funciones/mantener_sesion.php");
include_once("../funciones/catalogo_productos.php");
$user_key = 0;
validarSesion($user_key);

$bdConexion = abrirConexion();
seleccionarBaseDatos($bdConexion);

$id = isset($_GET["id_producto"]) ? $_GET["id_producto"] : "";
$token = isset($_GET["token"]) ? $_GET["token"] : "";

$pageNotFound404 = '<span style="font-size: 20px; font-weight: bold; font-family: sans-serif;">
¡Discúlpanos, nos topamos con un error al procesar tu solicitud!</span></br>';
$pageNotFound404 .= '</br><img src="../imagenes/error.jpg" style="text-align: center;"></br></br>';
$pageNotFound404 .= '<span style="font-weight: BOLD; font-family: sans-serif;">ERROR: 404</span>';

if ($id == '' || $token == '') {
    echo $pageNotFound404;
    exit;
} else {
    $token_tmp = hash_hmac('sha1', $id, KEY_TOKEN);

    if ($token == $token_tmp) {
        $query = 'SELECT * FROM product WHERE id_producto='.$id;
        $datos = extraerRegistro($bdConexion, $query);

        if (!empty($datos)) {
            $descripcion = $datos['description'];
            $precio = $datos['cost'];
            $color = $datos['color'];
            $talla = $datos['size'];
            $valueTalla = definirTalla($datos['size']);
            $gender = strtolower($datos['gender']);
            $type = encontrarCarpetaTipo($datos['type']);
            $imagen = $datos['image_name'];

            $dir_images = '../imagenes/productos/';

            if ($gender == 'hombre') {
                $dir_images .= 'hombre/'.$type.'/'.$imagen;
            } else {
                $dir_images .= 'mujer/'.$type.'/'.$imagen;
            }

            if (!file_exists($dir_images)) {
                $dir_images = '../imagenes/error.jpg';
            }

        }
 
    } else {
        echo $pageNotFound404;
        exit;
    }
}

function definirTalla($tipo) {
    switch($tipo){
        case "C": return "CHICA";
        case "M": return "MEDIANA";
        case "G": return "GRANDE";
    }
}

cerrarConexion($bdConexion);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Producto</title>
    <link rel="stylesheet" href="../css/producto.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
</head>
<body>
   <div class="header-contenedor"></div>
   
   <div class="main-frame">
        <div class="imagen">
        <img src="<?php echo $dir_images?>" class="imagen-producto">
        </div>
        <div class="detalles">
            <p class="id-producto"><?php echo $id?></p>
            <p class="descripcion-producto"><?php echo $descripcion; ?></p>
            <p class="precio-producto"><?php echo MONEDA.' '.number_format($precio, 2, '.', ','); ?></p>
            <div class="color">
                <p class="color-texto">Color: </p>
                <p class="color-producto"><?php echo $color; ?></p>
            </div>
            <div class="talla">
                <p class="talla-producto">Talla:</p>
                <select class="select-talla">
                    <option value="NULL"></option>
                    <option value="<?php echo $valueTalla; ?>"><?php echo $talla; ?></option>
                </select>
            </div>
            <div class="boton">
                <button type="button" class="boton-agregar">Añadir a mi carrito</button>
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
    <script src="../js/barra_navegacion.js"></script>
    <script src="../js/manejador_logout.js"></script>
    <script src="../js/agregar_al_carrito.js"></script>
    <script src="../js/ir_al_carrito.js"></script>

    
</body>
</html>