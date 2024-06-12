<?php
require_once 'BD/config.php';

if ($con) {

  //promotions
  $sql1 = ("SELECT * FROM promotion AS n LEFT JOIN produit AS p ON n.id_produit = p.id LIMIT 3;");
  $results1 = $con->query($sql1);
  $promotions1 = $results1->fetchAll(PDO::FETCH_OBJ);
  //promotions2
  $sql2 = ("SELECT * FROM promotion AS n LEFT JOIN produit AS p ON n.id_produit = p.id LIMIT 6 OFFSET 3;");
  $results2 = $con->query($sql2);
  $promotions2 = $results2->fetchAll(PDO::FETCH_OBJ);

  //nouveaute
  $sql = ("SELECT * FROM nouveaute as n left JOIN produit as p on n.id_produit = p.id");
  $results = $con->query($sql);
  $nouveaute = $results->fetchAll(PDO::FETCH_OBJ);
} else {
  // Handle connection error if necessary
  echo "Connection to the database failed.";
}
?>

<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>lebonprix.fr</title>

  <!-- lien bootstrap 5.0.2 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <!-- lien icon awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- lien bootstrap 4.7 -->
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <!-- lien vers styles css -->
  <link rel="stylesheet" href="./styles/style.css">
</head>

<body class="">
  <div class="container">
    <!-- entete de la page -->
    <header>

      <!-- menu de navigation logo & Compte utilisateur et panier à droite -->
      <nav>
        <div class="logo">
          <img class="logolebonprix" src="./images/logolebonprix.jpg" alt="">
        </div>
        <div class="lebonprix">
          <h3>Lebonprix drive : en cours</h2>
            <p>epicerie fine de qualité</p>
        </div>

        <ul class="menu-user">
          <li class="menu-user-item">
            <div class="user-icon">
              <a href="connexion/connexion.php">
                <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                  <path d="M10 0a10 10 0 1 0 10 10A10.011 10.011 0 0 0 10 0Zm0 5a3 3 0 1 1 0 6 3 3 0 0 1 0-6Zm0 13a8.949 8.949 0 0 1-4.951-1.488A3.987 3.987 0 0 1 9 13h2a3.987 3.987 0 0 1 3.951 3.512A8.949 8.949 0 0 1 10 18Z" />
                </svg>
              </a>
            </div>
          </li>
          <li class="menu-user-item">
            <div class="cart-icon">
              <a>
                <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 20">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 15a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm0 0h8m-8 0-1-4m9 4a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm-9-4h10l2-7H3m2 7L3 4m0 0-.792-3H1" />
                </svg>
              </a>
              <span>0</span>
            </div>
          </li>
        </ul>
      </nav>

      <!-- menu de navigation Barre de recherche au milieu -->
      <nav class="navbar navbar-expand-lg navbar-light d-flex flex-column  align-items-center" style="background: #ececeb">
        <div class="container  col-md-4 navbar-expand-lg">
          <form class="navbar-brand mx-auto">
            <div class="input-group search-bar ">
              <button class="icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                  <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                </svg>
              </button>
              <input type="text" class="search-bar form-control" placeholder="Recherche" aria-label="Recherche">
            </div>
          </form>
        </div>
      </nav>

      <!-- menu de navigation Menu item Accueil, Epicerie Fine ... -->
      <nav class="navbar-third">
    <div class="container-menu">
        <input type="checkbox" id="check">
        
        <div class="nav-btn">
            <div class="nav-links">
                <ul>
                    <li class="nav-link" style="--i: 1.1s">
                        <a href="../index.php">Accueil</a>
                    </li>
                    
                    <li class="nav-link" style="--i: 1.1s">
                        <a href="#">Épicerie Fine</a>
                        <div class="dropdown">
                            <ul>
                                <li class="dropdown-link">
                                    <a href="#">Salé</a>
                                    <div class="dropdown second">
                                        <ul>
                                            <li class="dropdown-link">
                                                <a href="./lien/epiceriesalee.php">Fruits Secs et Apéritifs</a>
                                            </li>
                                            <li class="dropdown-link">
                                                <a href="./lien/epiceriesalee.php">Pâtes, riz, graines et céréales</a>
                                            </li>
                                            <li class="dropdown-link">
                                                <a href="./lien/epiceriesalee.php">Plats cuisinés et soupes</a>
                                            </li>
                                            <li class="dropdown-link">
                                                <a href="./lien/epiceriesalee.php">Huiles et vinaigres</a>
                                            </li>
                                            <li class="dropdown-link">
                                                <a href="./lien/epiceriesalee.php">Sauces et Condiments</a>
                                            </li>
                                            <div class="arrow"></div>
                                        </ul>
                                    </div>
                                </li>
                                <li class="dropdown-link">
                                    <a href="#">Sucré</a>
                                    <div class="dropdown second">
                                        <ul>
                                            <li class="dropdown-link">
                                                <a href="./lien/epiceriesucre.php">Pâtes à tartiner, confitures et miels</a>
                                            </li>
                                            <li class="dropdown-link">
                                                <a href="./lien/epiceriesucre.php">Biscuits et gâteaux</a>
                                            </li>
                                            <li class="dropdown-link">
                                                <a href="./lien/epiceriesucre.php">Desserts</a>
                                            </li>
                                            <li class="dropdown-link">
                                                <a href="./lien/epiceriesucre.php">Sucres et farines</a>
                                            </li>
                                            <li class="dropdown-link">
                                                <a href="./lien/epiceriesucre.php">Chocolats et confiserie</a>
                                            </li>
                                            <li class="dropdown-link">
                                                <a href="./lien/epiceriesucre.php">Fruits secs et fruits séchés</a>
                                            </li>
                                            <li class="dropdown-link">
                                                <a href="./lien/epiceriesucre.php">Café, thé et boissons chaudes</a>
                                            </li>
                                            <li class="dropdown-link">
                                                <a href="./lien/epiceriesucre.php">Céréales petit-déjeuner</a>
                                            </li>
                                            <div class="arrow"></div>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        
                    </li>
                
                    
                    <li class="nav-link" style="--i: 1.1s">
                        <a href="cave.php">Cave</a>
                        <div class="dropdown">
                            <ul>
                                <li class="dropdown-link">
                                    <a href="./lien/cavechampagnes.php">Champagnes</a>
                                </li>
                                <li class="dropdown-link">
                                    <a href="./lien/cavevins.php">Vins</a>
                                </li>
                                <li class="dropdown-link">
                                    <a href="./lien/cavebieres.php">Bières</a>
                                </li>
                                <li class="dropdown-link">
                                    <a href="./lien/caveCidres.php">Cidres et poirés</a>
                                </li>
                                <li class="dropdown-link">
                                    <a href="./lien/caveJusSirops.php">Jus et sirops</a>
                                </li>
                                <li class="dropdown-link">
                                    <a href="./lien/caveLimonades.php">Eaux et Limonades</a>
                                </li>
                                <li class="dropdown-link">
                                    <a href="./lien/caveSansAlcool.php">Sans alcool</a>
                                </li>
                                <li class="dropdown-link">
                                    <a href="./lien/Bio.php">Bio</a>
                                </li>
                                <li class="dropdown-link">
                                    <a href="./lien/caveAutres.php">Autres</a>
                                </li>
                                <div class="arrow"></div>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-link" style="--i: 1.1s">
                        <a href="./lien/viandeTerres.php">Viandes terre et mer</a>
                        <div class="dropdown">
                            <ul>
                                
                                <li class="dropdown-link">
                                    <a href="./lien/viandeBoxAngneux.php">Agneau</a>
                                </li>
                                <li class="dropdown-link">
                                    <a href="./lien/viandePoulets.php">Poulet et dinde</a>
                                </li>
                                <li class="dropdown-link">
                                    <a href="./lien/viandeMer.php">Fruits de Mer, Huîtres et Crustacés</a>
                                </li>
                                <li class="dropdown-link">
                                    <a href="./lien/viandeMer.php">Saumon fumé</a>
                                </li>
                                <li class="dropdown-link">
                                    <a href="./lien/viandeMer.php">Poisson fumé</a>
                                </li>
                                
                                <div class="arrow"></div>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-link" style="--i: 1.1s">
                        <a href="./lien/coffret.php">Coffrets & Cadeaux</a>
                        <div class="dropdown">
                            <ul>
                                <li class="dropdown-link">
                                    <a href="./lien/coffret.php">Coffret Les Gourmandises N°1</a>
                                </li>
                                <li class="dropdown-link">
                                    <a href="./lien/coffret.php">Coffret boîte carton</a>
                                </li>
                                <li class="dropdown-link">
                                    <a href="./lien/coffret.php">Éditions limitées de Noël</a>
                                </li>
                                <div class="arrow"></div>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-link" style="--i: 1.35s">
                        <a href="./lien/merveilleMonde.php">Merveille du monde</a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="hamburger-menu-container">
            <div class="hamburger-menu">
                <div></div>
            </div>
        </div>
    </div>
