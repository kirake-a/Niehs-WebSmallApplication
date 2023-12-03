
document.querySelector(".boton-agregar").addEventListener("click", setCookie )

function setCookie(){
    let cValor = document.querySelector(".id-producto").textContent;
    let cNombre = "producto" + cValor;
    // Verificar si la cookie ya existe
    
    if (document.cookie.split(";").some((item) => item.trim().startsWith(cNombre+"="))) {
        alert("Producto ya en el carrito");
    }else{
        document.cookie = cNombre + "=" + cValor + ";path=/";
        alert("Agregado al carrito");
    }
    

    location.reload();
}

