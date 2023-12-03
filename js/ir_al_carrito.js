



document.addEventListener("headerCargado", function() {
    console.log("prueba");
    let cookies = document.cookie.split(";");

    //Se checa que sea mayor a 1 porque la cookie 0 es la sesion
    if (cookies.length > 1) {
        document.getElementById("carrito").href = "../views/carrito_articulos.php";
    } else {
        console.log(cookies[1]);
        document.getElementById("carrito").href = "../views/carrito_vacio.php";
    }
});

