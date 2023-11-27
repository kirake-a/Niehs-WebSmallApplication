
function obtenerParametroUrl(nombre) {
    const urlParams = new URLSearchParams(window.location.search);
    return urlParams.get(nombre);
}

const modo = document.getElementById('tipo_operacion');
const id = document.getElementById('id_producto');

const accion = obtenerParametroUrl('modo');

if (accion === 'agregar') {
    modo.textContent = 'Añadir producto';

} else if (accion === 'editar') {
    modo.textContent = 'Editar producto';
}

const formulario = document.getElementById('datosProducto');

formulario.addEventListener('submit', function(event) {
    event.preventDefault(); // Evitar el envío del formulario por defecto
    
    if (accion === 'agregar') {
        const imagenProducto = document.getElementById('imagen_producto').value;
        const tipoProducto = document.getElementById('tipo_producto').value;
        const tallaProducto = document.getElementById('talla_producto').value;
        const generoProducto = document.getElementById('genero_producto').value;
        const descripcionProducto = document.getElementById('descripcion_producto').value;
        const colorProducto = document.getElementById('color_producto').value;
        const precioProducto = document.getElementById('precio_producto').value;
        const existenciaProducto = document.getElementById('existencia_producto').value;
        
        let producto = {
            imagen: imagenProducto,
            tipo: tipoProducto,
            talla: tallaProducto,
            genero: generoProducto,
            descripcion: descripcionProducto,
            color: colorProducto,
            precio: precioProducto,
            existencia: existenciaProducto
        };
    
        registrar(producto);
        
    
    } else if (accion === 'editar') {
        console.log('Editar');
    }
    
});

function registrar(producto){

    if(tieneDatosCompletos(producto)){
        if(window.confirm("Confirma el añadir el producto")){
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
            if (this.readyState === 4 && this.status === 200) {
                var respuesta = JSON.parse(this.responseText);
                console.log(respuesta.mensaje);
            }
            };
            xhttp.open("POST", "../funciones/registrar_producto.php", true); 
            xhttp.setRequestHeader("Content-Type", "application/json");
            xhttp.send(JSON.stringify(producto));

            window.location.href = "../views/menu_administrador.php";
        }
    }else{
        alert("Por favor llena todos los campos");
    }
    
}

function tieneDatosCompletos(producto){
    for (let atributo in producto) {
        if (producto.hasOwnProperty(atributo)) {
            if(producto[atributo] === '' || producto[atributo] === 'NULL'){
                return false;
            }
        }
    }

    return true;
}