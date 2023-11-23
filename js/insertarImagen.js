
const inputImagen = document.getElementById('imagen_producto');
const contenedorImagen = document.getElementById('contenedor-imagen');

inputImagen.addEventListener('change', function(event) {
    // Obtiene el archivo seleccionado
    const archivo = event.target.files[0];
    
    // Crea un objeto URL para la imagen seleccionada
    const urlImagen = URL.createObjectURL(archivo);
      
    // Muestra la imagen dentro del contenedor
    contenedorImagen.style.backgroundImage = `url(${urlImagen})`;
    
});
 
  
  
  
  
  
  
