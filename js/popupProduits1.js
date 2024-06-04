document.addEventListener("DOMContentLoaded", function () {
  var productBoxes = document.querySelectorAll(".produit");

  productBoxes.forEach(function (box) {
    box.addEventListener("click", function (event) {
      var productName = box.querySelector(".product-title").textContent;
      var productImage = box.querySelector(".product-img").src;
      var productPrice = box.querySelector(".price").textContent;
      var productdescription = box.querySelector(".description").textContent;
      var productingredient = box.querySelector(".ingredient").textContent;

      var modalProductName = document.getElementById("product-name");
      var modalProductImage = document.getElementById("product-image");
      var modalProductPrice = document.getElementById("product-price");
      var modalProductdescription = document.getElementById(
        "product-description"
      );
      var modalProductingredient =
        document.getElementById("product-ingredient");

      modalProductName.textContent = productName;
      modalProductImage.src = productImage;
      modalProductPrice.textContent = productPrice;
      modalProductdescription.textContent = productdescription;
      modalProductingredient.textContent = productingredient;

      document.querySelector(".product-click").style.display = "block";
    });
  });

  // Fermez la fenêtre modale en cliquant sur le bouton de fermeture
  document
    .getElementById("close-product")
    .addEventListener("click", function () {
      document.querySelector(".product-click").style.display = "none";
    });
});
