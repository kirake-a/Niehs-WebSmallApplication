function mostrarBotonCerrarSesion(event) {
    event.preventDefault();
    
    let botonCierre = document.getElementById('usuario_icono').querySelectorAll('#botonCerrarSesion');
    if (botonCierre.length > 0) {
        botonCierre.forEach(function(boton) {
            boton.remove();
        });
        console.log('Ejecutando ocultar boton');
        return;
    }

    let botonCerrarSesion = document.createElement("button");
    botonCerrarSesion.id = 'botonCerrarSesion';
    botonCerrarSesion.textContent = 'Cerrar Sesión';
    botonCerrarSesion.style.position = 'absolute';
    botonCerrarSesion.style.top = '10';
    botonCerrarSesion.style.right = '0';
    botonCerrarSesion.onclick = cerrarSesion;

    document.getElementById('usuario_icono').appendChild(botonCerrarSesion);
    
    console.log('Ejecutando mostrar boton');
}

function cerrarSesion() {
    window.location.href = '../funciones/cerrar_sesion.php'
    console.log("Se ha enviado a cerrar sesion");
}