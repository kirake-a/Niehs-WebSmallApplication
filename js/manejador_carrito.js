


function eliminarSimboloPeso(){
    let costos = document.getElementsByClassName("producto-costo");
    let costosMonetarios = new Array();
    for (let i = 0; i < costos.length; i++) {
        let contenidoActual = costos[i].textContent;
        costosMonetarios[i] = contenidoActual.substring(1); 
    }
    return costosMonetarios;
}


function calcularSubtotal(){
    let subtotal = 0;
    
    let costos = eliminarSimboloPeso();
    let cantidades = document.getElementsByName("cantidad");
    
    for(let i = 0; i < costos.length; i++){
        subtotal += parseFloat(costos[i]) * parseFloat(cantidades[i].value);
     }
     return subtotal;
}

function calcularIVA(){
    let iva = 0.16;
    return iva * calcularSubtotal();
}


document.addEventListener("DOMContentLoaded", imprimirSubtotal);
document.addEventListener("DOMContentLoaded", imprimirIVA);
document.addEventListener("DOMContentLoaded", imprimirTotal);
document.addEventListener("input", imprimirSubtotal);
document.addEventListener("input", imprimirIVA);
document.addEventListener("input", imprimirTotal);

function imprimirSubtotal(){
    let labelSubtotal = document.getElementById("subtotal-valor");
    labelSubtotal.textContent = calcularSubtotal();
}


function imprimirIVA(){
    let iva = calcularIVA();
    let labelIva = document.getElementById("iva-valor");
    labelIva.textContent = iva;
}

function imprimirTotal(){
    let labelTotal = document.getElementById("total-valor");
    labelTotal.textContent = calcularSubtotal() + calcularIVA();
}





document.querySelector(".pay").addEventListener("click", function(event) {
    event.preventDefault();  

    realizarPago();  
});



function realizarPago(){

    let productosVendidos = new Array();
    let cantidades = document.getElementsByName("cantidad");
    //Checa que las cantidades tengan valores válidos
    for (let i = 0; i < cantidades.length; i++) {
        if(parseInt(cantidades[i].value) > parseInt(cantidades[i].max)){
            alert("Ingrese cantidades validas");
            return;
        }
    }
    for(let i = 0; i<ids.length; i++){
        productosVendidos.push([ids[i].textContent, cantidades[i].value]);
        console.log(productosVendidos[i]);
    }

    if(productosVendidos.length > 0){
        let opcion = confirmarPago();
        //Se checa si se confirma el pago
        if(opcion){
        
        //Se destruyen las cookies tras confirmar el pago

        let cookies = document.cookie.split(";");

        for (let i = 1; i < cookies.length; i++) {
        let cookie = cookies[i];
        let igualIndex = cookie.indexOf("=");
        let nombre = igualIndex > -1 ? cookie.substr(0, igualIndex) : cookie;
        document.cookie = nombre + "=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;";
        }   


          // Crear una instancia de XMLHttpRequest
        let xhttp = new XMLHttpRequest();

        // Definir la función de devolución de llamada (callback) cuando la solicitud se complete
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                // Manejar la respuesta del servidor (si es necesario)
                console.log(this.responseText);
            } 
        };

        // Convertir la matriz a JSON y enviarla al servidor
        xhttp.open("POST", "../funciones/realizar_pago.php", true);
        xhttp.setRequestHeader("Content-type", "application/json");
        xhttp.send(JSON.stringify({ productosVendidos: productosVendidos }));
        
        

        window.location.href = "../views/carrito_vacio.php";
        }
        
    }
   
}

let ids = document.getElementsByClassName("producto-id");

let botones = document.querySelectorAll(".producto-boton-eliminar");





for (let i = 0; i < botones.length; i++) {
    console.log(i);
    botones[i].addEventListener("click", function() {
        let idAsociado = ids[i];
        eliminarCookiePorValor(idAsociado.textContent);
        if(botones.length = 0){
            window.href = "../views/carrito_vacio.php";
        }
        location.reload();
    });
}

function eliminarCookiePorValor(valor) {
    let cookies = document.cookie.split(";");

    for (let i = 0; i < cookies.length; i++) {
        let cookie = cookies[i];
        while (cookie.charAt(0) === " ") {
            cookie = cookie.substring(1);
        }
        let cookieParts = cookie.split("=");
        let nombre = cookieParts[0];
        let cookieValor = cookieParts[1];

        // Si el valor de la cookie coincide con el valor que deseas eliminar
        if (cookieValor === valor) {
            // Caduca la cookie eliminándola y estableciendo una fecha de expiración en el pasado
            document.cookie = nombre + "=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;";
        }
    }
}

function confirmarPago()
    {
    let mensaje;
    let opcion = confirm("Confirme para finalizar su pago");
    if (opcion == true) {
        mensaje = "Pago realizado";
	} else {
	    mensaje = "Pago cancelado";
	}
	alert(mensaje);
    return opcion;
}

