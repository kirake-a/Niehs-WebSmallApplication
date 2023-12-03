
document.addEventListener("DOMContentLoaded", function() {
    fetch("../views/header.html")
      .then(response => response.text())
      .then(html => {
        document.querySelector(".header-contenedor").innerHTML = html;
        document.dispatchEvent(new Event("headerCargado"));
      });
      
  });
  
  