function actualizarVista() {

    // Obtener el valor seleccionado del elemento select
    var tipoSeleccionado = document.getElementById("ordenar").value;

    document.addEventListener("DOMContentLoaded", function() {
        // Llamada a la función al cargar la página
        actualizarVista();
    });

    // Realizar cambios en el contenido según el tipo seleccionado
    var informacionDiv = document.getElementById("tabla_admin");

    // Realizar una solicitud AJAX a listar.php
    var xhr = new XMLHttpRequest();

    xhr.onreadystatechange = function () {
        if (xhr.readyState == 4 && xhr.status == 200) {
            // Actualizar el contenido con la respuesta del servidor
            informacionDiv.innerHTML = xhr.responseText;
        }
    };

    // Configurar la solicitud AJAX con el método GET y el parámetro 'type'
    xhr.open("GET", "../funciones/listar.php?type=" + encodeURIComponent(tipoSeleccionado), true);

    // Enviar la solicitud
    xhr.send();
}
