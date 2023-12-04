function validarFormulario() {
  let email = document.getElementById("emailUser").value;
  let password = document.getElementById("passwordUser").value;
  let errorMessage = document.getElementById("errorSpan");

  // Validar que ambos campos no estén vacíos
  if (email.trim() === "" || password.trim() === "") {
    const spanError = document.getElementById("spanError");
    if(spanError){
      spanError.style.display = "none";
      
    }
    errorMessage.textContent = "* Todos los campos son obligatorios";
    return false;
  }


  // Validar el formato del correo electrónico usando una expresión regular
  let correoValido = /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email);
  if (!correoValido) {
    errorMessage.textContent = "Ingresa un correo electrónico válido.";

    return false;
  }

  // Limpiar el mensaje de error si los campos tienen datos y el correo es válido
  errorMessage.textContent = "";

  // Si ambos campos tienen datos y el correo es válido, el formulario se enviará
  return true;
}


function elementoErrorDinamico(idElemento, callback) {
  let elemento = document.getElementById(idElemento);

  if (elemento) {
      // Verificar si el elemento ya está completamente cargado
      if (elemento.complete) {
        console.log("cargado");
      } else {
          // Esperar al evento load para asegurarse de que el elemento se haya cargado completamente
          elemento.addEventListener('load', callback);
      }
  } else {
      console.error("El elemento con el ID '" + idElemento + "' no fue encontrado.");
  }
}