</nav>

    </header>

    <!-- Corps de la page -->
    <main>
      <h1> Nos promotions </h1>
      <div class="section-divider"></div>
      <!-- section main, nos promotions -->
      <section class="container-slider">
        <div class="slider-wrapper">
          <div class="slider">
            <div class="slider-1" id="slider-1">
              <?php
              foreach ($promotions1 as $n) {
                echo '
                        <div class="produit" >
                          <img src="/BackOffice/' . $n->image . '" alt="logo-images" class="product-img">
                          <h3 class="product-title">' . $n->nom_produit . '</h3>
                          <div class="price">€ ' . $n->prix . '</div>
                          <div class="buttons">
                          <a class="buy">Commander</a>
                          </div>
                          <p class="description" style="display: none">' . ' Description : ' . $n->description . '</p>
                          <p class="ingredient" style="display: none">' . ' Ingredient : ' . $n->ingredients . '</p>
                        </div>
                        
                    ';
              }
              ?>
            </div>
            <div class="slider-2" id="slider-2">

              <?php
              foreach ($promotions2 as $n) {
                echo '
                        <div class="produit" >
                          <img src="/BackOffice/' . $n->image . '" alt="logo-images" class="product-img">
                          <h3 class="product-title">' . $n->nom_produit . '</h3>
                          <div class="price">€ ' . $n->prix . '</div>
                          <div class="buttons">
                          <a class="buy">Commander</a>
                          </div>
                          <p class="description" style="display: none">' . ' Description : ' . $n->description . '</p>
                          <p class="ingredient" style="display: none">' . ' Ingredient : ' . $n->ingredients . '</p>
                        </div>
                        
                    ';
              }
              ?>

            </div>
          </div>

        </div>
      </section>
      <!-- section main, nouveaute -->


    </main>
    <main class="main-produits">

      <h1 class="titre-fanchise"> Nouveauté</h1>
      <div class="section-divider"></div>
      <!-- Pâtes à tartiner, confitures et miels -->

      <!-- nouveauté -->
      <div id="nouveaute" class="container">
        <div class="product-section">
          <div class="container-produits fermer">

            <?php
            foreach ($nouveaute as $n) {
              echo '
                        <div class="produit" >
                          <h3 class="product-title">' . $n->nom_produit . '</h3>
                          <img src="/BackOffice/' . $n->image . '" alt="logo-images" class="product-img">
                          
                          <div class="price">€ ' . $n->prix . '</div>
                          <i class="bx bx-shopping-bag add-cart"></i>
                          <p class="description" style="display: none">' . ' Description : ' . $n->description . '</p>
                          <p class="ingredient" style="display: none">' . ' Ingredient : ' . $n->ingredients . '</p>
                        </div>
                        
                    ';
            }
            ?>

          </div>
        </div>
      </div>

      <!-- affichage avec zoom sur un produit au clique -->
      <!-- pupop produit au click -->
      <div class="product-click" style="display: none;">
        <div class="modal-content">
          <!-- Contenu du produit -->
          <span id="close-product" class="close1">&times;</span>


          <img id="product-image" src="" alt="Product Image" class="modal-image">
          <h2 id="product-name"></h2>
          <p id="product-price"></p>
          <p id="product-description" class="modal-description"></p>
          <p id="product-ingredient" class="modal-ingredient"></p>

          <div class="buttons">
            <a class="buy">Site drive bientot disponible pour vos commandes en lignes !!</a>
            <a href="./lien/contact.php" class="cart">Venez découvrir notre épicérie à Sonzay !</a>
          </div>
        </div>
      </div>


      <h1 class="titre-fanchise">Notre franchise </h1>
      <div class="section-divider"></div>
      <a href="lien/franchise.php" class="btn btn-success p-3 m-2 .fs-b fw-bold">Rejoindre notre franchise</a>
      <!-- section main, nos publicité -->


      <!-- nouveauté -->

    </main>

    <!-- pied du page  -->
    <footer>
      <div class="row">
        <div class="col">
          <img class="logo" src="./images/logolebonprix.jpg">
          <a href="./lien/lebonprix.php">
            <h4>Qui sommes-nous ?</h4>
          </a>
          <p>Lebonprix déniche dans chaque région en France et dans
            le monde les meilleurs produits à déguster et à boire,
            sélectionnés auprès des producteurs les plus reconnus dans
            leur profession</p>
          <p><b>L'abus d'alcool est dangereux pour la santé, à consommer avec modération !</b></p>
        </div>
        <div class="col">
          <h4>INFORMATIONS<div class="underline"><span></span></div>
          </h4>
          <ul>
            <li> <a href="./lien/contact.php">Contact</a></li>
            <li> <a href="./lien/conditionVente.php">Conditions Générales de ventes</a></li>
          </ul>
        </div>
        <div class="col">
          <h4>Retrouver Nous <div class="underline"><span></span></h4>
          <div class="social-icons">
            <i class="fab fa-facebook" href="https://www.facebook.com/p/Lebonprix-Sonzay-100044300394311/"></i>
            <i class="fab fa-twitter" href="https://www.facebook.com/p/Lebonprix-Sonzay-100044300394311/"></i>
            <i class="fab fa-tiktok" href="https://www.facebook.com/p/Lebonprix-Sonzay-100044300394311/"></i>
            <a href="https://www.facebook.com/p/Lebonprix-Sonzay-100044300394311/" target="_blank"><i class="fab fa-instagram"></i></a>
          </div>
        </div>

      </div>
      <hr>
      <p class="copyright"> Lebonprix @2024- All Rights Reserved</p>
    </footer>
  </div>

  <!-- section panier lateral droite -->
  <div class="cartTab">
    <h1>Votre Panier</h1>
    <div class="listCart">
    </div>
    <div class="btn">
      <button class="close">FERMER</button>
      <button class="checkOut">PAYER</button>
    </div>
  </div>

  <script src="js/app-panier.js"></script>
  <script src="js/app-slider.js"></script>
  <script src="js/popupProduits1.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
  <script>
    $(document).ready(function() {
      $('#slider-container').slick({
        slidesToShow: 2,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 1000,
        responsive: [{
            breakpoint: 768,
            settings: {
              slidesToShow: 1
            }
          }
          // Ajoutez d'autres points de rupture si nécessaire
        ]
      });
    });

    
  </script>

</body>

</html>