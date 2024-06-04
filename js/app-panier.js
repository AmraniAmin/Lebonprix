let iconCart = document.querySelector(".cart-icon");
/*pour fermer le section panier */
let closePanier = document.querySelector(".close");
let body = document.querySelector("body");
/*tableau vide pour stock le list de produit */
let listProductHTML = document.querySelector(".listProduct");
let listCartHTML = document.querySelector(".listCart");
let iconCartSpan = document.querySelector(".cart-icon span");

let listProducts = [];
let carts = [];

/** methode ouvre panier */
iconCart.addEventListener("click", () => {
  body.classList.toggle("showCart");
});

/**methode ferme panier */
closePanier.addEventListener("click", () => {
  body.classList.toggle("showCart");
});

/** Methode addDataToHTML */
const addDataToHTML = () => {
  listProductHTML.innerHTML = "";
  if (listProducts.length > 0) {
    listProducts.forEach((product) => {
      let newProduct = document.createElement("div");
      newProduct.classList.add("item");
      newProduct.dataset.id = product.id;
      newProduct.innerHTML = `
                <img src="${product.image}" alt="">
                <h2>${product.name}</h2>
                <div class="price">€${product.price}</div>
                <button class="addCart">
                Ajouter Au Panier
                </button>
                `;
      listProductHTML.appendChild(newProduct);
    });
  }
};
/** methode pour ajoute les produit aux panier au click de l'utilisateur */
listProductHTML.addEventListener("click", (event) => {
  let positionClick = event.target;
  if (positionClick.classList.contains("addCart")) {
    let product_id = positionClick.parentElement.dataset.id;
    addToCart(product_id);
  }
});

/**function addToCart */
const addToCart = (product_id) => {
  let positionThisProductInCart = carts.findIndex(
    (value) => value.product_id == product_id
  );
  if (carts.length <= 0) {
    carts = [
      {
        product_id: product_id,
        quantity: 1,
      },
    ];
  } else if (positionThisProductInCart < 0) {
    carts.push({
      product_id: product_id,
      quantity: 1,
    });
  } else {
    carts[positionThisProductInCart].quantity =
      carts[positionThisProductInCart].quantity + 1;
  }
  addCartToHTML();
  addCartToMemory(); /* function pour enregistré le panier si le client navigue entre temps */
};

/**Fonction enrégistre les information de panier d'une session*/
const addCartToMemory = () => {
  localStorage.setItem("cart", JSON.stringify(carts));
};
/**function pour ajour les produits aux panier */
const addCartToHTML = () => {
  listCartHTML.innerHTML = "";
  let totalQuantity = 0; /* compte le nombre des articles ajouter au panier */
  if (carts.length > 0) {
    carts.forEach((cart) => {
      totalQuantity = totalQuantity + cart.quantity;
      let newCart = document.createElement("div");
      newCart.classList.add("item");
      newCart.dataset.id = cart.product_id;
      let positionProduct = listProducts.findIndex(
        (value) => value.id == cart.product_id
      );
      let info = listProducts[positionProduct];
      newCart.innerHTML = `
            <div class="image">
                <img src="${info.image}" alt="">
                </div>
                <div class="name">
                ${info.name}
                </div>
                <div class="totalPrice">
                    € ${info.price * cart.quantity}
                </div>
                <div class="quantity">
                    <span class="minus"><</span>
                    <span>${cart.quantity}</span>
                    <span class="plus">></span>
                </div>
            `;
      listCartHTML.appendChild(newCart);
    });
  }
  iconCartSpan.innerText = totalQuantity;
};

listCartHTML.addEventListener("click", (event) => {
  let positionClick = event.target;
  if (
    positionClick.classList.contains("minus") ||
    positionClick.classList.contains("plus")
  ) {
    let product_id = positionClick.parentElement.parentElement.dataset.id;
    let type = "minus";
    if (positionClick.classList.contains("plus")) {
      type = "plus";
    }
    changeQuantity(product_id, type);
  }
});

/**function pour changer la quantité de produit dans panir si on clique sur < ou > */

const changeQuantity = (product_id, type) => {
  let positionItemCart = carts.findIndex(
    (value) => value.product_id == product_id
  );
  if (positionItemCart >= 0) {
    switch (type) {
      case "plus":
        carts[positionItemCart].quantity = carts[positionItemCart].quantity + 1;
        break;

      default:
        let valueChange = carts[positionItemCart].quantity - 1;
        if (valueChange > 0) {
          carts[positionItemCart].quantity = valueChange;
        } else {
          carts.splice(positionItemCart, 1);
        }
        break;
    }
  }
  addCartToMemory();
  addCartToHTML();
};

/**methode pour recuperer liste de produit depuis un fichier JSON */
const initApp = () => {
  // get data from json
  fetch("products.json")
    .then((response) => response.json())
    .then((data) => {
      listProducts = data;
      /* appel mehode pour afficher les produits */
      addDataToHTML();
      // get cart from memory
      if (localStorage.getItem("cart")) {
        carts = JSON.parse(localStorage.getItem("cart"));
        addCartToHTML();
      }
    });
};
initApp();
