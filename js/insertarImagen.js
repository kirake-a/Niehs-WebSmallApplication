
const inputImagen = document.getElementById('imagen_producto');
const contenedorImagen = document.getElementById('contenedor-imagen');

inputImagen.addEventListener('change', function(event) {
   
    const archivo = event.target.files[0];
    const urlImagen = URL.createObjectURL(archivo);
    contenedorImagen.style.backgroundImage = `url(${urlImagen})`;
    
});
 
  
  
  
  
  
  
