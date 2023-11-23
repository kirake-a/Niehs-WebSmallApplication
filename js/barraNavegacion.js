const botones = document.getElementsByName("btn_nav");
const sidebar = document.getElementById('sidebar');

let btn_active_hombre = false;
let btn_active_mujer = false;

botones[0].addEventListener("click", function(){
    sidebar.classList.toggle("active");
    botones[0].classList.toggle("colorBtn-click");
    btn_active_hombre = !btn_active_hombre;
    if(btn_active_mujer){
        sidebar.classList.toggle("active");
        botones[1].classList.toggle("colorBtn-click");
        btn_active_mujer = !btn_active_mujer;
    }
});

botones[1].addEventListener("click", function(){
    sidebar.classList.toggle("active");
    botones[1].classList.toggle("colorBtn-click");
    btn_active_mujer = !btn_active_mujer;
    if(btn_active_hombre){
        sidebar.classList.toggle("active");
        botones[0].classList.toggle("colorBtn-click");
        btn_active_hombre = !btn_active_hombre;
    }
});

function cambiarContenidoH1Logo() {
    var h1 = document.getElementById("logoNav");
    var anchoPantalla = window.innerWidth;
  
    if (anchoPantalla >= 1024 && anchoPantalla <=1280) {
      h1.textContent = "N";
    }else{
        h1.textContent = "NIEHS"
    }
}
  
  // Llama a la función para cambiar el contenido al cargar la página
  cambiarContenidoH1Logo();
  
  // Escucha cambios en el tamaño de la ventana y actualiza el contenido cuando cambie
  window.addEventListener("resize", cambiarContenidoH1Logo);
