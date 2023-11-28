document.addEventListener("DOMContentLoaded", function() {
    fetch("../views/footer.html")
      .then(response => response.text())
      .then(html => {
        document.querySelector(".footer-contenedor").innerHTML = html;
      });
  });
  