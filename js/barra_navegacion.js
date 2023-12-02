function obtenerValorParametro(nombreParametro) {
    var parametrosURL = new URLSearchParams(window.location.search);

    if (parametrosURL.has(nombreParametro)) {
        return parametrosURL.get(nombreParametro);
    } else {
        return null;
    }
}

document.addEventListener("DOMContentLoaded", function () {
    window.addEventListener("load", function () {
        const valorParamGenero = obtenerValorParametro("genero");
        const valorParamTypo = obtenerValorParametro("tipo");

        if (valorParamGenero !== null) {
            console.log("El valor del parámetro 'genero' es:", valorParamGenero);

            if(valorParamGenero == "Hombre"){
                idEnlace = "hombre_enlace";
                generoSeleccionadoURL = "Hombre"
            }else{
                idEnlace = "mujer_enlace";
                generoSeleccionadoURL = "Mujer"
            }

            // Función para comprobar la existencia del elemento con el ID específico
            function verificarExistencia() {
                let enlaceGenero = document.getElementById(idEnlace);

                if (enlaceGenero) {
                    console.log("Se encontró el elemento con el ID específico:", enlaceGenero);

                    enlaceGenero.classList.add("btn_genero_activo");
                    // Detén la comprobación después de encontrar el elemento
                    clearInterval(intervalID);
                } else {
                    console.log("No se encontró un elemento con el ID específico.");
                }

                let conjunto_link = document.getElementById("conjunto_link");
                conjunto_link.href = "../views/catalogo_general.php?genero="+generoSeleccionadoURL+"&tipo=Conjunto";
            
                let deportivo_link = document.getElementById("deportivo_link");
                deportivo_link.href = "../views/catalogo_general.php?genero="+generoSeleccionadoURL+"&tipo=Deportivo";
            
                let sudadera_link = document.getElementById("sudadera_link");
                sudadera_link.href = "../views/catalogo_general.php?genero="+generoSeleccionadoURL+"&tipo=Sudadera";
            
                let chaqueta_link = document.getElementById("chaqueta_link");
                chaqueta_link.href = "../views/catalogo_general.php?genero="+generoSeleccionadoURL+"&tipo=Chaqueta/Abrigo";
            
                let accesorio_link = document.getElementById("accesorio_link");
                accesorio_link.href = "../views/catalogo_general.php?genero="+generoSeleccionadoURL+"&tipo=Accesorio";
            
                let interior_link = document.getElementById("interior_link");
                interior_link.href = "../views/catalogo_general.php?genero="+generoSeleccionadoURL+"&tipo=Ropa interior";

                if(getIdCategoriaLink(valorParamTypo) != null){
                    let enlaceCategoria = document.getElementById(getIdCategoriaLink(valorParamTypo));
                    enlaceCategoria.classList.add("nav_principal_activo");
                    enlaceCategoria.style.color = "black"
                }
            }



            // Establece un intervalo para comprobar la existencia del elemento
            var intervalID = setInterval(verificarExistencia, 10); // Comprueba cada segundo
        } else {
            console.log("El parámetro 'genero' no está presente en la URL.");
        }
    });
});



function getIdCategoriaLink(valorParamTypo){
    switch(valorParamTypo){
        case "Conjunto": return "conjunto_link"; 
        case "Deportivo": return "deportivo_link"; 
        case "Sudadera": return "sudadera_link"; 
        case "Chaqueta/Abrigo": return "chaqueta_link"; 
        case "Accesorio": return "accesorio_link"; 
        case "Ropa interior": return "interior_link"; 
        default: return "noType";
    }
}
