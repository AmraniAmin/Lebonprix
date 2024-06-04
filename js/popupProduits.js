let previewContainer = document.querySelector(".produits-preview");
let previewBox = previewContainer.querySelectorAll(".preview");

document.querySelectorAll(" .produit").forEach((produit) => {
  produit.onclick = () => {
    previewContainer.style.display = "flex";
    let name = produit.getAttribute("data-name");
    previewBox.forEach((preview) => {
      let target = preview.getAttribute("data-target");
      if (name == target) {
        preview.classList.add("active");
      }
    });
  };
});

//pour fermer le popup
previewBox.forEach((close) => {
  close.querySelector(".fa-times").onclick = () => {
    close.classList.remove("active");
    previewContainer.style.display = "none";
  };
});
