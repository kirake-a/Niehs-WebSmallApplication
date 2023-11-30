
function obtenerParametroUrl(nombre) {
    const urlParams = new URLSearchParams(window.location.search);
    return urlParams.get(nombre);
}

const modo = document.getElementById('tipo_operacion');
const id_label = document.getElementById('id_label');

const accion = obtenerParametroUrl('modo');
const id_producto = obtenerParametroUrl('id');

const formulario = document.getElementById('datosProducto');

const imagenProducto = document.getElementById('imagen_producto');
const tipoProducto = document.getElementById('tipo_producto');
const tallaProducto = document.getElementById('talla_producto');
const generoProducto = document.getElementById('genero_producto');
const descripcionProducto = document.getElementById('descripcion_producto');
const colorProducto = document.getElementById('color_producto');
const precioProducto = document.getElementById('precio_producto');
const existenciaProducto = document.getElementById('existencia_producto');



if (accion === 'agregar') {
    modo.textContent = 'Añadir producto';

} else if (accion === 'editar') {
    document.getElementById('genero_producto').disabled = true;
    document.getElementById('tipo_producto').disabled = true;

    modo.textContent = 'Editar producto';
    id_label.textContent = id_producto;

    let producto = {
        id: id_producto
    }

    obtenerProducto(producto);
}

formulario.addEventListener('submit', function(event) {
    event.preventDefault(); // Evitar el envío del formulario por defecto
    
    if (accion === 'agregar'){
        let producto = {
            imagen: imagenProducto.value,
            tipo: tipoProducto.value,
            talla: tallaProducto.value,
            genero: generoProducto.value,
            descripcion: descripcionProducto.value,
            color: colorProducto.value,
            precio: precioProducto.value,
            existencia: existenciaProducto.value
        };

        registrar(producto);
        
    } 
    if (accion === 'editar') {
        let producto = {
            id: id_producto,
            tipo: tipoProducto.value,
            talla: tallaProducto.value,
            genero: generoProducto.value,
            descripcion: descripcionProducto.value,
            color: colorProducto.value,
            precio: precioProducto.value,
            existencia: existenciaProducto.value
        };
       
        editar(producto);
    }
    
});

function registrar(producto){

    if(tieneDatosCompletos(producto)){
        if(window.confirm("Confirma el añadir el producto")){
            let imagenSeleccionada = imagenProducto.files[0];

            let formData = new FormData();
            formData.append('imagen', imagenSeleccionada);
            formData.append('tipo', tipoProducto.value);
            formData.append('talla', tallaProducto.value);
            formData.append('genero', generoProducto.value);
            formData.append('descripcion', descripcionProducto.value);
            formData.append('color', colorProducto.value);
            formData.append('precio', precioProducto.value);
            formData.append('existencia', existenciaProducto.value);
            
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                if (this.readyState === 4 && this.status === 200) {
                    var respuesta = JSON.parse(this.responseText);
                    console.log(respuesta.mensaje);
                }
            };
            xhttp.open("POST", "../funciones/registrar_producto.php", true);
            xhttp.send(formData); 

            window.location.href = "../views/menu_administrador.php";
        }
    }else{
        alert("Por favor llena todos los campos");
    }
}

function editar(producto){
    if(tieneDatosCompletos(producto)){
        if(window.confirm("Confirma el modificar el producto")){
            let imagenSeleccionada = imagenProducto.files[0];

            let formData = new FormData();
        
            formData.append('id', id_producto);
            formData.append('imagen', imagenSeleccionada);
            formData.append('tipo', tipoProducto.value);
            formData.append('talla', tallaProducto.value);
            formData.append('genero', generoProducto.value);
            formData.append('descripcion', descripcionProducto.value);
            formData.append('color', colorProducto.value);
            formData.append('precio', precioProducto.value);
            formData.append('existencia', existenciaProducto.value);
            
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                if (this.readyState === 4 && this.status === 200) {
                    var respuesta = JSON.parse(this.responseText);
                    console.log(respuesta.mensaje);
                }
            };
            xhttp.open("POST", "../funciones/modificar_producto.php", true);
            xhttp.send(formData); 

            window.location.href = "../views/menu_administrador.php";
        }
    }else{
        alert("Por favor llena todos los campos");
    }
}

function obtenerProducto(producto){
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
    if (this.readyState === 4 && this.status === 200) {
        var producto = JSON.parse(this.responseText);
        llenarInputs(producto);
    }
    };
    xhttp.open("POST", "../funciones/obtener_producto.php", true); 
    xhttp.setRequestHeader("Content-Type", "application/json");
    xhttp.send(JSON.stringify(producto));

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

function llenarInputs(producto){
    tipoProducto.value = producto.tipo;
    tallaProducto.value = producto.talla;
    generoProducto.value = producto.genero;
    descripcionProducto.value = producto.descripcion;
    colorProducto.value = producto.color;
    precioProducto.value = producto.precio;
    existenciaProducto.value = producto.existencia;
    contenedorImagen.style.backgroundImage = `url(${buscarImagen(producto)})`;
}

function buscarImagen(producto){
    tipo = producto.tipo.toLowerCase();
    if(producto.tipo.includes('/') || producto.tipo.includes(' ')){
        tipo = tipo.replace('/','-');
        tipo = tipo.replace(' ', '-');
    }

    imagen = "../imagenes/" + "productos/" + producto.genero.toLowerCase() + "/" + tipo + "/" + producto.imagen;
    return imagen;
}