document.addEventListener("DOMContentLoaded", function () {
  var titles = document.querySelectorAll(".toggle-title");

  titles.forEach(function (title) {
    title.addEventListener("click", function afficher() {
      var arrow = title.querySelector(".arrow");
      var productSection = title.closest(".product-section");
      var productList = productSection.querySelector(".container-produits");

      productSection.classList.toggle("closed");
      productList.classList.toggle("fermer");

      // Ajouter ou supprimer la classe rotate à chaque clic
      arrow.classList.toggle("rotate");
    });
  });
});

