
document.addEventListener("DOMContentLoaded", function() {
    fetch("/views/menu.html")
      .then(response => response.text())
      .then(html => {
        document.querySelector(".header-contenedor").innerHTML = html;
      });
  });
  