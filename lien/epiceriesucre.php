<?php
require_once '../BD/config.php';

if ($con) {

  //requete epicerie fine / patesPates à tartiner, confitures et miels
  $sql = ("SELECT * FROM produit where categorie_id =38");
  $results = $con->query($sql);
  $pate = $results->fetchAll(PDO::FETCH_OBJ);

  //requete epicerie fine Biscuits et gateaux
  $sql1 = ("SELECT * FROM produit where categorie_id =39");
  $results1 = $con->query($sql1);
  $biscuit = $results1->fetchAll(PDO::FETCH_OBJ);

  //requete epicerie fine Desserts
  $sql2 = ("SELECT * FROM produit where categorie_id =40");
  $results2 = $con->query($sql2);
  $dessert = $results2->fetchAll(PDO::FETCH_OBJ);

  //requete epicerie fine Sucres et farines
  $sql3 = ("SELECT * FROM produit where categorie_id =41");
  $results3 = $con->query($sql3);
  $sucre = $results3->fetchAll(PDO::FETCH_OBJ);

  //requete epicerie fine chocolat
  $sql4 = ("SELECT * FROM produit where categorie_id =42");
  $results4 = $con->query($sql4);
  $chocolat = $results4->fetchAll(PDO::FETCH_OBJ);

  //requete epicerie fine Fruits secs et fruits séchés
  $sql5 = ("SELECT * FROM produit where categorie_id =43");
  $results5 = $con->query($sql5);
  $fruit = $results5->fetchAll(PDO::FETCH_OBJ);

  //requete epicerie fine Café, thé et boissons chaudes
  $sql5 = ("SELECT * FROM produit where categorie_id =44");
  $results5 = $con->query($sql5);
  $cafe = $results5->fetchAll(PDO::FETCH_OBJ);

  //requete epicerie fine Café, thé et boissons chaudes
  $sql5 = ("SELECT * FROM produit where categorie_id =45");
  $results5 = $con->query($sql5);
  $cereale = $results5->fetchAll(PDO::FETCH_OBJ);
} else {
  // Handle connection error if necessary
  echo "Connection to the database failed.";
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>lebonprix.fr</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
  <link rel="stylesheet" href="../styles/style.css">
  <link rel="stylesheet" href="../styles/lien.css">
</head>

<body class="">
  <div class="container">
    <header>

      <!-- menu de navigation logo & Compte utilisateur et panier à droite -->
      <nav>
        <div class="logo">
          <img class="logolebonprix" src="../images/logolebonprix.jpg" alt="">
        </div>
        <div class="lebonprix">
          <h3>lebonprix drive : en cours</h2>
            <p>epicerie fine de qualité</p>
        </div>

        <ul class="menu-user">
          <li class="menu-user-item">
            <div class="user-icon">
              <a href="../connexion/connexion.php">
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
      <nav class="nav-menu deuxieme">
        <div class="menu">
          <a href="#" id="hamburger-icon" class="mobile-toggler"><i class="fas fa-bars"></i></a>
          <ul class="main-menu">
            <li class="menu-item"><a href="../index.php" class="active">Accueil</a></li>

            <!-- menu epicerie  -->
            <li class="menu-item mega-menu-cave">
              <a href="epiceriesucre.php">Epicerie Fine</a>
              <div class="mega-menu-wrapper slideInUp">
                <div class="mega-menu-col">
                  <a href="epiceriesucre.php">
                    <h5> Epicerie sucrée</h5>
                  </a>
                  <ul class="mega-sub-menu">
                    <li><a href="epiceriesucre.php">Pâtes à tartiner, confitures et miels</a></li>
                    <li><a href="epiceriesucre.php">Biscuits et gâteaux </a></li>
                    <li><a href="epiceriesucre.php">Desserts </a></li>
                    <li><a href="epiceriesucre.php">Sucres et farines</a></li>
                    <li><a href="epiceriesucre.php">Chocolats et confiserie</a></li>
                    <li><a href="epiceriesucre.php">Fruits secs et fruits séchés</a></li>
                    <li><a href="epiceriesucre.php#cafethe">Café, thé et boissons chaudes</a></li>
                    <li><a href="epiceriesucre.php">Céréales petit-déjeuner</a></li>
                  </ul>
                </div>
                <div class="mega-menu-col">

                  <a href="../lien/Epiceriesalee.php">
                    <h5> Epicerie salée</h5>
                  </a>
                  <ul class="mega-sub-menu">
                    <li><a href="../lien/Epiceriesalee.php#fruitsSecs">Fruits Secs et Apéritifs</a></li>
                    <li><a href="../lien/Epiceriesalee.php#">Pâtes, riz, graines et céréales </a></li>
                    <li><a href="../lien/Epiceriesalee.php#">Conserves et bocaux</a></li>
                    <li><a href="../lien/Epiceriesalee.php#">Plats cuisinés et soupes : </a></li>
                    <li><a href="../lien/Epiceriesalee.php#">Huiles et vinaigres </a></li>
                    <li><a href="../lien/Epiceriesalee.php#">Sauces et Condiments </a></li>
                  </ul>
                </div>

              </div>
            </li>

            <!-- menu  cave -->
            <li class="menu-item mega-menu-cave ">
              <a href="#">Cave</a>
              <div class="mega-menu-wrapper slideInUp">
                <div class="mega-menu-col">
                  <a href="../lien/caveChampagnes.php">
                    <h5> Champagnes</h5>
                  </a>
                  <ul class="mega-sub-menu">
                    <li><a href="../lien/caveChampagnes.php#">Bruts</a></li>
                    <li><a href="../lien/caveChampagnes.php#"> Rosés</a></li>
                    <li><a href="../lien/caveChampagnes.php#">Blanc de Blancs</a></li>
                    <li><a href="../lien/caveChampagnes.php#">Millésimés</a></li>
                    <li><a href="../lien/caveChampagnes.php#">Grandes cuvées de Vignerons</a></li>
                  </ul>
                </div>
                <div class="mega-menu-col">
                  <a href="../lien/caveVins.php">
                    <h5> Vins</h5>
                  </a>
                  <ul class="mega-sub-menu">
                    <li><a href="../lien/caveVins.php#">Nos coups de cœur 1ere grand cru</a></li>
                    <li><a href="../lien/caveVins.php#">Touraine</a></li>
                    <li><a href="../lien/caveVins.php#">Bordeaux</a></li>
                    <li><a href="../lien/caveVins.php#">Bourgogne</a></li>
                    <li><a href="../lien/caveVins.php#">Vallée du Rhone</a></li>
                    <li><a href="../lien/caveVins.php#">Vallée de la Loire</a></li>
                    <li><a href="../lien/caveVins.php#">Provence</a></li>
                  </ul>
                </div>
                <div class="mega-menu-col">
                  <a href="../lien/caveBieres.php">
                    <h5> Bières</h5>
                  </a>
                  <ul class="mega-sub-menu">
                    <li><a href="../lien/caveBieres.php#">Bières IPA</a></li>
                    <li><a href="../lien/caveBieres.php#">Blondes</a></li>
                    <li><a href="../lien/caveBieres.php#">Blanches</a></li>
                    <li><a href="../lien/caveBieres.php#">Brunes</a></li>
                    <li><a href="../lien/caveBieres.php#">AmbréesRousses</a></li>
                    <li><a href="../lien/caveBieres.php#">Ambrées</a></li>
                  </ul>
                </div>
                <div class="mega-menu-col">
                  <a href="../lien/caveCidres.php">
                    <h5> Cidres et poirés</h5>
                  </a>
                  <ul class="mega-sub-menu">
                    <li><a href="../lien/caveCidres.php#">Cidre rosé</a></li>
                    <li><a href="../lien/caveCidres.php#">Bio</a></li>
                    <li><a href="../lien/caveCidres.php#">Brut </a></li>
                    <li><a href="../lien/caveCidres.php#">Artisanal</a></li>
                  </ul>
                </div>
                <div class="mega-menu-col">
                  <a href="../lien/caveLimonades.php">
                    <h5> Eaux et Limonades</h5>
                  </a>
                  <ul class="mega-sub-menu">
                    <li><a href="../lien/caveLimonades.php#">Artisanale </a></li>
                    <li><a href="../lien/caveLimonades.php#">French Tonic Boisson au CBD </a></li>
                    <li><a href="../lien/caveLimonades.php#">Boisson au CBD </a></li>
                    <li><a href="../lien/caveLimonades.php#">Autres</a></li>
                  </ul>
                </div>
                <div class="mega-menu-col">
                  <a href="../lien/caveSansAlcool.php">
                    <h5> Sans alcool</h5>
                  </a>
                  <ul class="mega-sub-menu">
                    <li><a href="../lien/caveSansAlcool.php#">Vin Blanc </a></li>
                    <li><a href="../lien/caveSansAlcool.php#">Rosé </a></li>
                    <li><a href="../lien/caveSansAlcool.php#">Bulles de Luxe </a></li>
                    <li><a href="../lien/caveSansAlcool.php#">Spiritueux </a></li>
                    <li><a href="../lien/caveSansAlcool.php#">Autres</a></li>
                  </ul>
                </div>
                <div class="mega-menu-col">
                  <a href="../lien/caveJusSirops.php">
                    <h5> Jus et sirops</h5>
                  </a>
                  <ul class="mega-sub-menu">
                    <li><a href="../lien/caveJusSirops.php#">Artisanal Jus d'abricot </a></li>
                    <li><a href="../lien/caveJusSirops.php#">Raisin </a></li>
                    <li><a href="../lien/caveJusSirops.php#">Betterave </a></li>
                    <li><a href="../lien/caveJusSirops.php#">Yuzu </a></li>
                    <li><a href="../lien/caveJusSirops.php#">Mandarine</a></li>
                    <li><a href="../lien/caveJusSirops.php#">Nectars de Poire</a></li>
                    <li><a href="../lien/caveJusSirops.php#">Banane </a></li>
                    <li><a href="../lien/caveJusSirops.php#">Autres</a></li>
                  </ul>
                </div>
                <div class="mega-menu-col">
                  <a href="../lien/caveAutres.php">
                    <h5>Autres</h5>
                  </a>
                  <ul class="mega-sub-menu">
                    <li><a href="../lien/caveAutres.php#">Découvrir ICI </a></li>
                  </ul>
                </div>
              </div>
            </li>

            <!-- menu Bio -->
            <li class="menu-item dropdown">
              <a href="../lien/Bio.php#">Bio</a>
              <div class="sub-menu-wrapper slideInUp">
                <ul class="sub-menu">
                  <li class="menu-item"><a href="../lien/Bio.php#">Bio 1</a></li>
                  <li class="menu-item"><a href="../lien/Bio.php#">Bio 1</a></li>
                  <li class="menu-item"><a href="../lien/Bio.php#">Bio 1</a></li>
                </ul>
              </div>
            </li>

            <!-- menu Coffret -->
            <li class="menu-item dropdown">
              <a href="../lien/Coffret.php#">Coffret</a>
              <div class="sub-menu-wrapper slideInUp">
                <ul class="sub-menu">
                  <li class="menu-item"><a href="#">Les Gourmandises</a></li>
                  <li class="menu-item"><a href="#">Boite carton</a></li>
                  <li class="menu-item"><a href="#">Editions limitées de Noël</a></li>
                </ul>
              </div>
            </li>

            <!-- menu Merveille du Monde -->
            <li class="menu-item dropdown">
              <a href="../lien/merveilleMonde.php">Merveille du Monde</a>
              <div class="sub-menu-wrapper slideInUp">
                <ul class="sub-menu">
                  <li class="menu-item"><a href="../lien/merveilleMonde.php#">Merveille 1</a></li>
                  <li class="menu-item"><a href="../lien/merveilleMonde.php#">Merveille 2</a></li>
                  <li class="menu-item"><a href="../lien/merveilleMonde.php#">Merveille 2</a></li>
                  <li class="menu-item"><a href="../lien/merveilleMonde.php#">Merveille 3</a></li>
                  <li class="menu-item"><a href="../lien/merveilleMonde.php#">Merveille 4</a></li>
                  <li class="menu-item"><a href="../lien/merveilleMonde.php#">Merveille 5</a></li>
                  <li class="menu-item"><a href="../lien/merveilleMonde.php#">Merveille 6</a></li>
                  <li class="menu-item"><a href="../lien/merveilleMonde.php#">Merveille 7</a></li>
                  <li class="menu-item"><a href="../lien/merveilleMonde.php#">Merveille 8</a></li>
                  <li class="menu-item"><a href="../lien/merveilleMonde.php#">Merveille 9</a></li>
                </ul>
              </div>
            </li>

            <!-- menu Viande -->
            <li class="menu-item mega-menu-cave ">
              <a href="#">Viande</a>
              <div class="mega-menu-wrapper slideInUp">
                <div class="mega-menu-col">
                  <a href="../lien/viandeTerres.php">
                    <h5> Viandes terre</h5>
                  </a>
                  <ul class="mega-sub-menu">
                    <li><a href="../lien/viandeTerres.php#">Bœuf </a></li>
                    <li><a href="../lien/viandeTerres.php#"> Agneau </a></li>
                    <li><a href="../lien/viandeTerres.php#">Autres</a></li>
                    <li><a href="../lien/viandeTerres.php#">...</a></li>
                  </ul>
                </div>
                <div class="mega-menu-col">
                  <a href="../lien/viandeBoxAngneux.php">
                    <h5> Box Agneau Touraine</h5>
                  </a>
                  <ul class="mega-sub-menu">
                    <li><a href="../lien/viandeBoxAngneux.php#"> Agneau </a></li>
                    <li><a href="../lien/viandeBoxAngneux.php#">Traçabilité De la ferme à l'assiette </a></li>
                  </ul>
                </div>
                <div class="mega-menu-col">
                  <a href="../lien/viandeMer.php">
                    <h5> Viande Mer</h5>
                  </a>
                  <ul class="mega-sub-menu">
                    <li><a href="../lien/viandeMer.php#">Fruits de Mer, Huîtres et Crustacés </a></li>
                    <li><a href="../lien/viandeMer.php#">Saumon fumé </a></li>
                    <li><a href="../lien/viandeMer.php#">Truite fumée</a></li>
                  </ul>
                </div>
                <div class="mega-menu-col">
                  <a href="../lien/viandePoulets.php">
                    <h5> Poulet et dinde</h5>
                  </a>
                  <ul class="mega-sub-menu">
                    <li><a href="../lien/viandePoulets.php#">Box Poulet du Sud-Ouest </a></li>
                    <li><a href="../lien/viandePoulets.php#">Cuisses de poulet 5kg </a></li>
                    <li><a href="../lien/viandePoulets.php#">Filet de Poulet 5kg </a></li>
                    <li><a href="../lien/viandePoulets.php#">Pinot de poulet 5kg</a></li>
                    <li><a href="../lien/viandePoulets.php#">Cuisse de dinde </a></li>
                    <li><a href="../lien/viandePoulets.php#">Autres </a></li>
                  </ul>
                </div>
              </div>
            </li>
          </ul>

        </div>

      </nav>
    </header>

    <main class="main-produits">

      <h1> Epicerie succré</h1>
      <div class="section-divider"></div>
      <!-- Pâtes à tartiner, confitures et miels -->
      <div id="pateATartiner" class="container">
        <div class="product-section">
          <h3 class="title toggle-title">Pâtes à tartiner, confitures et miels <i class="fa-solid fa-caret-right arrow"></i></h3>
          <div class="container-produits fermer">
            <?php
            foreach ($pate as $p) {
              echo '
                        <div class="produit" >
                          <img src="/BackOffice/' . $p->image . '" alt="logo-images" class="product-img">
                          <h3 class="product-title">' . $p->nom_produit . '</h3>
                          <div class="price">€ ' . $p->prix . '</div>
                          <i class="bx bx-shopping-bag add-cart"></i>
                          <p class="description" style="display: none">' . ' Description : ' . $p->description . '</p>
                          <p class="ingredient" style="display: none">' . ' Ingredient : ' . $p->ingredients . '</p>
                        </div>
                        
                    ';
            }
            ?>
          </div>
        </div>
      </div>
      <!-- Biscuits et gâteaux -->
      <div id="biscuits" class="container">
        <div class="product-section">
          <h3 class="title toggle-title">Biscuits et gâteaux <i class="fa-solid fa-caret-right arrow"></i></h3>
          <div class="container-produits fermer">
            <?php
            foreach ($biscuit as $b) {
              echo '
                        <div class="produit" >
                          <img src="/BackOffice/' . $b->image . '" alt="logo-images" class="product-img">
                          <h3 class="product-title">' . $b->nom_produit . '</h3>
                          <div class="price">€ ' . $b->prix . '</div>
                          <i class="bx bx-shopping-bag add-cart"></i>
                          <p class="description" style="display: none">' . ' Description : ' . $b->description . '</p>
                          <p class="ingredient" style="display: none">' . ' Ingredient : ' . $b->ingredients . '</p>
                        </div>
                        
                    ';
            }
            ?>
          </div>
        </div>
      </div>
      <!-- Desserts -->
      <div id="desserts" class="container">
        <div class="product-section">
          <h3 class="title toggle-title">Desserts <i class="fa-solid fa-caret-right arrow"></i></h3>
          <div class="container-produits fermer">

            <?php
            foreach ($dessert as $d) {
              echo '
                        <div class="produit" >
                          <img src="/BackOffice/' . $d->image . '" alt="logo-images" class="product-img">
                          <h3 class="product-title">' . $d->nom_produit . '</h3>
                          <div class="price">€ ' . $d->prix . '</div>
                          <i class="bx bx-shopping-bag add-cart"></i>
                          <p class="description" style="display: none">' . ' Description : ' . $d->description . '</p>
                          <p class="ingredient" style="display: none">' . ' Ingredient : ' . $d->ingredients . '</p>
                        </div>
                        
                    ';
            }
            ?>
          </div>
        </div>
      </div>
      <!-- Sucres et farines  -->
      <div id="sucres" class="container">
        <div class="product-section">
          <h3 class="title toggle-title">Sucres et farines <i class="fa-solid fa-caret-right arrow"></i></h3>
          <div class="container-produits fermer">
            <?php
            foreach ($sucre as $s) {
              echo '
                        <div class="produit" >
                          <img src="/BackOffice/' . $s->image . '" alt="logo-images" class="product-img">
                          <h3 class="product-title">' . $s->nom_produit . '</h3>
                          <div class="price">€ ' . $s->prix . '</div>
                          <i class="bx bx-shopping-bag add-cart"></i>
                          <p class="description" style="display: none">' . ' Description : ' . $s->description . '</p>
                          <p class="ingredient" style="display: none">' . ' Ingredient : ' . $s->ingredients . '</p>
                        </div>
                        
                    ';
            }
            ?>
          </div>
        </div>
      </div>
      <!-- Chocolats et confiserie -->
      <div class="container">
        <div class="product-section">
          <h3 class="title toggle-title">Chocolats et confiserie <i class="fa-solid fa-caret-right arrow"></i></h3>
          <div class="container-produits fermer">

            <?php
            foreach ($chocolat as $c) {
              echo '
                        <div class="produit" data-name="' . $c->id . '">
                          <img src="/BackOffice/' . $c->image . '" alt="logo-images" class="product-img">
                          <h3 class="product-title">' . $c->nom_produit . '</h3>
                          <div class="price">€ ' . $c->prix . '</div>
                          <i class="bx bx-shopping-bag add-cart"></i>
                          
                          <p class="description" style="display: none">' . ' Description : ' . $c->description . '</p>
                          <p class="ingredient" style="display: none">' . ' Ingredient : ' . $c->ingredients . '</p>
                        </div>
                        
                    ';
            }
            ?>
          </div>
        </div>
      </div>

      <!-- Fruits secs et fruits séchés -->
      <div id="fruits" class="container">
        <div class="product-section">
          <h3 class="title toggle-title">Fruits secs et fruits séchés <i class="fa-solid fa-caret-right arrow"></i></h3>
          <div class="container-produits fermer">
            <?php
            foreach ($fruit as $f) {
              echo '
                        <div class="produit" data-name="' . $f->id . '">
                          <img src="/BackOffice/' . $f->image . '" alt="logo-images" class="product-img">
                          <h3 class="product-title">' . $f->nom_produit . '</h3>
                          <div class="price">€ ' . $f->prix . '</div>
                          <i class="bx bx-shopping-bag add-cart"></i>
                          
                          <p class="description" style="display: none">' . ' Description : ' . $f->description . '</p>
                          <p class="ingredient" style="display: none">' . ' Ingredient : ' . $f->ingredients . '</p>
                        </div>
                        
                    ';
            }
            ?>
          </div>
        </div>

      </div>

      <!-- Café, thé et boissons chaudes -->
      <div id="cafethe" class="container">
        <div class="product-section">
          <h3 class="title toggle-title">Café, thé et boissons chaudes <i class="fa-solid fa-caret-right arrow" id="arrow"></i></h3>
          <div class="container-produits fermer">
            <?php
            foreach ($cafe as $c) {
              echo '
                        <div class="produit" data-name="' . $c->id . '">
                          <img src="/BackOffice/' . $c->image . '" alt="logo-images" class="product-img">
                          <h3 class="product-title">' . $c->nom_produit . '</h3>
                          <div class="price">€ ' . $c->prix . '</div>
                          <i class="bx bx-shopping-bag add-cart"></i>
                          
                          <p class="description" style="display: none">' . ' Description : ' . $c->description . '</p>
                          <p class="ingredient" style="display: none">' . ' Ingredient : ' . $c->ingredients . '</p>
                        </div>
                        
                    ';
            }
            ?>
          </div>
        </div>
      </div>
      <!-- Céréales petit-déjeuner -->
      <div id="cereales" class="container">
        <div class="product-section">
          <h3 class="title toggle-title">Céréales petit-déjeuner <i class="fa-solid fa-caret-right arrow"></i></h3>
          <div class="container-produits fermer">
            <?php
            foreach ($cereale as $c) {
              echo '
                        <div class="produit" data-name="' . $c->id . '">
                          <img src="/BackOffice/' . $c->image . '" alt="logo-images" class="product-img">
                          <h3 class="product-title">' . $c->nom_produit . '</h3>
                          <div class="price">€ ' . $c->prix . '</div>
                          <i class="bx bx-shopping-bag add-cart"></i>
                          
                          <p class="description" style="display: none">' . ' Description : ' . $c->description . '</p>
                          <p class="ingredient" style="display: none">' . ' Ingredient : ' . $c->ingredients . '</p>
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
            <a class="buy">Site drive bientot sera disponible pour vos commandes !</a>
            <a href="contact.php" class="cart">Venez découvrir notre épicérie à Sonzay !</a>
          </div>
        </div>
      </div>
    </main>

    <!-- pied du page  -->
    <footer>
      <div class="row">
        <div class="col">
          <img class="logo" src="../images/logolebonprix.jpg">
          <a href="#">
            <h4>Qui sommes-nous ?</h4>
          </a>
          <p>Lebonprix déniche dans chaque région en France et dans
            le monde les meilleurs produits à déguster et à boire,
            sélectionnés auprès des producteurs les plus reconnus dans
            leur profession</p>
          <p><b>L'abus d'alcool est dangereux pour la santé, à consommer avec modération</b></p>
        </div>
        <div class="col">
          <h4>INFORMATIONS<div class="underline"><span></span></div>
          </h4>
          <ul>
            <li> <a href="../lien/contact.php">Contact</a></li>
            <li> <a href="../lien/conditionVente.php">Conditions Générales de ventes</a></li>
            <li> <a href="">Notres enseignes</a></li>
          </ul>
        </div>
        <div class="col">
          <h4>Retrouver Nous <div class="underline"><span></span></h4>
          <div class="social-icons">
            <i class="fab fa-facebook" href="#facebook"></i>
            <i class="fab fa-twitter" href="#facebook"></i>
            <i class="fab fa-tiktok" href="#facebook"></i>
            <i class="fab fa-instagram" href="#facebook"></i>
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

  <!--lien fichier javascript-->
  <script src="../app-panier.js"></script>
  <script src="../js/popupProduits1.js"></script>
  <script src="../js/affichageProduits.js"></script>
  <!--custom js file link-->
</body>

</html>