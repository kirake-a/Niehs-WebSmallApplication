function confirmarEliminacion(id_product) {
    let confirmacion = confirm("¿Estás seguro de que deseas eliminar este producto?");

    if (confirmacion) {
        window.location.href = '../funciones/borrar.php?cid_producto=' + id_product;
    }
}

document.querySelectorAll(".material-symbols-outlined #delete").forEach(function(element) {
    element.addEventListener("click", function(event) {
        event.preventDefault();

        let key = this.getAttribute("data-id");

        confirmarEliminacion(key);
    });
});